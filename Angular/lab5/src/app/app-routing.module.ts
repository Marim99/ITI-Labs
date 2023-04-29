import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AllStudentsComponent } from './components/all-students/all-students.component';
import { StudentDetailsComponent } from './components/student-details/student-details.component';
import { RegistrationComponent } from './components/registration/registration.component';
import { ErrorComponent } from './components/error/error.component';
import { EditStudentComponent } from './components/edit-student/edit-student.component';

const routes: Routes = [
  {path:'', component:AllStudentsComponent},
  {path:'students', component:AllStudentsComponent},
  {path:'students/:id', component:StudentDetailsComponent},
  {path:'student/:id', component:EditStudentComponent},
  {path:'addStudents', component:RegistrationComponent},
  {path:'**', component:ErrorComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
