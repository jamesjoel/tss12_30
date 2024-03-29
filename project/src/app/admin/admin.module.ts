import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AdminRoutingModule } from './admin-routing.module';
import { AdminComponent } from './admin.component';
import { LoginComponent } from './pages/login/login.component';
import { DashboardComponent } from './pages/dashboard/dashboard.component';
import { ProductComponent } from './pages/product/product.component';
import { CategoryComponent } from './pages/category/category.component';
import { OrderComponent } from './pages/order/order.component';
import { HeaderComponent } from './shared/header/header.component';
import { FooterComponent } from './shared/footer/footer.component';
import { DemoComponent } from './pages/demo/demo.component';

import { ReactiveFormsModule } from '@angular/forms';

import { HttpClientModule } from '@angular/common/http';
import { AddCategoryComponent } from './pages/add-category/add-category.component';
import { AddProductComponent } from './pages/add-product/add-product.component';
import { EditCategoryComponent } from './pages/edit-category/edit-category.component';
import { DeleteComponent } from './shared/delete/delete.component';

@NgModule({
  declarations: [
    AdminComponent,
    LoginComponent,
    DashboardComponent,
    ProductComponent,
    CategoryComponent,
    OrderComponent,
    HeaderComponent,
    FooterComponent,
    DemoComponent,
    AddCategoryComponent,
    AddProductComponent,
    EditCategoryComponent,
    DeleteComponent
  ],
  imports: [
    CommonModule,
    AdminRoutingModule,
    HttpClientModule,
    ReactiveFormsModule
  ]
})
export class AdminModule { }
