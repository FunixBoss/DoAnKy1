@extends('client.master')
@section('title')
    <title>Keansburg Water Park | Cart</title>
@endsection
@section('main_content')
    <!-- breadcrumb section start -->
    @extends('client.components.breadcrumb')
    @section('breadcrumb')
        Cart
    @endsection

    <!-- cart section start -->
    <div class="wp_about_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_caption">
                        <h2>Your Information</h2>
                        <div class="wp_contact_form_group">
                            <div class="row">
                                <div class="col-12">
                                    <div class="wp_contact_form">
                                        <input type="text" name="fullname" placeholder="Fullname" class="form-control require">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="wp_contact_form">
                                        <input type="text" name="email" placeholder="Email" class="form-control require" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="wp_contact_form">
                                        <input type="text" name="phone" placeholder="Phone" class="form-control require">
                                    </div>
                                </div>
                                <button class="wp_button submitForm" data-form-type="contact">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_img">
                    </div>
                </div>
                <div class="col-12">
                </div>

            </div>
        </div>
    </div>
@endsection
