import React, { Component } from 'react'
import {Link} from 'react-router-dom'

export default class Footer extends Component {
    
    

    render() {
        return (
            <>
            <div className="wp_footer_wrapper wp_top_padder100 wp_bottom_padder50">
                <img src="./images/shape1.png" className="img-responsive shape1" />
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div className="wp_footer_content">
                                <img src="./images/logo.png" />
                                <ul>
                                    <li><Link to="/">Home</Link></li>
                                    <li><Link to="/gallery">Gallery</Link></li>
                                    <li><Link to="/event">Events</Link></li>
                                    <li><Link to="/contact">Contact</Link></li>
                                    <li><Link to="/about">About</Link></li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div className="wp_footer_contact">
                                <i className="fa fa-map-marker" aria-hidden="true" />
                                <h2>Address</h2>
                                <p>35/6 D5. Street, Binh Thanh District <br/> Ho Chi Minh City, Viet Nam</p>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div className="wp_footer_contact">
                                <i className="fa fa-phone" aria-hidden="true" />
                                <h2>Phone</h2>
                                <p>+84 089 688 9574<br/>+84 0769 162 970<br/>+84 0868 306 045</p>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div className="wp_footer_contact">
                                <i className="fa fa-envelope" aria-hidden="true" />
                                <h2>Email</h2>
                                <Link to="/#">Nguyenphu1147@gmail.com<br />Hungn12333@gmail.com<br/>Dangmanhhung300@gmail.com</Link>
                            </div>
                        </div>
                        <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div className="wp_social_icons">
                                <ul>
                                    <li>
                                        <Link to="/#"><i className="fa fa-twitter" aria-hidden="true" /></Link>
                                    </li>
                                    <li>
                                        <Link to="/#"><i className="fa fa-facebook" aria-hidden="true" /></Link>
                                    </li>
                                    <li>
                                        <Link to="/#"><i className="fa fa-google-plus" aria-hidden="true" /></Link>
                                    </li>
                                    <li>
                                        <Link to="/#"><i className="fa fa-linkedin" aria-hidden="true" /></Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="wp_copyright_wrapper">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div className="wp_copyright_content">
                                <h5>Copyrights © 2022 All Rights Reserved by Keansburg Waterpark</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            </>
        )
    }
}
