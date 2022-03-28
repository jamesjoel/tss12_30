import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  loginForm : FormGroup;
  errMsg  = "";

  constructor(
    private _fb : FormBuilder,
    private _auth : AuthService,
    private _router : Router
  ) {
    this.loginForm = this._fb.group({
      username : [""],
      password : [""]
    })
   }

  ngOnInit(): void {
  }

  submit(){
    this._auth.do_login(this.loginForm.value).subscribe(data=>{
      // console.log(data);
      localStorage.setItem("token", data.authtoken);
      this._router.navigate(["/profile"]);
    }, err=>{
      if(err.error.type==1){
        this.errMsg = "Username And Password";
      }
      if(err.error.type==2){
        this.errMsg = "Password";

      }
    })    
  }
}
