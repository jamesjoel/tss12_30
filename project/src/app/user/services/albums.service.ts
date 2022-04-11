import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class AlbumsService {

  constructor(
    private _http : HttpClient
  ) { }

  getAll(){
    return this._http.get<any>(environment.apiUrl+"/api/album");
  }
  getData(id:any){
    return this._http.get<any>(environment.apiUrl+"/api/album/"+id);
  }
  save(obj:any){
    return this._http.post<any>(environment.apiUrl+"/api/album", obj, {
      headers : {
        Authorization : JSON.stringify(localStorage.getItem("mytoken"))
      }
    });
  }
  update(id:any, obj:any){
    return this._http.put<any>(environment.apiUrl+"/api/album/"+id, obj);
  }
  delete(id:any){
    return this._http.delete<any>(environment.apiUrl+"/api/album/"+id);
  }
}
