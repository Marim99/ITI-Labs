import React from "react";
import "./artistCard.css";
import { Link } from "react-router-dom";
export default function ArtistCard(props) {
  console.log(props.cover);
  return (
    <div className="movie">
      <Link to={`/artist/${props.id}`} className="text-decoration-none">
        <figure className="movie__figure">
          <img src={props.cover} className="movie__poster" alt="" />
          <h2 className="movie__title text-decoration-none">{props.name}</h2>
        </figure>
      </Link>
    </div>
  );
}
