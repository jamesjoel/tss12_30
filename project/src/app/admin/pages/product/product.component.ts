import { Component, OnInit } from '@angular/core';
import { ProductService  } from '../../../services/product.service';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})
export class ProductComponent implements OnInit {

  allProduct : any[] = [];
  product:any;
  label="Product";
  constructor(
    private _prod : ProductService
  ) {
      this._prod.getData().subscribe(data=>{
        this.allProduct = data;
      })
   }

  ngOnInit(): void {
  }

  askDelete(obj:any){
    this.product = obj;
  }

  confDelete(btn:any){
    this._prod.delete(this.product._id).subscribe(data=>{
      // console.log(data);
      let n = this.allProduct.indexOf(this.product);
      this.allProduct.splice(n, 1);
      btn.click();
    })
  }
}
