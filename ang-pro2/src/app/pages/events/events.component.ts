import { Component, OnInit } from '@angular/core';
import { ChartOptions, ChartType, ChartDataset } from 'chart.js';


@Component({
  selector: 'app-events',
  templateUrl: './events.component.html',
  styleUrls: ['./events.component.css']
})
export class EventsComponent implements OnInit {


  public barChartOptions: ChartOptions = {
    responsive: true,
  };
  public barChartLabels: any[] = ['Rohit', 'Aman', 'Gaurav', 'Nidhi', 'Jaya', 'Parul', 'Vikash'];
  public barChartType: ChartType = 'bar';
  public barChartLegend = true;
  public barChartPlugins = [];

  public barChartData: any[] = [
    { data: [65, 59, 80, 81, 56, 55, 40], label: 'Student' }
    
  ];

  constructor() { }

  ngOnInit(): void {
  }


  demo1(){
    console.log("***************");
  }
  demo2(){
    console.log("--------------");
  }
  demo3(){
    console.log("##############");
  }

  demo4(){
    console.log("$$$$$$$$$$$$$$");
  }
  demo5(){
    console.log("@@@@@@@@@@@@@");
  }
 
  demo9(){
    console.log(">>>>>>>>>>>>>>>>>");
  }
  
  demo10(){
    console.log("<<<<<<<<<<<<<<");
  }
}
