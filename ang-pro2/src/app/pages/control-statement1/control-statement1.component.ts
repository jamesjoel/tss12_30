import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-control-statement1',
  templateUrl: './control-statement1.component.html',
  styleUrls: ['./control-statement1.component.css']
})
export class ControlStatement1Component implements OnInit {

  a = true;
  b=100;
  constructor() { }

  ngOnInit(): void {
    
  }

}
