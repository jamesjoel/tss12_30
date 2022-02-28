import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-events',
  templateUrl: './events.component.html',
  styleUrls: ['./events.component.css']
})
export class EventsComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }


  demo1(){
    console.log("***************");
  }
  demo2(){
    console.log("--------------");
  }
  demo3(){
    console.log("##############");
  }

  demo4(){
    console.log("$$$$$$$$$$$$$$");
  }
  demo5(){
    console.log("@@@@@@@@@@@@@");
  }
 
  demo9(){
    console.log(">>>>>>>>>>>>>>>>>");
  }
  
  demo10(){
    console.log("<<<<<<<<<<<<<<");
  }
}
