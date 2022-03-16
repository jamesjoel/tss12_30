import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  loginForm : FormGroup;
  checkForm = false;
  constructor(
    private _fb : FormBuilder
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
    
  }
}
