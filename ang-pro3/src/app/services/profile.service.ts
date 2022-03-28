import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ProfileService {

  constructor(
    private _http : HttpClient
  ) { }

  getData(){
    return this._http.get<any>("http://localhost:3000/api/profile",{
      headers : {
        Authorization : JSON.stringify(localStorage.getItem("token"))
      }
    })
  }
}
