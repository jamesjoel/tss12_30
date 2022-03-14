import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class StudentService {

  constructor(
    private _http : HttpClient
  ) { }


  save(obj:any){
    return this._http.post<any>("http://localhost:3000/api/student", obj);
  }
}
