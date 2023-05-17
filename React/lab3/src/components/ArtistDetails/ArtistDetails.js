import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import "./artistDetails.css";
export default function ArtistDetails() {
  let { id } = useParams();
  let [artist, setArtist] = useState({});
  //console.log(id);
  useEffect(() => {
    fetch(`http://localhost:3000/artists/${id}`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log(data);
        setArtist(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, [id]);

  console.log(artist.albums);
  return (
    <div className="container artist">
      <main>
        {artist && (
          <div className="movie-card">
            <div className="poster-wrapper">
              <div className="poster">
                {artist && (
                  <img src={`/${artist && artist.cover}`} alt="poster" />
                )}
                <div className="release-date">
                  <h2>30</h2>
                  <div className="divider"></div>
                  <p>NOV 2017</p>
                </div>
                <div className="btn-play">&#9655;</div>
              </div>
            </div>

            <div className="movie-info">
              <div className="header-section">
                <h2>{artist.name}</h2>

                <div className="extra">
                  <div className="ratings">
                    <p> &#9733; &#9733; &#9733; &#9733; &#9734; 8.0</p>
                  </div>
                </div>
              </div>
              <div className="synopsis-section">
                <h3>{artist.name}</h3>
                <p>{artist.bio}</p>
              </div>
              <div className="gallery-section">
                <h3>Albums</h3>
                <div className="gallery">
                  {artist.albums &&
                    artist.albums.map((album) => (
                      <div className="album">
                        <div className="medium">
                          <img src={`/${album.cover}`} alt="media" />
                        </div>
                        <div className="release-date">
                          <h2>{album.title}</h2>
                          <div className="divider"></div>
                          <p>{album.year}</p>
                        </div>
                      </div>
                    ))}
                </div>
              </div>
            </div>
          </div>
        )}
      </main>
    </div>
  );
}
