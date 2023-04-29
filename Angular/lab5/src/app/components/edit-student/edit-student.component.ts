import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { StudentsService } from 'src/app/services/students.service';

@Component({
  selector: 'app-edit-student',
  templateUrl: './edit-student.component.html',
  styleUrls: ['./edit-student.component.css']
})
export class EditStudentComponent {
  ID:any;
  Student:any;
  oldStudent:any;
  validationForm:any;
  constructor(myRoute:ActivatedRoute,public myService: StudentsService ,private router: Router){
    this.ID = myRoute.snapshot.params["id"];
  }
  ngOnInit(): void {
    this.myService.GetStudentByID(this.ID).subscribe(
      {
        next:(data)=>{
          //console.log(data);
          this.oldStudent = data;
          this.validationForm = new FormGroup({
            name:new FormControl(this.oldStudent.name,[Validators.required, Validators.minLength(3)]),
            age:new FormControl(this.oldStudent.age,[Validators.min(20),Validators.max(40)]),
            email:new FormControl(this.oldStudent.email,[Validators.email,Validators.required])
          })
        },
        error:(err)=>{console.log(err)}
      }
    );
  }
  editStudent(name:any,age:any, email:any,job:any, phone:any){
    let student = {name, age, email,job, phone};
    if(this.validationForm.valid){
    this.myService.editStudent(student,this.ID).subscribe(
      {
        next:(data)=>{
          //console.log(data);
        },
        error:(err)=>{console.log(err)}
      }
    );
    this.router.navigate(["/students"]);
    }
    else{
      alert('please enter valid data')
    }
  }



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
