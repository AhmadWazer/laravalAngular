import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {HttpClientModule} from "@angular/common/http";
import {AppComponent} from "../../app.component";
import {BrowserModule} from "@angular/platform-browser";
import {RouterModule, Routes} from "@angular/router";
import {FormsModule, ReactiveFormsModule} from "@angular/forms";


@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    HttpClientModule,
  ],
  bootstrap: [AppComponent],
  exports: [
    RouterModule,
    BrowserModule,
    FormsModule
  ],
  providers: []
})
export class CustomerModule { }
