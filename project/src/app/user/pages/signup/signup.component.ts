import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { SignupService } from '../../services/signup.service';
import { Router } from '@angular/router';
import { checkRePass, checkNum, sizeCheck } from '../../../helpers/custom.validataion';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  userForm:FormGroup;
  checkForm=false;

  constructor(
    private _fb : FormBuilder,
    private _signup : SignupService,
    private _router : Router
  ) {
    this.userForm = this._fb.group({
      fullname : ["", Validators.required],
      email : ["", [Validators.required, Validators.email]],
      password : ["", Validators.required],
      re_password : ["", Validators.required],
      gender : ["", Validators.required],
      address : ["", Validators.required],
      city : ["", Validators.required],
      contact : ["", Validators.required]
    }, 
    {
      validator : [checkRePass(), checkNum(), sizeCheck()]
    })
   }

  ngOnInit(): void {
  }
  
  submit(){
    if(this.userForm.invalid){
      this.checkForm=true;
      return;
    }
    //console.log(this.userForm.value);
    this._signup.save(this.userForm.value).subscribe(data=>{
      // console.log(data);
      if(data){
        this._router.navigate(["/login"]);
      }
    })
  }

}
