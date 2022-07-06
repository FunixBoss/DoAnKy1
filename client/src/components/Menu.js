import React, { Component } from 'react'
import {Link} from 'react-router-dom'

export default class Menu extends Component {
    render() {
        return (
            <div className="wp_navigation_menu">
                <button className="wp_close_btn"><i className="fa fa-times" /></button>
                <div className="wp_nav_logo">
                    <Link to="/"><img src="./images/logo.png" style={{width: '250px', height: '100px'}}/></Link>
                </div>
                <ul>
                    <li>
                        <Link to="/"><i className="fa fa-home" aria-hidden="true" />Home</Link>
                    </li>
                    <li>
                        <Link to="/gallery"><i className="fa fa-picture-o" aria-hidden="true" />Gallery</Link>
                    </li>
                    <li className="dropdown">
                        <Link to="#">
                            <i className="fa fa-calendar-check-o" aria-hidden="true" />
                            Events
                            <span className="fa fa-angle-down" aria-hidden="true" />
                        </Link>
                        <ul className="sub-menu">
                            <li>
                                <Link to="/event">
                                    <i className="fa fa-angle-right" aria-hidden="true" />
                                    Events
                                </Link>
                            </li>
                            <li>
                                <Link to="/event_single">
                                    <i className="fa fa-angle-right" aria-hidden="true" />
                                    Events Single
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <Link to="/contact">
                            <i className="fa fa-address-book-o" aria-hidden="true" />
                            Contact
                        </Link>
                    </li>
                    <li>
                        <Link to="/about">
                            <i className="fa fa-user" aria-hidden="true" />
                            About
                        </Link>
                    </li>
                </ul>
            </div>
        )
    }
}
