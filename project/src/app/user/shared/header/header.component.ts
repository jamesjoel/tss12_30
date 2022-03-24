import { Component, OnInit } from '@angular/core';
import { CategoryService } from '../../../services/category.service';
import { AuthService } from '../../services/auth.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  allCategory : any[]=[];

  constructor(
    private _cate : CategoryService,
    public _auth : AuthService
  ) {

    this._cate.getData().subscribe(data=>{
      this.allCategory = data;
    })

   }

  ngOnInit(): void {
  }

}
