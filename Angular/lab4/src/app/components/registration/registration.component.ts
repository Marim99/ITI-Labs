import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.css']
})
export class RegistrationComponent {
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


  Add(){
    if(this.validationForm.valid){
      alert("added successfully")
    }
    else{
      alert('please enter valid data')
    }
  }
}
