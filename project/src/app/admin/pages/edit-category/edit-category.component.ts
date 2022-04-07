import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { CategoryService } from 'src/app/services/category.service';
import { Router, ActivatedRoute } from '@angular/router';


@Component({
  selector: 'app-edit-category',
  templateUrl: './edit-category.component.html',
  styleUrls: ['./edit-category.component.css']
})
export class EditCategoryComponent implements OnInit {

  cateForm : FormGroup;
  checkForm = false;
  category:any;
  id:any;
  constructor(
    private _fb : FormBuilder,
    private _cate : CategoryService,
    private _router : Router,
    private _actRoute : ActivatedRoute
  ) {
    this.cateForm = this._fb.group({
      _id : [""],
      name : ["", Validators.required]
    });

    this.id = this._actRoute.snapshot.paramMap.get("id");
    // console.log(a);
    this._cate.getSingleData(this.id).subscribe(data=>{
      this.category = data;
      // console.log(this.category);
      this.cateForm.setValue(this.category); 
    })


   }

  ngOnInit(): void {
  }

  update(){
    if(this.cateForm.invalid){
      this.checkForm = true;
      return;
    }
    this._cate.update(this.id, this.cateForm.value).subscribe(data=>{
      console.log(data);
      this._router.navigate(["/admin/category"]);
    })
  }
}
