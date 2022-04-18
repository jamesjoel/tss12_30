import { Component, OnInit } from '@angular/core';
import { Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-box3',
  templateUrl: './box3.component.html',
  styleUrls: ['./box3.component.css']
})
export class Box3Component implements OnInit {

  a = "Indore";
  @Output() myEvent = new EventEmitter();

  constructor() { }

  ngOnInit(): void {
  }
  demo(){
    this.myEvent.emit(this.a);
  }

}
