import React, { useEffect, useState } from "react";
import ArtistCard from "../ArtistCard/ArtistCard";
import "./home.css";
export default function Home() {
  const [artists, setArtists] = useState([]);

  useEffect(() => {
    fetch(`http://localhost:3000/artists`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log(data);
        setArtists(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  return (
    <ul className="artists">
      {artists.map((artist) => (
        <li key={artist.id}>
          <ArtistCard {...artist} />
        </li>
      ))}
    </ul>
  );
}
