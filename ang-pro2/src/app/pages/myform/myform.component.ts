import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, FormArray, FormControl } from '@angular/forms';

@Component({
  selector: 'app-myform',
  templateUrl: './myform.component.html',
  styleUrls: ['./myform.component.css']
})
export class MyformComponent implements OnInit {

  myForm : FormGroup;
  checkForm = false;

  hobbyArr = [
    {
      name : "Cricket", value : "cricket"
    },
    {
      name : "Music", value : "music"
    },
    {
      name : "Football", value : "football"
    }
  ]

  constructor(
    private _fb : FormBuilder
  ) { 
    this.myForm = this._fb.group({
      fullname : ["", Validators.required],
      hobby : this._fb.array([], Validators.required)
    })
  }

  ngOnInit(): void {
  }

  submit(){
    if(this.myForm.controls.hobby.value.length <= 0 ){
        this.myForm.controls.hobby.setErrors({ required : true });
      }
      else{
        
        this.myForm.controls.hobby.setErrors(null);
    }

    if(this.myForm.invalid){
      //console.log(this.myForm.controls);
      this.checkForm = true;
      return;
    }else{
      console.log("hello");
    }
  }


  demo10(ev:any){
    // console.log(this.myForm.value);
    if(ev.target.checked){
      // myarr.push(new FormControl(ev.target.value));
      this.myForm.controls.hobby.value.push(ev.target.value);
      
    }else{
      let i = this.myForm.controls.hobby.value.indexOf(ev.target.value);
      this.myForm.controls.hobby.value.splice(i, 1);

      
    }
    if(this.myForm.controls.hobby.value.length <= 0 )
        this.myForm.controls.hobby.setErrors({ required : true });
      else
        this.myForm.controls.hobby.setErrors(null);
  }



  demo1()
  {
    console.log("*********** DEMO 1")
  }
  demo2(event:any){
    console.log("++++++++++ DEMO 2", event)

  }
}
