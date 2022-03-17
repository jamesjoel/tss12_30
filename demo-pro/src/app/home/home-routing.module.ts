import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home.component';
import { AboutComponent } from './pages/about/about.component';
import { AddStudentComponent } from './pages/add-student/add-student.component';
import { HomepageComponent } from './pages/homepage/homepage.component';
import { StudentComponent } from './pages/student/student.component';

const routes: Routes = [
  {
    path : "",
    component : HomeComponent,
    children : [
      {
        path : "",
        component : HomepageComponent
      },
      {
        path : "about",
        component : AboutComponent
      },
      {
        path : "student",
        component : StudentComponent
      },
      {
        path : "add-student",
        component : AddStudentComponent
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class HomeRoutingModule { }
