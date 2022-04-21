import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class BlogService {

  constructor(
    private _http : HttpClient
  ) { }

  getAll(){
    return this._http.get<any>("http://localhost:3000/blog");
  }
  getData(id:any){
    return this._http.get<any>("http://localhost:3000/blog/"+id);
  }
  save(obj:any){
    return this._http.post<any>("http://localhost:3000/blog", obj);
  }
  update(id:any, obj:any){
    return this._http.put<any>("http://localhost:3000/blog/"+id, obj);
  }
  delete(id:any){
    return this._http.delete<any>("http://localhost:3000/blog/"+id);

  }
}
