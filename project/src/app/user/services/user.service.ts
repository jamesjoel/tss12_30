import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(
    private _http : HttpClient
  ) { }

  getData(){
    return this._http.get<any>(environment.apiUrl+"/api/user", {
      headers : {
        Authorization : JSON.stringify(localStorage.getItem("mytoken"))
      }
    });
    // we can inject aur token in headers information, with property "Authorization"
  }
}
