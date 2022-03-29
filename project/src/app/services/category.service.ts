import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';
@Injectable({
  providedIn: 'root'
})
export class CategoryService {

  constructor(
    private _http : HttpClient
  ) { }

  getData(){
    return this._http.get<any>(environment.apiUrl+"/api/category");
  }
  save(obj:any){
    return this._http.post<any>(environment.apiUrl+"/api/category", obj)
  }
  delete(id:any){
    return this._http.delete<any>(environment.apiUrl+"/api/category/"+id);
  }
  update(id:any, obj:any){
    return this._http.put<any>(environment.apiUrl+"/api/category/"+id, obj);

  }
}
