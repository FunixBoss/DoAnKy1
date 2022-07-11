@extends('client.master')
@section('title')
    <title>Keansburg Waterpark | Event Single</title>
@endsection

@section('main_content')
    <!-- breadcrumb section start -->
    <div class="wp_bread_wrapper">
        <img src="{{ asset('assets/client/images/shape2.png') }}" alt="" class="img-responsive shape2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_bread_caption">
                        <h1>Fare</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Fare</li>
                        </ul>
                        <h2>Only <i>1 ticket , Enjoy all day</i> 36 game <br />devices at <i>Keansburg Water Park</i></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event single page start -->
    <div class="wp_event_single_wrapper wp_top_padder100 wp_bottom_padder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="widget_area">
                        <div class="widget widget_fare">
                            <div class="panel panel-info">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Keansburg Water Park Ticket Price</div>
                                <div class="panel-body">
                                    <!-- Table -->
                                <table class="table table-striped">
                                    <thead>
                                        <td>Type</td>
                                        <td>Fare</td>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        </tr>
                                    </tbody>
                                </table>
                                </div>

                            </div>
                        </div>
                        <div class="widget widget_upcoming_events">
                            <h4 class="widget-title">Up Coming Events</h4>
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/client/images/sidebar/b1.jpg') }}" alt=""
                                        class="img-responsive">
                                    <div class="post">
                                        <h4><a href="#">Lorem ipsum dolor</a></h4>
                                        <p><a href="#">1 March 2018 | 6:25 AM</a></p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/client/images/sidebar/b2.jpg') }}" alt=""
                                        class="img-responsive">
                                    <div class="post">
                                        <h4><a href="#">Lorem ipsum dolor</a></h4>
                                        <p><a href="#">1 March 2018 | 6:25 AM</a></p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/client/images/sidebar/b3.jpg') }}" alt=""
                                        class="img-responsive">
                                    <div class="post">
                                        <h4><a href="#">Lorem ipsum dolor</a></h4>
                                        <p><a href="#">1 March 2018 | 6:25 AM</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_tags">
                            <h4 class="widget-title">Tags</h4>
                            <a href="#" class="wp_button">Games</a>
                            <a href="#" class="wp_button">Matches</a>
                            <a href="#" class="wp_button">News</a>
                            <a href="#" class="wp_button">Tennis</a>
                            <a href="#" class="wp_button">Up Comming Match</a>
                            <a href="#" class="wp_button">Games</a>
                            <a href="#" class="wp_button">Matches</a>
                            <a href="#" class="wp_button">News</a>
                        </div>
                        <div class="widget widget_social_icons">
                            <h4 class="widget-title">Follow Us</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
