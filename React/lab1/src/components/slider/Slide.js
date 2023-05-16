import React, { Component } from "react";
import "./slider.css";
class Slide extends Component {
  constructor() {
    super();
    this.state = { currentSlid: 0 };
  }
  //   currentSlid = 0;
  slide1 = "assets/Images/1.jpg";
  slide2 = "assets/Images/2.jpg";
  slide3 = "assets/Images/3.jpg";
  slides = [this.slide1, this.slide2, this.slide3];

  next = () => {
    if (this.state.currentSlid < this.slides.length - 1) {
      this.setState((state) => {
        return { currentSlid: state.currentSlid + 1 };
      });
    } else {
    }
  };
  prev = () => {
    if (this.state.currentSlid > 0) {
      this.setState((state) => {
        return { currentSlid: state.currentSlid - 1 };
      });
    } else {
    }
  };
  startSlide = () => {
    this.interval = setInterval(() => {
      this.next();
      if (this.state.currentSlid === this.slides.length - 1) {
        this.setState((state) => {
          return { currentSlid: 0 };
        });
      }
    }, 1000);
  };
  stopSlide = () => {
    clearInterval(this.interval);
  };
  render() {
    return (
      <div className="slider-container">
        <div className="container">
          <div className="slider">
            <div className="slides-container">
              <div className="slide current-slide slide-1">
                <img src={this.slides[this.state.currentSlid]} alt="" />
              </div>
            </div>
          </div>
        </div>
        <div className="btn-container">
          <button onClick={this.prev}>previous</button>
          <button onClick={this.next}>Next</button>
          <button onClick={this.startSlide}>Start</button>
          <button onClick={this.stopSlide}>Stop</button>
        </div>
      </div>
    );
  }
}
export default Slide;
