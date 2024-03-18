

import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { CustomerService } from './services/customer.service';
import { UsersModule} from "./users/users.module";
import {UsersComponent} from "./users/users.component";
import {AppRoutingModule} from "./app-routing.module";
import { CustomerComponent} from "./users/customer/customer.component";
import {CustomerModule} from "./users/customer/customer.module";
import { ReactiveFormsModule, FormsModule} from "@angular/forms";
import {createCustomerModule} from "./users/create-customer/createCustomer.module";
import {CommonModule} from "@angular/common";
import {MatPaginatorModule} from "@angular/material/paginator";
import { MatTableModule} from "@angular/material/table";
import { PaginatorComponent} from "./paginator/paginator.component";

@NgModule({
  declarations: [
    AppComponent,
    UsersComponent,
    CustomerComponent,
    PaginatorComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    UsersModule,
    AppRoutingModule,
    CustomerModule,
    createCustomerModule,
    ReactiveFormsModule,
    FormsModule,
    CommonModule,
    MatPaginatorModule,
    MatTableModule
  ],
  exports:[
  ],
  providers: [
    CustomerService
  ],
  bootstrap: [AppComponent],
})
export class AppModule { }

