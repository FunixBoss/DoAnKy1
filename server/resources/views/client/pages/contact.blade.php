@extends('client.master')
@section('title')
    <title>Keansburg Waterpark | Contact</title>
@endsection
@section('main_content')
    <!-- map section start -->
    <div class="wp_map_wrapper">
        <img src="{{asset('assets/client/images/shape2.png')}}" alt="" class="img-responsive shape2">
        <div id="map"></div>
        <div class="wp_map_bread_caption">
            <h1>Contact</h1>
            <ul class="breadcrumb">
                <li><a href="/l">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- contact section start -->
    <div class="wp_contact_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_contact">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="wp_contact_content">
                                <h3>Send Us Message</h3>
                                <div class="wp_contact_form_group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <input type="text" name="first_name" placeholder="First Name" class="form-control require">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <input type="text" name="last_name" placeholder="Last Name" class="form-control require">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <input type="text" name="email" placeholder="Email" class="form-control require" data-valid="email" data-error="Email should be valid.">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <input type="text" name="subject" placeholder="Subject" class="form-control require">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <textarea placeholder="Message" name="message" class="form-control require"></textarea>
                                                <div class="response"></div>
                                                <button class="wp_button submitForm" data-form-type="contact">GET NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="wp_contact_detail">
                                <img src="{{asset('assets/client/images/envelope.png')}}" alt="">
                                <h3>Information</h3>
                                <ul>
                                    <li>
                                        <div class="wp_contact_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="wp_contact_text">
                                            <p>44 Shirley Ave.  West Chicago,James gary Street 60185<p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wp_contact_icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="wp_contact_text">
                                            <p>+6236598963, +6236598965 +6236598963, +6236598965<p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wp_contact_icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="wp_contact_text">
                                            <p>Help@yourmail.com, Mail.mail@mail.com<p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- headerquaters section start -->
    <div class="wp_headquaters_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Headquaters</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/01.png')}}" alt="" class="img-responsive">
                        <h4>Brazil</h4>
                        <p>Brazil , New South Shark Marune, WI 53204</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/02.png')}}" alt="" class="img-responsive">
                        <h4>Paris</h4>
                        <p>Paris , Old South Wales Marune, WI 53204</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/03.png')}}" alt="" class="img-responsive">
                        <h4>India</h4>
                        <p>51 N. Mumbai St. Marune, WI 53204</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/04.png')}}" alt="" class="img-responsive">
                        <h4>New York</h4>
                        <p>New York , West Wales Marune, WI 53204</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
