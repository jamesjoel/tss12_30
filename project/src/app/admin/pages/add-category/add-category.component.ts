import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { CategoryService } from 'src/app/services/category.service';

@Component({
  selector: 'app-add-category',
  templateUrl: './add-category.component.html',
  styleUrls: ['./add-category.component.css']
})
export class AddCategoryComponent implements OnInit {

  cateForm : FormGroup;
  checkForm = false;
  constructor(
    private _fb : FormBuilder,
    private _cate : CategoryService,
    private _router : Router

  ) {
    this.cateForm = this._fb.group({
      name : ["", Validators.required]
    })
   }

  ngOnInit(): void {
  }

  submit(){
    if(this.cateForm.invalid){
      this.checkForm = true;
      return;

    }

    this._cate.save(this.cateForm.value).subscribe(data=>{
      // console.log(data);
      this._router.navigate(['/admin/category']);
    })
  }
}
