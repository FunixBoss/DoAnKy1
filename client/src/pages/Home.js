import React, { Component } from 'react'
import {Link} from 'react-router-dom'

export default class Index extends Component {
    componentDidMount = () => {
        let tagScript = document.createElement('script');
        tagScript.src = './js/magnific-popup.js';

        document.querySelector('#root').appendChild(tagScript);
    }
    render() {
        return (
            <>
                {/* banner section start */}
                <div className="wp_banner_wrapper">
                    <img src="./images/shape2.png" className="img-responsive shape2" />
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-12 col-xs-12">
                                <div className="wp_banner_caption">
                                    <div className="wp_banner_text">
                                        <p>Welcome To</p>
                                        <h1>Water Land</h1>
                                    </div>
                                    <p>Water Park Where Everyone feel <span>Amazing!</span></p>
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
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                                    <p>luptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
                                    <button className="wp_button">MORE</button>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="wp_about_img">
                                    <img src="./images/about.png" className="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* gallery section start */}
                <div className="wp_gallery_wrapper wp_top_padder100">
                    <img src="./images/shape1.png" className="img-responsive shape1" />
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_heading">
                                    <h2>Gallery</h2>
                                </div>
                                <div className="wp_button_group">
                                    <button className="wp_button active" data-filter="all">All</button>
                                    <button className="wp_button" data-filter="swimming">Swimming</button>
                                    <button className="wp_button" data-filter="kids">Kids</button>
                                    <button className="wp_button" data-filter="party">Pool Party</button>
                                    <button className="wp_button" data-filter="adults">Adults</button>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="row">
                                    <div className="wp_gallery">
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults" data-value={1}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/01.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/01.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={2}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/02.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/02.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids" data-value={3}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/03.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/03.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={4}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/04.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/04.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids party" data-value={5}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/05.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/05.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids swimming" data-value={6}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/06.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/06.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/07.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/07.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming adults" data-value={8}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/08.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/08.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <img src="./images/service/01.png" className="img-responsive" />
                                    <h4>Water Park</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/02.png" className="img-responsive" />
                                    <h4>Spa</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/03.png" className="img-responsive" />
                                    <h4>Yoga</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/04.png" className="img-responsive" />
                                    <h4>Resort</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/05.png" className="img-responsive" />
                                    <h4>Gym</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                                <div className="wp_service_caption">
                                    <img src="./images/service/06.png" className="img-responsive" />
                                    <h4>Sports</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* price section start */}
                <div className="wp_pricing_wrapper wp_top_padder100 wp_bottom_padder50">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_heading">
                                    <h2>Pricing Table</h2>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder50">
                                <div className="wp_pricing_caption">
                                    <div className="wp_pricing_header">
                                        <h2>Basic Plan</h2>
                                        <h1><small>$ </small>0.99</h1>
                                        <h3>Per Month</h3>
                                    </div>
                                    <div className="wp_pricing_body">
                                        <div className="body_icon">
                                            <i className="fa fa-tint" />
                                        </div>
                                        <ul className="basic">
                                            <li><i className="fa fa-check" aria-hidden="true" />Swimming Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Costume Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Snacks Charge</li>
                                            <li><i className="fa fa-times" aria-hidden="true" />Stay Charge</li>
                                            <li><i className="fa fa-times" aria-hidden="true" />Food Charge</li>
                                        </ul>
                                        <button className="wp_button">GET</button>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder50">
                                <div className="wp_pricing_caption">
                                    <div className="wp_pricing_header">
                                        <h2>Premium</h2>
                                        <h1><small>$ </small>0.99</h1>
                                        <h3>Per Month</h3>
                                    </div>
                                    <div className="wp_pricing_body">
                                        <div className="body_icon">
                                            <i className="fa fa-tint" />
                                        </div>
                                        <ul className="premium">
                                            <li><i className="fa fa-check" aria-hidden="true" />Swimming Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Costume Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Snacks Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Stay Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Food Charge</li>
                                        </ul>
                                        <button className="wp_button">GET</button>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-4 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-12 wp_bottom_padder50">
                                <div className="wp_pricing_caption">
                                    <div className="wp_pricing_header">
                                        <h2>Standard</h2>
                                        <h1><small>$ </small>0.99</h1>
                                        <h3>Per Month</h3>
                                    </div>
                                    <div className="wp_pricing_body">
                                        <div className="body_icon">
                                            <i className="fa fa-tint" />
                                        </div>
                                        <ul className="standard">
                                            <li><i className="fa fa-check" aria-hidden="true" />Swimming Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Costume Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Snacks Charge</li>
                                            <li><i className="fa fa-check" aria-hidden="true" />Stay Charge</li>
                                            <li><i className="fa fa-times" aria-hidden="true" />Food Charge</li>
                                        </ul>
                                        <button className="wp_button">GET</button>
                                    </div>
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
                                        <img src="./images/blog/1.jpg" className="img-responsive" />
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
                                        <img src="./images/blog/2.jpg" className="img-responsive" />
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
                                        <img src="./images/blog/3.jpg" className="img-responsive" />
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
                        </div>
                    </div>
                </div>
            </>

        )
    }
}
