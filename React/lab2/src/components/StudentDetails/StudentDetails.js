import React from "react";
import { useParams } from "react-router-dom";
import "./studentDetails.css";
// import img from "assets/images/img1.svg";
export default function StudentDetails(props) {
  let { id } = useParams();
  let image = "assets/images/img1.svg";
  return (
    <div>
      <div className="justify-content-center align-items-center d-flex mt-5">
        <div className="card mt-5">
          <div className="card-front">
            {/* <img src={image} alt="" className="w-100 h-100" /> */}
            <p className="title"></p>
            <p className="subtitle"></p>
          </div>
          <div className="card-back">
            <p className="">ID: {id} </p>
            <p className="">Email:Mariam khaled </p>
            <p className="">Phone: 1111111</p>
            <p className="">Age: 24</p>
          </div>
        </div>
      </div>
    </div>
  );
}
