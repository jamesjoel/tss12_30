import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ReactiveFormsModule } from '@angular/forms';

import { UserRoutingModule } from './user-routing.module';
import { UserComponent } from './user.component';
import { HomeComponent } from './pages/home/home.component';
import { ContactComponent } from './pages/contact/contact.component';
import { AboutComponent } from './pages/about/about.component';
import { HeaderComponent } from './shared/header/header.component';
import { SliderComponent } from './shared/slider/slider.component';
import { FeatureProductComponent } from './shared/feature-product/feature-product.component';
import { DiscountComponent } from './shared/discount/discount.component';
import { BlogComponent } from './shared/blog/blog.component';
import { FooterComponent } from './shared/footer/footer.component';
import { SignupComponent } from './pages/signup/signup.component';
import { LoginComponent } from './pages/login/login.component';


@NgModule({
  declarations: [
    UserComponent,
    HomeComponent,
    ContactComponent,
    AboutComponent,
    HeaderComponent,
    SliderComponent,
    FeatureProductComponent,
    DiscountComponent,
    BlogComponent,
    FooterComponent,
    SignupComponent,
    LoginComponent
  ],
  imports: [
    CommonModule,
    UserRoutingModule,
    ReactiveFormsModule
  ]
})
export class UserModule { }
