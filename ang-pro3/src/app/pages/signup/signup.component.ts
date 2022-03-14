import { Component, OnInit } from '@angular/core';

import { FormGroup, FormBuilder, Validators } from '@angular/forms';

import { StudentService } from '../../services/student.service';
/*
  1. FormGroup ---- Interface
  2. FormBuilder --- Service
  3. Validators ---- Class

*/


@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  myForm : FormGroup;
  checkForm = false;

  constructor(
    private _stu : StudentService,
    private _fb : FormBuilder
  ) {
      this.myForm = this._fb.group({
        fullName : ["", Validators.required],
        email : ["", Validators.required],
        contact : ["", Validators.required]
      });
   }

  ngOnInit(): void {
  }

  submit(){
    if(this.myForm.invalid){
      this.checkForm = true;
      return;
    }
    
    this._stu.save(this.myForm.value).subscribe(data=>{
      console.log("-----", data);
    })
    
  }

}
