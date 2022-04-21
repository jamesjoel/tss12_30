import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path : "",
    loadChildren : ()=>import("./home/home.module").then(h=>h.HomeModule)
  },
  {
    path : "blog",
    loadChildren : ()=>import("./blog/blog.module").then(b=>b.BlogModule)
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
