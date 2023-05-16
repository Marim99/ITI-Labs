import React from "react";
import Student from "../Student/Student";
import "./AllStudent.css";
export default function AllStudent(props) {
  console.log(props);
  return (
    <div>
      <h1>Students</h1>
      <table className="container">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
          </tr>
        </thead>
        <tbody>
          {props.allStudent.map((student) => (
            <Student student={student} />
          ))}
        </tbody>
      </table>
    </div>
  );
}
