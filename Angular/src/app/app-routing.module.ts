
import { NgModule} from "@angular/core";
import { Routes, RouterModule} from "@angular/router";
import {CreateCustomerComponent} from "./users/create-customer/create-customer.component";
import {CommonModule} from "@angular/common";

export const routes: Routes =[
  {path:'',loadChildren:()=>import('./users/users.module').then(module=>module.UsersModule)},
  { path: 'create_customer', component: CreateCustomerComponent }
];
@NgModule({
  imports: [CommonModule ,RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule{}
