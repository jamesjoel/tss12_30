import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { CategoryService } from 'src/app/services/category.service';
import { ProductService } from 'src/app/services/product.service';

@Component({
  selector: 'app-add-product',
  templateUrl: './add-product.component.html',
  styleUrls: ['./add-product.component.css']
})
export class AddProductComponent implements OnInit {

  proForm : FormGroup;
  checkForm = false;
  allCate : any[]=[];
  constructor(
    private _fb : FormBuilder,
    private _pro : ProductService,
    private _router : Router,
    private _cate : CategoryService
  ) { 
    this.proForm = this._fb.group({
      name : ["", Validators.required],
      price : ["", Validators.required],
      detail : ["", Validators.required],
      discount : ["", Validators.required],
      category : ["", Validators.required],
      image : ["", Validators.required],
    });

    this._cate.getData().subscribe(data=>{
      this.allCate = data;
    })

  }

  ngOnInit(): void {
  }
  get f(){
    return this.proForm.controls;
  }

  submit(image:any){
    if(this.proForm.invalid){
      this.checkForm = true;
      return;
    }
    let form = new FormData();
    let photo = image.files[0];
    form.append("photo", photo);
    form.append("formdata", JSON.stringify(this.proForm.value));

    this._pro.save(form).subscribe(data=>{
      console.log(data);
      this._router.navigate(['/admin/product']);
    })
  }

}
