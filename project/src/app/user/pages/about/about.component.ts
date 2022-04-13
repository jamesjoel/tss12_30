import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {

  allData : any[]=[];
  constructor(
    private _http : HttpClient
  ) {

    this._http.get<any>("https://fakestoreapi.com/products").subscribe(data=>{
      this.allData = data;
    })

   }

  ngOnInit(): void {
  }

}
