import { Component, DEFAULT_CURRENCY_CODE, OnInit } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  name = "rohit";
  fee = 12500;

  curr_d = new Date();
  old_d = this.curr_d.setDate(this.curr_d.getDate()-5);

  mynum = 50;


  data = [
    {
      name : "rohit",
      age : 25,
      city : "indore"
    },
    {
      name : "rohit",
      age : 25,
      city : "indore"
    },{
      name : "rohit",
      age : 25,
      city : "indore"
    },
    {
      name : "rohit",
      age : 25,
      city : "indore"
    }

  ]

  constructor() { }

  ngOnInit(): void {
  }

}
