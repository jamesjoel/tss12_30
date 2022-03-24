import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';
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
    return this._http.post<any>(environment.apiUrl+"/api/auth", obj);
  }
  isLoggedIn(){
    if(localStorage.getItem("mytoken"))
    {
        return true;
      }else{
        
        return false;
    }
  }
  logout(){
    localStorage.removeItem("mytoken");
    this._router.navigate(["/login"]);

  }
}
