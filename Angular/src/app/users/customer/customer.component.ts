import {Component, OnInit, CUSTOM_ELEMENTS_SCHEMA} from '@angular/core';
import { usersModel,eusersModel} from "../../models/users.model";
import {CustomerService} from "../../services/customer.service";
import {CommonModule, NgFor} from "@angular/common";
import { NgIf } from "@angular/common";
import { userModel} from "../../models/users.model";
import {FormBuilder,FormGroup,ReactiveFormsModule} from "@angular/forms";
import {  Router,ActivatedRoute} from "@angular/router";
import  { PageEvent } from "@angular/material/paginator";

@Component({
  selector: 'app-customer',
  standalone: true,
  imports: [NgFor,NgIf, CommonModule,ReactiveFormsModule],
  templateUrl: './customer.component.html',
  styleUrl: './customer.component.css',
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
  providers: [CustomerService]
})
export class CustomerComponent implements OnInit {

  customers: usersModel[];
  viewCustomers: eusersModel['customer_id'];
  editCustomers: any ={};
  // ucustomerForm: eusersModel['customer_id'];
  customers_id: usersModel["customer_id"];

  selectCustomer: userModel["customer_id"];
  showConfirmation: boolean = false;
  customerToDeleteId: number = 0;
  showForm: boolean = false;
  viewForm: boolean = false;
  editForm: boolean = false;
  customerForm: number = 0;
  customerViewForm: number = 0;
  customerUpdateForm: number = 0;
  ucustomerForm: FormGroup;
  acustomerForm: FormGroup;
  //pagination

  constructor(private formBuilder: FormBuilder, private customerService: CustomerService) {
    this.customers = [];
    this.customers_id = []
    this.acustomerForm = this.formBuilder.group({
      name: [''],
      email: [''],
      gender: [],
      dob: [''],
      phone: [''],
      status: ['']
    });
    //update data
    this.ucustomerForm = this.formBuilder.group({
      id:[''],
      name: [''],
      email: [''],
      gender: [''],
      dob: [''],
      phone: [''],
      status: ['']
    });
  //  paginator
  }
  //paginator

  ///////////////show all data in the table/////////////////////
  ngOnInit(): void {
    this.customerService.getAllUsers().subscribe(value => {
      this.customers = value;
    });
  }
  ///////////////show all data in the table end/////////////////////

  ////////////////////////Add new Customer/////////////////////
  onAddClick() {
    this.showForm = true;
  }
  cancelAdd() {
    this.showForm = false;
  }

  ///////////////////////Add new Customer end////////////////////////////
/////////////////////////for delete alert box///////////////////////////
//   confirmDelete(customer_id: number) {
//     const result = window.confirm('Are you sure you want to delete this customer?');
//     if (result) {
//       this.deleteCustomer(customer_id);
//     }
//   }
// deleteCustomer(customer_id: number) {
//     // Delete customer with specified ID from server
//     this.customerService.deleteCustomer(customer_id).subscribe(() => {
//       this.customers_id = this.customers.filter(customer => customer.customer_id !== customer_id);
//        this.refreshTable();
//     });
//   }
  ////////////////////for delete card/////////////////////
  confirmDelete(customer_id: number) {
    this.showConfirmation = true;
    this.customerToDeleteId = customer_id;
  }
////in the box click on "yes" to conform delete and "no" to cancle delete the data//////
  deleteCustomer(customer_id: number) {
    this.customerService.deleteCustomer(customer_id).subscribe(() => {
      this.customers = this.customers.filter(customer => customer.customer_id !== customer_id);
      this.refreshTable();
    });
    this.showConfirmation = false;
  }

  cancelDelete() {
    this.showConfirmation = false;
  }
  // Refresh the table by reloading the page
  refreshTable() {
    location.reload();
  }

//////////////////////View Customer based on the selected id///////////////////////////////
  viewCustomer(customer_id: number) {
    this.viewForm = true;
    this.customerService.getCustomerView(customer_id).subscribe(vivalue => {
      this.selectCustomer = vivalue;
      console.log(this.selectCustomer); // Log the data to verify
    });
  }
  cancleView() {
    this.viewForm = false;
  }

  ////////////////////display the customer data in edit-form based on selected id///////////////////////////
  editCustomer(customer_id: number) {
    this.editForm = true;
    this.customerForm = customer_id;

    // Fetch the existing customer data based on customer_id
    this.customerService.getCustomer(customer_id).subscribe(value => {
      this.editCustomers = value;

      // Populate the form controls with the existing customer data
      this.ucustomerForm.patchValue({
        id: this.editCustomers.customer_id,
        name: this.editCustomers.customer_name,
        email: this.editCustomers.customer_email,
        gender: this.editCustomers.gender,
        dob: this.editCustomers.dob,
        phone: this.editCustomers.phone,
        status: this.editCustomers.status
      });
    });
  }
  cancelEdit() {
    this.editForm = false;
  }
  //////////////////////Edit the customers end///////////////////////////

  /////////////////////Add a new customer//////////////////
  onAddSubmit() {
    const customerNew = this.acustomerForm.value;
    const newData = (
      customerNew.name,
        customerNew.email,
        customerNew.phone,
        customerNew.gender,
        customerNew.status,
        customerNew.dob
    );
    this.customerService.addCustomer(customerNew).subscribe(
      res => {
        console.log(customerNew);
        alert('Customer Added Successfully');
        this.refreshTable();
        // this.viewForm =false;
      });
  }

  /////////////////////update the customer///////////////////////
  onSubmit(id:number,value:any) {
  let uCustomer = this.ucustomerForm.value;
  let Cid = this.ucustomerForm.value.id;

    let updatedData: { [key: string]: any } = {};

    Object.keys(uCustomer).forEach(key => {
      if (uCustomer[key] !== null && uCustomer[key] !== '') {
        updatedData[key] = uCustomer[key];
      }
    });
    this.customerService.updateCustomer(Cid, uCustomer).subscribe(
      uValue => {
        console.log(uValue);
        alert('Customer updated successfully');

        this.editForm = false;
        this.refreshTable();
      }
    );
  }

}
