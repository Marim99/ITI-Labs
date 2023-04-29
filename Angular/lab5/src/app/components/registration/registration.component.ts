import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { StudentsService } from 'src/app/services/students.service';

@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.css']
})
export class RegistrationComponent {

  constructor(private myService:StudentsService,private router: Router){  }

  AddStudent(name:any,age:any, email:any,job:any, phone:any){
    let newStudent = {name, age, email,job, phone};
    if(this.validationForm.valid){
    this.myService.AddNewStudent(newStudent).subscribe();
    this.router.navigate(["/students"]);
    }else{
      alert('please enter valid data')
    }
  }

  validationForm = new FormGroup({
    name:new FormControl(null,[Validators.required, Validators.minLength(3)]),
    age:new FormControl(null,[Validators.min(20),Validators.max(40)]),
    email:new FormControl(null,[Validators.email,Validators.required])
  })

  get AgeValid(){
    return this.validationForm.controls["age"].valid;
  }
  get NameValid(){
    return this.validationForm.controls["name"].valid;
  }
  get EmailValid(){
    return this.validationForm.controls["email"].valid;
  }
}
