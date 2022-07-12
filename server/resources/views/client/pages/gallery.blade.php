@extends('client.master')
@section('title')
    <title>Keansburg Water | Gallery</title>
@endsection

@section('main_content')
    <!-- breadcrumb section start -->
	@extends('client.components.breadcrumb')
    @section('breadcrumb')
        Gallery
    @endsection
	<!-- gallery section start -->
	<div class="wp_gallery_wrapper gallery_page wp_top_padder50 wp_bottom_padder50">
		<img src="{{asset('assets/client/images/shape1.png')}}" alt="" class="img-responsive shape1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming kids" data-value="8">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/08.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/08.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/09.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/09.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults party" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/10.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/10.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming adults" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/11.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/11.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter party" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/12.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/12.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/13.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/13.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/14.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/14.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/15.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/15.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults party" data-value="7">
								<div class="wp_gallery_img">
									<img src="{{asset('assets/client/images/gallery/16.jpg')}}" alt="" class="img-responsive">
									<div class="wp_gallery_overlay popup-gallery">
										<a href="{{asset('assets/client/images/gallery/16.jpg')}}"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="wp_pagination wp_top_padder50">
									<ul class="pagination">
										<li><a href="#">&#60;</a></li>
										<li><a href="#">1</a></li>
										<li class="active"><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&#62;</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
