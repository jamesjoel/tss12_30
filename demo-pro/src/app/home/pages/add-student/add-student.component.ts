import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { StudentService } from '../../services/student.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-add-student',
  templateUrl: './add-student.component.html',
  styleUrls: ['./add-student.component.css']
})
export class AddStudentComponent implements OnInit {

  stuForm : FormGroup;
  checkForm = false;

  constructor(
    private _fb : FormBuilder,
    private _stu : StudentService,
    private _router : Router
  ) {
    this.stuForm = this._fb.group({
      name : ["", Validators.required],
      age : ["", Validators.required],
      class : ["", Validators.required],
    })
   }

  ngOnInit(): void {
  }

  submit(){
    if(this.stuForm.invalid){
      this.checkForm = true;
      return;
    }

    this._stu.save(this.stuForm.value).subscribe(data=>{
      console.log(data);
      this._router.navigate(["/student"]);
    })
  }

  get f(){
    return this.stuForm.controls;
  }

}
