
import { Component ,OnInit} from '@angular/core';
import { CustomerService } from './services/customer.service';
import { CustomerComponent} from "./users/customer/customer.component";
import {NgModule} from "@angular/core";
import {UsersComponent} from "./users/users.component"

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  standalone: true,
  imports:[
  CustomerComponent,
    UsersComponent
]
})
export class AppComponent{
  constructor(private customerService: CustomerService) { }
}


