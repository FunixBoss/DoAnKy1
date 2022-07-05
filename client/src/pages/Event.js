import React, { Component } from 'react'
import {Link} from 'react-router-dom'


export default class event extends Component {
    render() {
        return (
            <>
                {/* breadcrumb section start */}
                <div className="wp_bread_wrapper">
                    <img src="./images/shape2.png" alt className="img-responsive shape2" />
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_bread_caption">
                                    <h1>Events</h1>
                                    <ul className="breadcrumb">
                                        <li><Link to="/">Home</Link></li>
                                        <li>Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* event section start */}
                <div className="wp_event_wrapper wp_top_padder100 wp_bottom_padder50">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_heading">
                                    <h2>Upcoming Events</h2>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_event_caption">
                                    <div className="wp_event_img">
                                        <img src="./images/blog/1.jpg" alt className="img-responsive" />
                                        <Link to="/event_single">19<br />Sept</Link>
                                    </div>
                                    <div className="wp_event_text">
                                        <h4><Link to="/event_single">Pool Partry On the Seak  All are Welcome</Link></h4>
                                        <h5><Link to="/event_single">Organised By: Divid Carlo</Link></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.It aliquip ex ea commodo consequat.</p>
                                        <Link to="/event_single" className="wp_button">GET NOW</Link>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_event_caption left_img">
                                    <div className="wp_left_event_img">
                                        <img src="./images/blog/2.jpg" alt className="img-responsive" />
                                        <Link to="/event_single">20<br />Sept</Link>
                                    </div>
                                    <div className="wp_event_text">
                                        <h4><Link to="/event_single">Pool Side Night Party Please Join Us &amp; Have Fun</Link></h4>
                                        <h5><Link to="/event_single">Organised By: Divid Carlo</Link></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.It aliquip ex ea commodo consequat.</p>
                                        <Link to="/event_single" className="wp_button">GET NOW</Link>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_event_caption">
                                    <div className="wp_event_img">
                                        <img src="./images/blog/3.jpg" alt className="img-responsive" />
                                        <Link to="/event_single">26<br />Sept</Link>
                                    </div>
                                    <div className="wp_event_text">
                                        <h4><Link to="/event_single">Kids Pool Inaugration Programme Please Join us</Link></h4>
                                        <h5><Link to="/event_single">Organised By: Divid Carlo</Link></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.It aliquip ex ea commodo consequat.</p>
                                        <Link to="/event_single" className="wp_button">GET NOW</Link>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_event_caption left_img">
                                    <div className="wp_left_event_img">
                                        <img src="./images/blog/4.jpg" alt className="img-responsive" />
                                        <Link to="/event_single">20<br />Sept</Link>
                                    </div>
                                    <div className="wp_event_text">
                                        <h4><Link to="/event_single">Pool Side Night Party Please Join Us &amp; Have Fun</Link></h4>
                                        <h5><Link to="/event_single">Organised By: Divid Carlo</Link></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.It aliquip ex ea commodo consequat.</p>
                                        <Link to="/event_single" className="wp_button">GET NOW</Link>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_event_caption">
                                    <div className="wp_event_img">
                                        <img src="./images/blog/5.jpg" alt className="img-responsive" />
                                        <Link to="/event_single">26<br />Sept</Link>
                                    </div>
                                    <div className="wp_event_text">
                                        <h4><Link to="/event_single">Kids Pool Inaugration Programme Please Join us</Link></h4>
                                        <h5><Link to="/event_single">Organised By: Divid Carlo</Link></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.It aliquip ex ea commodo consequat.</p>
                                        <Link to="/event_single" className="wp_button">GET NOW</Link>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_pagination">
                                    <ul className="pagination">
                                        <li><Link to="/#">&lt;</Link></li>
                                        <li><Link to="/#">1</Link></li>
                                        <li className="active"><Link to="/#">2</Link></li>
                                        <li><Link to="/#">3</Link></li>
                                        <li><Link to="/#">&gt;</Link></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>

        )
    }
}
