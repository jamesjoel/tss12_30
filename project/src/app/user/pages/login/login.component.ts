import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { AuthService } from '../../services/auth.service';



@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  loginForm : FormGroup;
  checkForm = false;

  errMsg="";

  constructor(
    private _fb : FormBuilder,
    private _auth : AuthService
  ) {
    this.loginForm = this._fb.group({
      email : ["", [Validators.required, Validators.email]],
      password : ["", Validators.required]
    })
   }

  ngOnInit(): void {
  }

  login(){
    if(this.loginForm.invalid){
      this.checkForm = true;
      return;
    }
    this._auth.do_login(this.loginForm.value).subscribe(data=>{
      console.log(data);
    }, err=>{
      // console.log(err);
      if(err.error.type==1){

        this.errMsg = "This Username/Email and Password is Incorrect";
      }
      if(err.error.type==2){
        
        this.errMsg = "This Password is Incorrect";
      }
    })
    
  }


  getData(){

  }
}
