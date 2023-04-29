import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class StudentsService {

  constructor(private readonly myClient:HttpClient) { }
  //URL     http://localhost:3000/users
  // private readonly Base_URL = "https://jsonplaceholder.typicode.com/users";
  private readonly Base_URL = "http://localhost:3000/students";
  //Methods [All Requests]
  GetAllStudents(){
    //method[Get-Delete-Put-Patch]
    return this.myClient.get(this.Base_URL);
  }
  GetStudentByID(id:any){
    return this.myClient.get(this.Base_URL+"/"+id);
  }
  AddNewStudent(newStudent:any){
    return this.myClient.post(this.Base_URL, newStudent);
  }
  deleteStudent(id:any){
    return this.myClient.delete(this.Base_URL+"/"+id);
  }
  editStudent(student:any,id:any){
    return this.myClient.patch(this.Base_URL+"/"+id, student);
  }
}
