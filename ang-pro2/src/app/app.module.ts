import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';


import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { Box1Component } from './shared/box1/box1.component';
import { HeaderComponent } from './shared/header/header.component';
import { FooterComponent } from './shared/footer/footer.component';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { HelpComponent } from './pages/help/help.component';
import { InfoComponent } from './shared/info/info.component';
import { BottomHeaderComponent } from './shared/bottom-header/bottom-header.component';
import { EventsComponent } from './pages/events/events.component';
import { ControlStatement1Component } from './pages/control-statement1/control-statement1.component';
import { ControlStatement2Component } from './pages/control-statement2/control-statement2.component';
import { ParentToChildComponent } from './pages/parent-to-child/parent-to-child.component';
import { Box2Component } from './shared/box2/box2.component';
import { StudentComponent } from './pages/student/student.component';
import { TableComponent } from './shared/table/table.component';

@NgModule({
  declarations: [
    AppComponent,
    Box1Component,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    AboutComponent,
    ContactComponent,
    HelpComponent,
    InfoComponent,
    BottomHeaderComponent,
    EventsComponent,
    ControlStatement1Component,
    ControlStatement2Component,
    ParentToChildComponent,
    Box2Component,
    StudentComponent,
    TableComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
