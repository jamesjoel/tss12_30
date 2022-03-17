import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { ReactiveFormsModule } from '@angular/forms';

import { HomeRoutingModule } from './home-routing.module';
import { HomeComponent } from './home.component';
import { HomepageComponent } from './pages/homepage/homepage.component';
import { AboutComponent } from './pages/about/about.component';
import { StudentComponent } from './pages/student/student.component';
import { HeaderComponent } from './shared/header/header.component';
import { FooterComponent } from './shared/footer/footer.component';
import { AddStudentComponent } from './pages/add-student/add-student.component';


@NgModule({
  declarations: [
    HomeComponent,
    HomepageComponent,
    AboutComponent,
    StudentComponent,
    HeaderComponent,
    FooterComponent,
    AddStudentComponent
  ],
  imports: [
    CommonModule,
    HomeRoutingModule,
    ReactiveFormsModule,
    HttpClientModule
  ]
})
export class HomeModule { }
