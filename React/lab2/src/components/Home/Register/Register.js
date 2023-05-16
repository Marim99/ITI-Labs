import React, { Component } from "react";
import "./Register.css";
export default class Register extends Component {
  constructor(props) {
    super(props);
    this.state = {
      name: "",
      age: "",
    };
    this.updateName = this.updateName.bind(this);
    this.updateAge = this.updateAge.bind(this);
    // this.setUser = this.setUser.bind(this);
  }
  setUser = (e) => {
    this.setState({ name: this.state.name });
    this.setState({ age: this.state.age });
    this.props.onSubmit({ age: this.state.age, name: this.state.name });
  };

  updateName(event) {
    this.setState({ name: event.target.value });
  }
  updateAge(event) {
    this.setState({ age: event.target.value });
  }
  render() {
    return (
      <div>
        <div className="form container ">
          <input
            type="text"
            placeholder="Name"
            onChange={this.updateName}
            className="mb-3"
          />
          <input
            type="text"
            placeholder="Age"
            onChange={this.updateAge}
            className="mb-3"
          />
          <input
            type="button"
            value="Fire Now"
            onClick={this.setUser}
            className="mb-3"
          />
        </div>
      </div>
    );
  }
}
