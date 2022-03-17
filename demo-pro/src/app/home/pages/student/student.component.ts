import { Component, OnInit } from '@angular/core';
import { StudentService } from '../../services/student.service';

@Component({
  selector: 'app-student',
  templateUrl: './student.component.html',
  styleUrls: ['./student.component.css']
})
export class StudentComponent implements OnInit {

  allStu:any[]=[];
  constructor(
    private _stu : StudentService
  ) {
    this._stu.getData().subscribe(data=>{
      this.allStu = data;
    })
   }

  ngOnInit(): void {
  }

}
