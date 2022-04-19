import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  imgArr:any[]=[
    {
      image : "assets/1.jpg",
      thumbImage : "assets/1.jpg",
      title : "Hello",
      alt : "Hello"
    },
    {
      image : "assets/2.jpg",
      thumbImage : "assets/2.jpg",
      title : "Hello",
      alt : "Hello"
    },
    {
      image : "assets/3.jpg",
      thumbImage : "assets/3.jpg",
      title : "Hello",
      alt : "Hello"
    },
    {
      image : "assets/4.jpg",
      thumbImage : "assets/4.jpg",
      title : "Hello",
      alt : "Hello"
    }
  ];



  name="rohit";
  city = "mumbai";
  color = ["red", "green", "blue"];

  user = { name : "gaurav", age : 20, city : "pune", fee : 5000 };

  x = "Hello World";

  divcolor = "red";
  h = 200;
  w = 200;


  constructor() { }

  ngOnInit(): void {
  }

  demo(){
    this.x = "The Stepping Stone";
  }
  demo2(){
    console.log("hello world");
  }

  demo3(){
    this.divcolor = "green";
  }
  demo4(){
    this.w++;
    this.h++;
  }
  demo5(){
    this.divcolor = "red";
  }

}
