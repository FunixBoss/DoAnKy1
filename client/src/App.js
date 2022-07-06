import React from 'react';
import { Routes, Route } from "react-router-dom";
import {Helmet} from "react-helmet";

import './assets/css/bootstrap.min.css'
import './assets/css/animate.css'
import './assets/css/magnific-popup.css'
import './assets/css/font-awesome.min.css'
import './assets/css/fonts.css'
import './assets/css/style.css'

import Menu from './components/Menu';
import Header from './components/Header';
import Footer from './components/Footer';

import Home from './pages/Home';
import About from './pages/About';
import Event from './pages/Event';
import EventSingle from './pages/EventSingle';
import Gallery from './pages/Gallery';
import Contact from './pages/Contact';




function App() {
  return (
    <>
      <Header/>
      <Menu/>

      <Routes>
        <Route path="/" element={<Home />}/>
        <Route path="/gallery" element={<Gallery />} /> 
        <Route path="/event" element={<Event />} /> 
        <Route path="/event_single" element={<EventSingle />} /> 
        <Route path="/contact" element={<Contact />} />
        <Route path="/about" element={<About />}/>
      </Routes>

      <Footer/>




      <Helmet>
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/custom.js"></script>
      </Helmet>
    </>
  );
}

export default App;
