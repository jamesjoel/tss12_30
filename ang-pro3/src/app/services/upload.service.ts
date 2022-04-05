import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';


@Injectable({
  providedIn: 'root'
})
export class UploadService {

  constructor(
    private _http : HttpClient
  ) { }

  save(obj:any){
    return this._http.post<any>("http://localhost:3000/api/upload", obj);
  }
}
