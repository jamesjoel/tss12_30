import { Component, OnInit } from '@angular/core';
import { ProductService  } from '../../../services/product.service';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})
export class ProductComponent implements OnInit {

  allProduct : any[] = [];
  constructor(
    private _prod : ProductService
  ) {
      this._prod.getData().subscribe(data=>{
        this.allProduct = data;
      })
   }

  ngOnInit(): void {
  }

}
