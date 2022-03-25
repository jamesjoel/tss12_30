import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  loginForm : FormGroup;
  checkForm = false;
  errMsg = "";
  constructor(
    private _fb : FormBuilder,
    private _auth : AuthService,
    private _router : Router
  ) {
    this.loginForm = this._fb.group({
      username : ["", Validators.required],
      password : ["", Validators.required]
    })
   }

  ngOnInit(): void {
  }

  submit(){
    if(this.loginForm.invalid){
      this.checkForm = true;
      return;
    }
    this._auth.do_login(this.loginForm.value).subscribe(data=>{
      if(data){
        localStorage.setItem("admintoken", data.token);
        this._router.navigate(["/admin/dashboard"]);
      }
    }, err=>{
      if(err.error.type==1){
        this.errMsg = "This Username and Password is Incorrect";
      }
      if(err.error.type==2){
        this.errMsg = "This Password is Incorrect";

      }
    })
  }

}
