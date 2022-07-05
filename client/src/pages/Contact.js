import React, { Component } from 'react'

export default class contact extends Component {
    render() {
        return (
            <>
                {/* map section start */}
                <div className="wp_map_wrapper">
                    <img src="./images/shape2.png" className="img-responsive shape2" />
                    <div id="map"></div>
                    <div className="wp_map_bread_caption">
                        <h1>Contact</h1>
                        <ul className="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>

                {/* contact section start */}
                <div className="wp_contact_wrapper">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_contact">
                                    <div className="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <div className="wp_contact_content">
                                            <h3>Send Us Message</h3>
                                            <div className="wp_contact_form_group">
                                                <div className="row">
                                                    <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div className="wp_contact_form">
                                                            <input type="text" name="first_name" placeholder="First Name" className="form-control require" />
                                                        </div>
                                                    </div>
                                                    <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div className="wp_contact_form">
                                                            <input type="text" name="last_name" placeholder="Last Name" className="form-control require" />
                                                        </div>
                                                    </div>
                                                    <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div className="wp_contact_form">
                                                            <input type="text" name="email" placeholder="Email" className="form-control require" data-valid="email" data-error="Email should be valid." />
                                                        </div>
                                                    </div>
                                                    <div className="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div className="wp_contact_form">
                                                            <input type="text" name="subject" placeholder="Subject" className="form-control require" />
                                                        </div>
                                                    </div>
                                                    <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div className="wp_contact_form">
                                                            <textarea placeholder="Message" name="message" className="form-control require" defaultValue={""} />
                                                            <div className="response" />
                                                            <button className="wp_button submitForm" data-form-type="contact">GET NOW</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div className="wp_contact_detail">
                                            <img src="./images/envelope.png" />
                                            <h3>Information</h3>
                                            <ul>
                                                <li>
                                                    <div className="wp_contact_icon">
                                                        <i className="fa fa-map-marker" />
                                                    </div>
                                                    <div className="wp_contact_text">
                                                        <p>35/6 D5. Street, Binh Thanh District <br/> Ho Chi Minh City, Viet Nam</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="wp_contact_icon">
                                                        <i className="fa fa-phone" />
                                                    </div>
                                                    <div className="wp_contact_text">
                                                        <p>+84 089 688 9574<br/> +84 0769 162 970<br/> +84 0868 306 045</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="wp_contact_icon">
                                                        <i className="fa fa-envelope" />
                                                    </div>
                                                    <div className="wp_contact_text">
                                                        <p>Nguyenphu1147@gmail.com<br />Hungn12333@gmail.com<br/>Dangmanhhung300@gmail.com</p><p>
                                                        </p></div>
                                                </li>
                                            </ul>
                                            <a href="#"><i className="fa fa-facebook" /></a>
                                            <a href="#"><i className="fa fa-instagram" /></a>
                                            <a href="#"><i className="fa fa-pinterest" /></a>
                                            <a href="#"><i className="fa fa-linkedin" /></a>
                                            <a href="#"><i className="fa fa-twitter" /></a>
                                            <a href="#"><i className="fa fa-google-plus" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0611814792755!2d106.71182065091072!3d10.806626192263266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a330e608a5%3A0x4cc00c5927dcb361!2zMzUsIDYgxJDGsOG7nW5nIEQ1LCBQaMaw4budbmcgMjUsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MjMwOCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1657033452438!5m2!1svi!2s" width="100%" height="600" style="border:0;" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe> */}


                {/* headerquaters section start */}
                <div className="wp_headquaters_wrapper wp_top_padder100 wp_bottom_padder50">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_heading">
                                    <h2>Headquaters</h2>
                                </div>
                            </div>
                            <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                                <div className="wp_headquaters_text">
                                    <img src="./images/contact/01.png" className="img-responsive" />
                                    <h4>Viet Nam, Ha Noi Capital</h4>
                                    <p>285 Doi Can Street, Ba Dinh District</p>
                                </div>
                            </div>
                            <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                                <div className="wp_headquaters_text">
                                    <img src="./images/contact/02.png" className="img-responsive" />
                                    <h4>Viet Nam, Ha Noi Capital</h4>
                                    <p>54 - 56 Le Thanh Nghi Street, Bach Khoa, Hai Ba Trung District</p>
                                </div>
                            </div>
                            <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                                <div className="wp_headquaters_text">
                                    <img src="./images/contact/03.png" className="img-responsive" />
                                    <h4>Viet Nam, Ho Chi Minh</h4>
                                    <p>212 - 214 Nguyen Dinh Chieu Street, District 3</p>
                                </div>
                            </div>
                            <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                                <div className="wp_headquaters_text">
                                    <img src="./images/contact/04.png" className="img-responsive" />
                                    <h4>Viet Nam, Ho Chi Minh</h4>
                                    <p>35/6 D5. Street, Binh Thanh District</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>

        )
    }
}

