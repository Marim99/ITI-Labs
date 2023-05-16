import React, { Component } from "react";
import Register from "../Register/Register";
import AllStudent from "../AllStudent/AllStudent";

export default class Home extends Component {
  students = [
    { name: "Mariam", age: 24 },
    { name: "Hager", age: 24 },
  ];
  constructor(props) {
    super(props);
    console.log(this.props);
    this.state = {
      students: this.students,
    };
    console.log(this.state);
  }
  handelData = (data) => {
    this.students.push(data);
    this.setState({ students: this.students });
  };

  render() {
    console.log(this.students);
    return (
      <div className="home mt-5">
        <Register onSubmit={this.handelData} />
        <AllStudent allStudent={this.state.students} />
      </div>
    );
  }
}
