import { Component, OnInit } from '@angular/core';
import { Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-delete',
  templateUrl: './delete.component.html',
  styleUrls: ['./delete.component.css']
})
export class DeleteComponent implements OnInit {

  @Input() obj:any;
  @Input() label:any;
  @Output() myEvent = new EventEmitter();

  constructor() { }

  ngOnInit(): void {
  }


  demo(btn:any){
    this.myEvent.emit(btn);
  }
}
