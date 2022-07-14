@extends('client.master')
@section('title')
    <title>Keansburg Water Park | About</title>
@endsection
@section('main_content')
    @extends('client.components.breadcrumb')
    @section('breadcrumb')
        About
    @endsection

    <!-- about section start -->
    <div class="wp_about_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_caption">
                        <h2>About Keansburg Waterpark</h2>
                        <p>
                            Keansburg Water Park with a harmonious space combined with romantic rivers melts away worries and sorrows and is also a source of energy for a new day. Take a deep breath to enjoy the fresh air of a poetic nature and then immerse yourself in the undulating waves or let yourself float in the clouds and let the Lazy River soothe and dispel late worries. trouble in a life full of worries.
                        </p>
                        <p>
                            Let's challenge 36 game devices to enjoy the wonderful sensations of each game. Not only bring you fun, games are also seen as challenges. Overcoming all 36 challenges of the game, you will be stronger when facing challenges in life.
                        </p>
                        <p>
                            Keansburg Water Park is not only one of the familiar entertainment centers of the city people but also a place to bring comfort as well as entertainment for children after months of stressful studying. Your baby's day off will be more fun when you and your parents have fun with the family of Elephants, Hippos, ... where childhood paradise is sparkling with colors with full of slides for babies.
                        </p>
                        <p>
                            Coming to Keansburg Water Park, you will really feel secure when participating in the games at the park because the clean water is regularly renewed, the air is fresh and there is always a professional rescue team ready to support, take care you. In addition, the park also has a system of fast food stalls and a 400-seat restaurant with rich, attractively prepared menus that are always ready to serve you.
                        </p>
                        <p>
                            With only 1 ticket, you will be able to relax and challenge with 36 game devices and a 3000m2 wide wave pool.
                        </p>
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

    {{-- Services --}}
    @include('client.components.services')
@endsection

