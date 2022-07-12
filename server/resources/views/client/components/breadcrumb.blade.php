<!-- breadcrumb section start -->
<div class="wp_bread_wrapper">
    <img src="{{asset('assets/client/images/shape2.png')}}" alt="" class="img-responsive shape2" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wp_bread_caption">
                    <h1>@yield('breadcrumb')</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>@yield('breadcrumb')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
