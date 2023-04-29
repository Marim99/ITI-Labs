import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
  @Input()students:any;
  studentsData:{name:string, age:number}[]=[];
  getData(data:any){
    console.log(data);
    this.studentsData.push(data);
    // this.students = data;
  }
}
