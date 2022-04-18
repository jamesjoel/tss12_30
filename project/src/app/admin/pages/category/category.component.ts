
import { Component, OnInit } from '@angular/core';
import { CategoryService } from '../../../services/category.service';

@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

  allCategory : any[]=[];
  category:any;
  label="Category";


  
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

  askDelete(obj:any){
    console.log(obj);
    this.category = obj;
  }

  confDelete(btn:any){
    this._cate.delete(this.category._id).subscribe(data=>{
      // console.log(data);
      let n = this.allCategory.indexOf(this.category);
      this.allCategory.splice(n, 1);
      btn.click();
    })
  }


  demo(y:any){
    console.log(y);
  }
}
