import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { ProfileService } from 'src/app/services/profile.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {

  constructor(
    private _profile : ProfileService
  ) {
    this._profile.getData().subscribe(data=>{
      console.log(data);
    })
   }

  ngOnInit(): void {
  }

  

}
