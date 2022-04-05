import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder } from '@angular/forms';
import { UploadService } from 'src/app/services/upload.service';

@Component({
  selector: 'app-file-upload',
  templateUrl: './file-upload.component.html',
  styleUrls: ['./file-upload.component.css']
})
export class FileUploadComponent implements OnInit {

  myForm : FormGroup;


  constructor(
    private _fb : FormBuilder,
    private _upload : UploadService
  ) {
    this.myForm = this._fb.group({
      file : [""]
    })
   }

  ngOnInit(): void {
  }

  submit(obj:any){
    // console.log(obj.files[0]);
    // obj = <input type="file" />

    let file = obj.files[0];

    let form = new FormData();
    form.append("myfile", file);
    this._upload.save(form).subscribe(data=>{
      console.log(data);
    })
  }

}
