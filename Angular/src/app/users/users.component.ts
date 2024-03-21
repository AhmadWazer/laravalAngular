import { Component } from '@angular/core';
import {CustomerComponent} from "./customer/customer.component";
import { CreateCustomerComponent} from "./create-customer/create-customer.component";

@Component({
  selector: 'app-users',
  standalone: true,
  imports: [CustomerComponent,CreateCustomerComponent],
  templateUrl: './users.component.html',
  styleUrl: './users.component.css'
})
export class UsersComponent {

}
