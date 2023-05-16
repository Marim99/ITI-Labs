import logo from "./logo.svg";
import "./App.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Header from "./components/Header/Header";
import Footer from "./components/Footer/Footer";
import Home from "./components/Home/Home/Home";
import Error from "./components/Error/Error";
import StudentDetails from "./components/StudentDetails/StudentDetails";
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <div className="header">
          <Header />
        </div>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/register" element={<Home />} />
          <Route path="/students/:id" element={<StudentDetails />} />
          {/* <Route path="/users" element={<Users/>}>
                            <Route path="me" element={<Profile/>}/>
                            <Route path=":id" element={<Details/>}/>
                        </Route> */}
          <Route path="*" element={<Error />} />
        </Routes>
        <Footer />
      </BrowserRouter>
    </div>
  );
}

export default App;
