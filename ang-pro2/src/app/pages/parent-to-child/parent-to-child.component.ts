import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-parent-to-child',
  templateUrl: './parent-to-child.component.html',
  styleUrls: ['./parent-to-child.component.css']
})
export class ParentToChildComponent implements OnInit {

  a = "";
  x:any;


  go(){
    this.x = this.a;
    this.a = "";
  }








  b = "male";

  show = false;

  hello = false;


  city = "";

  constructor() { }

  ngOnInit(): void {
  }


  demo(){
    console.log(this.a);
  }
}
