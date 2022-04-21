import { Component, OnInit } from '@angular/core';
import { BlogService } from './services/blog.service';

@Component({
  selector: 'app-blog',
  templateUrl: './blog.component.html',
  styleUrls: ['./blog.component.css']
})
export class BlogComponent implements OnInit {

  allBlog:any[]=[];
  constructor(
    private _blog : BlogService
  ) {
    this._blog.getAll().subscribe(data=>{
      this.allBlog = data;
    })
   }

  ngOnInit(): void {
  }

}
