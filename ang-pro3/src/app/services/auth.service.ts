import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Router } from '@angular/router';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private _http : HttpClient,
    private _router : Router
  ) { }

  do_login(obj:any){
    return this._http.post<any>("http://localhost:3000/api/auth", obj);
  }

  isLoggedIn(){
    if(localStorage.getItem("token")){
      return true;
    }else{
      return false;
    }
  }
  logout(){
    localStorage.removeItem("token");
    this._router.navigate(["/login"]);
  }
}
