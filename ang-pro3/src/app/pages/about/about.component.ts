import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

interface Hello{
  name : string;
  age : number;
  gender : string;
}


@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {


  a:Hello={
    name : "rohit",
    age : 25,
    gender : "male"
  }





  dataCome = false;
  product:any[]=[];
  constructor(private _http : HttpClient) { }

  ngOnInit(): void {
  }

  demo(){
    this.dataCome=true;
    this._http.get<any>("https://fakestoreapi.com/products").subscribe(data=>{
      this.dataCome=false;
      console.log(data);
      this.product = data;
    })
  }
}
