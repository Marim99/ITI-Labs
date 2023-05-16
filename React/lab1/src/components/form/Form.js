import "./form.css";
import { Component } from "react";

class Form extends Component {
  constructor() {
    super();
    this.state = {
      data: "",
    };
  }
  reset = () => {
    this.setState({ data: "" });
  };

  getData = (e) => {
    this.setState({ data: e.target.value });
  };

  render() {
    return (
      <div className="form-container">
        <input
          type="text"
          placeholder="Enter Data"
          value={this.state.data}
          onChange={this.getData}
        />
        <p>Data: {this.state.data}</p>

        <button
          type="button"
          value="Reset"
          onClick={this.reset}
          id="input-submit"
        >
          Reset
        </button>
      </div>
    );
  }
}

export default Form;
