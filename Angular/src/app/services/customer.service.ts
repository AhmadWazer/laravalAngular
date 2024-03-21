import { Injectable } from '@angular/core';
import { HttpClient} from "@angular/common/http";
import {usersModel} from "../models/users.model";
import {BehaviorSubject, map, Observable} from "rxjs";
import { userModel} from "../models/users.model";
import {Form,FormGroup} from "@angular/forms";
import number = CSS.number;

const endpoint = 'https://jsonplaceholder.typicode.com/customer';
@Injectable({
  providedIn: 'root'
})

export class CustomerService {

  private baseUrl = "http://localhost:8000/api/customer/";

  public AllUsers = new BehaviorSubject<usersModel[]>([]);



  constructor(private http: HttpClient) {
    this.getAllUsers();
    this.getCustomer(Number('customer_id'));
  }
////////////get all users to table///////////////
  getAllUsers(): Observable<usersModel[]> {
    return this.http.get<any>(this.baseUrl + 'show').pipe(
      map(data => data.customers)
    )
  }
  ///////////view one users data to show///////////
  getCustomerView(customer_id:number):Observable<userModel>{
    return this.http.get<any>(`${this.baseUrl}view/${customer_id}`).pipe(
      map( data =>data.viewCustomers)
    );
  }
////////////for edit get the user of the selected id////////////////
  getCustomer(customer_id: number): Observable<userModel> {
    return this.http.get<any>(`${this.baseUrl}edit/${customer_id}`).pipe(
      map( data =>data.editCustomers)
    );
  }

///////////////update the customer data///////////////////////
  updateCustomer(Cid: number,uCustomer: any): Observable<any> {
    return this.http.put<any>(`${this.baseUrl}update/${Cid}`,uCustomer);
  }
//////////delete///////////
  deleteCustomer(customer_id: number): Observable<any> {
    return this.http.delete<any>(this.baseUrl + customer_id).pipe(
      map(value => value.customer_id)
    );
  }
  //////add//////////
  addCustomer(customerNew: any): Observable<any> {
    return this.http.post(this.baseUrl + 'add', customerNew);
  }
}

