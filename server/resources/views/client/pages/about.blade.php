@extends('client.master')
@section('title')
    <title>Keansburg Waterpark | About</title>
@endsection
@section('main_content')
    <!-- breadcrumb section start -->
    <div class="wp_bread_wrapper">
        <img src="{{asset('assets/client/images/shape2.png')}}" alt="" class="img-responsive shape2" />
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_bread_caption">
                        <h1>About</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section start -->
    <div class="wp_about_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_caption">
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
                        <button class="wp_button">MORE</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_img">
                        <img src="{{asset('assets/client/images/about.png')}}" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright section start -->
    <div class="wp_progress_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_progress_content">
                        <div class="pie" data-percent="92">
                            <span class="pie-value"></span>
                        </div>
                        <h3>Satisfied<br />Visits</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_progress_content">
                        <div class="pie" data-percent="100">
                            <span class="pie-value"></span>
                        </div>
                        <h3>Pool<br />Cleanliness</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_progress_content">
                        <div class="pie" data-percent="90">
                            <span class="pie-value"></span>
                        </div>
                        <h3>Staff<br />Attentions</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
                    <div class="wp_progress_content">
                        <div class="pie" data-percent="96">
                            <span class="pie-value"></span>
                        </div>
                        <h3>Life Gaurd<br />Protection</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service section start -->
    <div class="wp_service_wrapper wp_top_padder100 wp_bottom_padder30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Services</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                    <div class="wp_service_caption">
                        <img src="{{asset('assets/client/images/service/01.png')}}" alt="" class="img-responsive" />
                        <h4>Water Park</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                    <div class="wp_service_caption">
                        <img src="{{asset('assets/client/images/service/02.png')}}" alt="" class="img-responsive" />
                        <h4>Spa</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                    <div class="wp_service_caption">
                        <img src="{{asset('assets/client/images/service/03.png')}}" alt="" class="img-responsive" />
                        <h4>Yoga</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                    <div class="wp_service_caption">
                        <img src="{{asset('assets/client/images/service/04.png')}}" alt="" class="img-responsive" />
                        <h4>Resort</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                    <div class="wp_service_caption">
                        <img src="{{asset('assets/client/images/service/05.png')}}" alt="" class="img-responsive" />
                        <h4>Gym</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
                    <div class="wp_service_caption">
                        <img src="{{asset('assets/client/images/service/06.png')}}" alt="" class="img-responsive" />
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
@endsection
