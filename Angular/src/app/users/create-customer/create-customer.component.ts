import {Component, OnInit} from '@angular/core';
import { FormGroup, FormControl,ReactiveFormsModule } from "@angular/forms";
import {CustomerService} from "../../services/customer.service";
import {CommonModule} from "@angular/common";
import { usersModel} from "../../models/users.model";

@Component({
  selector: 'app-create-customer',
  standalone: true,
  imports: [
    CommonModule,
    ReactiveFormsModule
  ],
  templateUrl: './create-customer.component.html',
  styleUrl: './create-customer.component.css',
  providers:[CustomerService]
})
export class CreateCustomerComponent implements OnInit {
  // private customers: usersModel[];


  constructor(private  customerService: CustomerService) {}
  addCustomer = new FormGroup({
    name: new FormControl(''),
    email: new FormControl(''),
    radio: new FormControl(''),
    dob: new FormControl(''),
    phone: new FormControl(''),
    status: new FormControl('')
  });

  ngOnInit():void {
     // this.customerService.add(this.addCustomer.value).subscribe(response => {
     //  console.log(response);
     // });
  }

 // onSubmit(){
 //    this.addCustomer.value.name ?? '',
 //     this.addCustomer.value.email ?? '',
 //    this.addCustomer.value.radio ?? '',
 //     this.addCustomer.value.phone ?? '',
 //     this.addCustomer.value.dob ?? '',
 //    this.addCustomer.value.status ?? ''
 // }

}
