import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { StudentsService } from 'src/app/services/students.service';

@Component({
  selector: 'app-all-students',
  templateUrl: './all-students.component.html',
  styleUrls: ['./all-students.component.css']
})
export class AllStudentsComponent {

  Students:any;
  constructor(public myService:StudentsService,private router: Router){
  }
  ngOnInit(): void {
    this.myService.GetAllStudents().subscribe(
      {
        next:(data)=>{
          //console.log(data)
          this.Students = data;
        },
        error:(err)=>{console.log(err)}
      }
    )
  }

  deleteStudent(id:any) {
    this.myService.deleteStudent(id).subscribe(
      {
        next:(data)=>{
          this.ngOnInit();
        },
        error:(err)=>{console.log(err)}
      }
    )
  }
}
