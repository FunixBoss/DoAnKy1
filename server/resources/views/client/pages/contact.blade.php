@extends('client.master')
@section('title')
    <title>Keansburg Water Park | Contact</title>
@endsection
@section('main_content')
    <!-- map section start -->
    <div class="wp_map_wrapper">
        <img src="{{asset('assets/client/images/shape2.png')}}" alt="" class="img-responsive shape2">
        <div id="map">
        </div>
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
                                                <input type="text" name="fullname" placeholder="Fullname" class="form-control require">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <input type="text" name="email" placeholder="Email" class="form-control require" data-valid="email" data-error="Email should be valid.">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <input type="text" name="title" placeholder="Title" class="form-control require">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wp_contact_form">
                                                <textarea placeholder="Message" name="message" class="form-control require"></textarea>
                                                <div class="response"></div>
                                                <button class="wp_button submitForm" data-form-type="contact">To Send</button>
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
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="wp_contact_text">
                                            <p>+84 783562372<br/>+84 769162970<br/>+84 868306045
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wp_contact_icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="wp_contact_text">
                                            <p>nguyenphu1147@gmail.com<br>hungn12333@gmail.com<br/>dangmanhhung300@gmail.com<p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#!"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#!"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#!"><i class="fa-brands fa-google-plus-g"></i></a>
                                <a href="#!"><i class="fa-brands fa-linkedin"></i></a>
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
                        <h4>Ha Noi City, Viet Nam</h4>
                        <p>285 Doi Can, Ba Dinh District/p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/02.png')}}" alt="" class="img-responsive">
                        <h4>Ha Noi City, Viet Nam</h4>
                        <p>54 - 56 Le Thanh Nghi, Bach Khoa, Hai Ba Trung District</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/03.png')}}" alt="" class="img-responsive">
                        <h4>Ho Chi Minh, City</h4>
                        <p>212 - 214 Nguyen Dinh Chieu, District 3/p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_headquaters_text">
                        <img src="{{asset('assets/client/images/contact/04.png')}}" alt="" class="img-responsive">
                        <h4>Ho Chi Minh, City</h4>
                        <p>35/6 D5 Street, Binh Thanh District</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <iframe width="100%" height="700px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0616630591653!2d106.710527826375!3d10.80658930732196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a330e608a5%3A0x4cc00c5927dcb361!2zMzUsIDYgxJDGsOG7nW5nIEQ1LCBQaMaw4budbmcgMjUsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MjMwOCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1657464383081!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
