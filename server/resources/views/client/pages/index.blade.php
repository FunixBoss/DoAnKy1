@extends('client.master')
@section('title')
    <title>Keansburg Water Park | Home</title>
@endsection

@section('main_content')
    <!-- banner section start -->
    <div class="wp_banner_wrapper">
        <img src="{{asset('assets/client/images/shape2.png')}}" alt="" class="img-responsive shape2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="wp_banner_caption">
                        <div class="wp_banner_text">
                            <p>Welcome To</p>
                            <h1>Water Land</h1>
                        </div>
                        <p>Keansburg WaterPark Where Everyone feel <span>Amazing!</span></p>
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
                        <h2>Overview of the Keansburg Waterpark</h2>
                        <p>Keansburg Water Park with a harmonious space combined with romantic rivers melts away worries and sorrows and is also a source of energy for a new day. Take a deep breath to enjoy the fresh air of a poetic nature and then immerse yourself in the undulating waves or let yourself float in the clouds and let the Lazy River soothe and dispel late worries. trouble in a life full of worries.</p>
                        <p >Let's challenge 36 game devices to enjoy the wonderful sensations of each game. Not only bring you fun, games are also seen as challenges. Overcoming all 36 challenges of the game, you will be stronger when facing challenges in life...
                        </p>
                        <p>
                            With only 1 ticket, you will be able to relax and challenge with 36 game devices and a 3000m2 wide wave pool.
                        </p>
                        <a href="/about" class="wp_button">MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_img">
                        {{-- <img src="{{asset('assets/client/images/about.png')}}" alt="" class="img-responsive"> --}}
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/NjOTpuruSgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section start -->
    <div class="wp_gallery_wrapper wp_top_padder100">
        <img src="{{asset('assets/client/images/shape1.png')}}" alt="" class="img-responsive shape1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Gallery</h2>
                    </div>
                    <div class="wp_button_group">
                        <button class="wp_button active" data-filter="all">All</button>
                        <button class="wp_button" data-filter="swimming">Swimming</button>
                        <button class="wp_button" data-filter="kids">Kids</button>
                        <button class="wp_button" data-filter="party">Pool Party</button>
                        <button class="wp_button" data-filter="adults">Adults</button>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="wp_gallery">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults" data-value="1">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/01.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/01.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="2">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/02.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/02.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids" data-value="3">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/03.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/03.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="4">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/04.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/04.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids party" data-value="5">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/05.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/05.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids swimming" data-value="6">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/06.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/06.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="7">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/07.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/07.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming adults" data-value="8">
                                <div class="wp_gallery_img">
                                    <img src="{{asset('assets/client/images/gallery/08.jpg')}}" alt="" class="img-responsive">
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="{{asset('assets/client/images/gallery/08.jpg')}}"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section start -->
    @include('client.components.services')

    <!-- event section start -->
    <div class="wp_event_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Amusement Park</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/1.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Green Dragon Chutes</h4>
                            <p>Conquering time in 12 seconds with a height of 12 meters and a length of 80 meters, Green Dragon is a new game imported from Canada with 03 transparent twists.
                                With the appearance of Green Dragon, visitors are excited by the speed and bravery as its name suggests, just put people in accordance with the regulations, the power of Green Dragon will take us along the spirals of creation. one surprise after another.</p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/2.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Wild River</h4>
                            <p>Under the push of the water from above, you will feel like floating on a small bamboo boat and dance with the bumpy waterfall...
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/3.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Wandering River</h4>
                            <p>Lying on a floating float on a 400m long river winding around green arches and caves… You will have wonderful relaxing moments with nature.</p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/4.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Aqua Dance Stage</h4>
                            <p>A giant shower with dozens of powerful jets located at the entrance to the Water Park will make you feel excited and excited. You will not be surprised when standing right in the center to be massaged by the powerful jets of water. Join and discover this unforgettable feeling!
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/6.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Rope Swing Overcom Waterfall</h4>
                            <p>You must know how to swim! You will slide on a 10m high rope stretched across the lake and fall into the water at a depth of 2.5m. Remember when you fall down, turn around beautifully! There will be applause for you.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="/playground"  class="wp_button">See more</a>
                </div>
            </div>
        </div>
    </div>
@endsection
