import React, { Component } from 'react'
import {Link} from 'react-router-dom'

export default class about extends Component {
    render() {
        return (
            <>
                {/* breadcrumb section start */}
                <div className="wp_bread_wrapper">  
                    <img src="./images/shape2.png"  className="img-responsive shape2" />
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_bread_caption">
                                    <h1>About</h1>
                                    <ul className="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li>About</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* about section start */}
                <div className="wp_about_wrapper wp_top_padder100 wp_bottom_padder50">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_about_caption">
                                    <h2>What Is Water Park Theme</h2>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                        quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                        voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione.
                                    </p>
                                    <p>
                                        luptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                        non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam aliquam quaerat voluptatem. Ut enim ad minima. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt.
                                    </p>
                                    <button className="wp_button">MORE</button>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_about_img">
                                    <img src="./images/about.png"  className="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {/* service section start */}
                <div className="wp_service_wrapper wp_top_padder100 wp_bottom_padder30">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_heading">
                                    <h2>Services</h2>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/01.png"  className="img-responsive" />
                                    <h4>Water Park</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.
                                    </p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/02.png"  className="img-responsive" />
                                    <h4>Spa</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.
                                    </p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/03.png"  className="img-responsive" />
                                    <h4>Yoga</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.
                                    </p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/04.png"  className="img-responsive" />
                                    <h4>Resort</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.
                                    </p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/05.png"  className="img-responsive" />
                                    <h4>Gym</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.
                                    </p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/06.png"  className="img-responsive" />
                                    <h4>Sports</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>

        )
    }
}
