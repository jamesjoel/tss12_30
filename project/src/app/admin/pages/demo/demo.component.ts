import { Component, OnInit } from '@angular/core';
import { DemoService } from '../../services/demo.service';


@Component({
  selector: 'app-demo',
  templateUrl: './demo.component.html',
  styleUrls: ['./demo.component.css']
})
export class DemoComponent implements OnInit {

  allData : any[]=[];
  constructor(
    private _demo : DemoService
  ) {

    this._demo.getData().subscribe(data=>{
      // console.log(data);
      this.allData = data;
    })

   }

  ngOnInit(): void {
  }

}
