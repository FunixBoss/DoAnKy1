@extends('client.master')
@section('title')
    <title>Keansburg Water | Playground</title>
@endsection

@section('main_content')
    <!-- breadcrumb section start -->
    @extends('client.components.breadcrumb')
    @section('breadcrumb')
        Playground
    @endsection
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/7.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Children Pool</h4>
                            <p>The colorful castle, the giant mushroom fountain and the family of elephants, hippos, crocodiles... always welcome the children. Help your child be more active, creative and intelligent.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/8.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Fountain Square</h4>
                            <p>A giant shower with dozens of powerful jets located at the entrance to the Water Park will make you feel excited and excited. You will not be surprised when standing right in the center to be massaged by the powerful jets of water. Join and discover this unforgettable feeling!
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/9.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Wave Pool</h4>
                            <p>A small corner of the sea with gentle slopes, coconut trees swaying with the wind and rumbling waves… you will bathe in the clear blue water, be patted by the waves and enjoy the wonderful natural scenery. great in the heart of the city.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/10.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Kamikaze</h4>
                            <p>Dubbed "super speed", the slide will take you fast & fall into the water from a height of 19m with a spectacular, splashing shot. Let's conquer challenging heights!
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/11.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Water Jet Massage</h4>
                            <p>Dam Sen Water Park has just launched the Water Jet Massage Game with hydraulic resonance of 12 water jets spread throughout the body: shoulders, abdomen, thighs, waistline, feet... The body's resistance ability as well as the rehabilitation of joints help you clearly feel the flexibility when moving, and increase blood circulation.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/12.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Solar Water Massage Pool</h4>
                            <p>Not in the room, but in the middle of the day, you will dispel all fatigue and enjoy the wonderful feeling of refreshment when you are immersed in warm water, gently massaged by 70 designed water jets. inside the lake and enjoy the natural scenery surrounding you.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/13.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Twister Max</h4>
                            <p>With the desire to always change and create novelty for visitors, the Water Park has constantly improved to bring many perfect feelings and endless emotions for visitors when coming here. That's why, Water Park has launched Twister Max after two months of renovation and construction, with lightning speed, only 12 seconds you have conquered Twister Max, Extreme Twist does
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/14.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Boomerang</h4>
                            <p>Dam Sen Water Park completed the installation of a new game Boomerang and officially opened on June 1 - this is a giant slide (high 12m, wide 25m), shaped like a phoenix spreading its wings and operating as a weapon of the Australian aborigines (throw it to the finish line and then return to the thrower), the giant slide will
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/15.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Love Storm & Space Bowl slide chute</h4>
                            <p>These are the latest slides according to European technology. You will start from a height of 12m with magical light and sound, then you will fly around in a space of more than 6m before falling freely into the cool blue lake.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/16.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Multislide</h4>
                            <p>These are the latest slides according to European technology. You will start from a height of 12m with magical light and sound, then you will fly around in a space of more than 6m before falling freely into the cool blue lake.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/17.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Black Thunder Chute</h4>
                            <p>With two spirals from a height of 11m combined with unique sound and light effects inside, it will give you the utmost enjoyment and the feeling of constant change full of surprises.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="{{asset('assets/client/images/playground/18.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Tornado</h4>
                            <p>The tornado will be an opportunity for you to test your courage when winding through the 119m length of the 19m high slide and free-falling into the water. The feeling is unforgettable!
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="{{asset('assets/client/images/playground/19.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="wp_event_text">
                            <h4>Giant Slide </h4>
                            <p>A great feeling will come to you when from a height of 12m you drop yourself drifting along the fast flowing water, winding through fast turns before falling into the cool blue lake.
                            </p>
                            <a href="/playground" class="wp_button">Buy Ticket</a>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_pagination">
                        <ul class="pagination">
                            <li><a href="/#">&#60;</a></li>
                            <li><a href="/#">1</a></li>
                            <li class="active"><a href="/#">2</a></li>
                            <li><a href="/#">3</a></li>
                            <li><a href="/#">&#62;</a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
