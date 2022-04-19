import { Directive } from '@angular/core';
import { ElementRef, HostListener } from '@angular/core';

@Directive({
  selector: '[appMyDir]'
})
export class MyDirDirective {

  constructor(
    private _ele : ElementRef
  ) {
    this._ele.nativeElement.style.backgroundColor = "red";
    this._ele.nativeElement.style.fontSize = "25px";
    this._ele.nativeElement.style.border = "10px solid blue";
   }

   @HostListener('click') demo(){
     this._ele.nativeElement.style.backgroundColor="green";
   }
   @HostListener('mouseover') demo2(){
     this._ele.nativeElement.style.borderColor = "yellow";
   }

}
