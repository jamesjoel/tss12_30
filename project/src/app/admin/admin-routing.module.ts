import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AdminComponent } from './admin.component';
import { CategoryComponent } from './pages/category/category.component';
import { DashboardComponent } from './pages/dashboard/dashboard.component';
import { DemoComponent } from './pages/demo/demo.component';
import { LoginComponent } from './pages/login/login.component';
import { OrderComponent } from './pages/order/order.component';
import { ProductComponent } from './pages/product/product.component';
import { BackdoorGuard } from './guard/backdoor.guard';

const routes: Routes = [
  {
    path : "",
    component : AdminComponent,
    children : [
      {
        path : "",
        component : LoginComponent
      },
      {
        path : "dashboard",
        component : DashboardComponent,
        canActivate : [BackdoorGuard]
        
      },
      {
        path : "product",
        component : ProductComponent,
        canActivate : [BackdoorGuard]
      },
      {
        path : "category",
        component : CategoryComponent,
        canActivate : [BackdoorGuard]
      },
      {
        path : "order",
        component : OrderComponent,
        canActivate : [BackdoorGuard]
      },
      {
        path : "demo",
        component : DemoComponent,
        canActivate : [BackdoorGuard]
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
