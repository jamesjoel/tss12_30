import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-control-statement2',
  templateUrl: './control-statement2.component.html',
  styleUrls: ['./control-statement2.component.css']
})
export class ControlStatement2Component implements OnInit {

  a = 10;

  data = ["red", "green", "blue", "yellow", "pink", "white", "black"];

  user = [
    {
      name : "rohit",
      age : 25,
      city : "indore"
    },
    {
      name : "jaya",
      age : 24,
      city : "mumbai"
    },
    {
      name : "amar",
      age : 30,
      city : "pune"
    }
  ]

  constructor() { }

  ngOnInit(): void {

    
  }

}
