import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-child-to-parent',
  templateUrl: './child-to-parent.component.html',
  styleUrls: ['./child-to-parent.component.css']
})
export class ChildToParentComponent implements OnInit {

  x:any;
  constructor() { }

  ngOnInit(): void {
  }

  demo(a:any){
    // console.log(a);
    this.x = a;
  }

}
