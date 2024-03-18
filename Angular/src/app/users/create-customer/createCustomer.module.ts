import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {CreateCustomerComponent} from "./create-customer.component";

@NgModule({
  imports: [
    CommonModule,
  ],
  exports: [
    CreateCustomerComponent,
  ],
  declarations: [
    CreateCustomerComponent,
  ]
})
export class createCustomerModule { }
