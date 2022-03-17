import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class StudentService {

  constructor(
    private _http : HttpClient
  ) { }

  getData(){
    return this._http.get<any>(environment.apiUrl+"/api/student");
  }
  save(obj:any){
    return this._http.post<any>(environment.apiUrl+"/api/student", obj);
  }
}
