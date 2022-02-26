import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  a=0;
  b=0;
  constructor() { }

  ngOnInit(): void {
  }

  demo(){
    this.a = Math.random()*500;
    this.a = Math.floor(this.a); 
    // any random number in a lessthen 500
    this.b = Math.random()*800;
    this.b = Math.floor(this.b);
    // any random number in b lessthen 800
  }
}
