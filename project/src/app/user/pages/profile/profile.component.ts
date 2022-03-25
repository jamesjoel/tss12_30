import { Component, OnInit } from '@angular/core';
import { UserService } from '../../services/user.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {

  user:any;
  constructor(
    private _user : UserService
  ) {

    this._user.getData().subscribe(data=>{
      // console.log(data);
      this.user = data;
    })

   }

  ngOnInit(): void {
  }

}
