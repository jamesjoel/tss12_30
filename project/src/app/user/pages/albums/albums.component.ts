import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { AlbumsService } from '../../services/albums.service';

@Component({
  selector: 'app-albums',
  templateUrl: './albums.component.html',
  styleUrls: ['./albums.component.css']
})
export class AlbumsComponent implements OnInit {

  imageForm : FormGroup;
  checkForm = false;
  constructor(
    private _fb : FormBuilder,
    private _album : AlbumsService
  ) {
    this.imageForm = this._fb.group({
      title : ["", Validators.required],
      category : ["", Validators.required],
      image : ["", Validators.required]
    })
   }

  ngOnInit(): void {
  }

  get f(){
    return this.imageForm.controls;
  }

  submit(obj:any){
    if(this.imageForm.invalid){
      this.checkForm = true;
      return;
    }
    let image = obj.files[0];
    let form = new FormData();
    form.append("formdata", JSON.stringify(this.imageForm.value));
    form.append("photo", image);

    this._album.save(form).subscribe(data=>{
      console.log(data);
    })
  }

}
