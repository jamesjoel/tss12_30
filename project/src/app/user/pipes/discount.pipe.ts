import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'discount'
})
export class DiscountPipe implements PipeTransform {

  transform(a:any, b:any, c:any) {
    let x = Math.floor(a);
    let y = x*5;
    if(b < 100){
      y = y+2;
      
    }
    

    if(c=='electronics'){
      y = y+4;
      return y;
    }else{
      return y;
    }
    // return a*5;
  }

}
