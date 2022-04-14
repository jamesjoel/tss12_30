import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-student',
  templateUrl: './student.component.html',
  styleUrls: ['./student.component.css']
})
export class StudentComponent implements OnInit {

  obj : any = {
    name : "",
    age : null,
    city : ""
  }

  data:any=[];

  constructor() { }

  ngOnInit(): void {
  }

  save(){
    // this._stu.save(this.obj).subscribe(data=>{
      this.data.push(this.obj);
      // this.data.push(this.form.value);

    // })
    console.log(this.data);
    this.obj = {
      name : "",
      age : null,
      city : ""
    };
  }

}
