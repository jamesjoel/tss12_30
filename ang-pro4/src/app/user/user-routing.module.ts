import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { UserComponent } from './user.component';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { LoginComponent } from './pages/login/login.component';

const routes: Routes = [
  {
    path : "",
    component : UserComponent,
    children : [
      {
        path : "",
        component : HomeComponent
      },
      {
        path : "about",
        component : AboutComponent
      },
      {
        path : "contact",
        component : ContactComponent
      },
      {
        path : "login",
        component : LoginComponent
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class UserRoutingModule { }
