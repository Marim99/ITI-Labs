import logo from "./logo.svg";
import "./App.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "./components/Home/Home/Home";
import ArtistDetails from "./components/ArtistDetails/ArtistDetails";
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/artist/:id" element={<ArtistDetails />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
