import React, { Component } from 'react'
import '../assets/css/style.css'
import {Link} from 'react-router-dom'


export default class header extends Component {
    componentDidMount = () => {
        let tagScript = document.createElement('script');
        tagScript.src = './js/jquery.js';

        document.querySelector('#root').appendChild(tagScript);
    }
    render() {
        return (
            <div className="wp_header_wrapper">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div className="wp_logo">
                                <a href="/"><img src="./images/logo.png" /></a>
                            </div>
                        </div>
                        <div className="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div className="wp_toggle">
                                <button className="wp_toggle_btn"><i className="fa fa-bars" /></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        )
    }
}
