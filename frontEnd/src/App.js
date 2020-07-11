import React from "react";
import logo from "./logo.svg";
import "./App.css";
import Home from "./cmp/HOME";
import About from "./cmp/About";
import Listing from "./cmp/Listing";
import Auth from "./cmp/Auth";
import Protected from "./cmp/Protected";
import Nav from "./cmp/Nav";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";

function App() {
  return (
    <div className="App">
      <h1>My Assignment</h1>
      <Router>
        <Nav />

        <Switch>
          <Route path="/about">
            <Protected cmp={About} />
          </Route>
          <Route path="/home">
            <Protected cmp={Home} />
          </Route>
          <Route path="/list">
            <Protected cmp={Listing} />
          </Route>
          <Route path="/">
            <Auth />
          </Route>
        </Switch>
      </Router>
    </div>
  );
}

export default App;
