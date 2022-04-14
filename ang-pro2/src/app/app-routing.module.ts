import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { HelpComponent } from './pages/help/help.component';
import { EventsComponent } from './pages/events/events.component';
import { ControlStatement1Component } from './pages/control-statement1/control-statement1.component';
import { ControlStatement2Component } from './pages/control-statement2/control-statement2.component';
import { ParentToChildComponent } from './pages/parent-to-child/parent-to-child.component';
import { StudentComponent } from './pages/student/student.component';


const routes: Routes = [
  {
    path : "help",
    component : HelpComponent
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
    path : "",
    component : HomeComponent
  },
  {
    path : "events",
    component : EventsComponent
  },
  {
    path : "ctrl1",
    component : ControlStatement1Component
  },
  {
    path : "ctrl2",
    component : ControlStatement2Component
  },
  {
    path : "parent-to-child",
    component : ParentToChildComponent
  },
  {
    path : "student",
    component : StudentComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
