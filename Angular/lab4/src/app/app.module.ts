import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RegistrationComponent } from './components/registration/registration.component';
import { AllStudentsComponent } from './components/all-students/all-students.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';
import { StudentDetailsComponent } from './components/student-details/student-details.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { ErrorComponent } from './components/error/error.component';
let routes:Routes = [
  {path:"", component:RegistrationComponent},
  {path:"students", component:AllStudentsComponent},
  {path:"students/:id", component:StudentDetailsComponent},
  {path:"register", component:RegistrationComponent},
  {path:"**", component:ErrorComponent},
]
@NgModule({
  declarations: [
    AppComponent,
    RegistrationComponent,
    AllStudentsComponent,
    StudentDetailsComponent,
    HeaderComponent,
    FooterComponent,
    ErrorComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
