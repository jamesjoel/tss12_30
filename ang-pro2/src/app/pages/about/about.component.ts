import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {

  arr = [
    {
      name : "Mayank",
      age : 21,
      city : "indore"
    },
    {
      name : "Atul",
      age : 24,
      city : "mumbai"
    }
  ]
  constructor() { }

  ngOnInit(): void {
  }

}
