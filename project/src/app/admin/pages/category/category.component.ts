import { Component, OnInit } from '@angular/core';
import { CategoryService } from '../../../services/category.service';

@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

  allCategory : any[]=[];

  constructor(
    private _cate : CategoryService
  ) {

    this._cate.getData().subscribe(data=>{
      // console.log(data);
      this.allCategory = data;
    })

   }

  ngOnInit(): void {
  }

}
