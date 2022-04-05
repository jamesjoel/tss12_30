import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BackdoorGuard } from './guard/backdoor.guard';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { FileUploadComponent } from './pages/file-upload/file-upload.component';
import { HomeComponent } from './pages/home/home.component';
import { LoginComponent } from './pages/login/login.component';
import { ProfileComponent } from './pages/profile/profile.component';
import { SignupComponent } from './pages/signup/signup.component';

const routes: Routes = [
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
    path : "signup",
    component : SignupComponent
  },
  {
    path : "login",
    component : LoginComponent
  },
  {
    path : "profile",
    component : ProfileComponent,
    canActivate : [BackdoorGuard]
  },
  {
    path : "file-upload",
    component : FileUploadComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
