import { Component, EventEmitter, Output } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  usrName="";
  usrAge="";
  @Output("login") myEvent=new EventEmitter();

  fireNow(){
    const newStudent={
      name:this.usrName,
      age:this.usrAge,
    }
    if(+newStudent.age<=40&& +newStudent.age >=20 && newStudent.name.length >=3)
      this.myEvent.emit(newStudent);
  }
}
