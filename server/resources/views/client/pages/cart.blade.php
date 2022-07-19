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
<div class="wp_cart_wrapper wp_top_padder100 wp_bottom_padder50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 wp_bottom_padder50 ">
                <div class="wp_cart_caption wp_cart_information">
                    <h2>Customer Information</h2>
                    <div class="wp_contact_form_group">
                        <div class="row">
                            <div class="col-12">
                                <div class="wp_contact_form">
                                    <input type="text" name="fullname" placeholder="Fullname"
                                        class="form-control require">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="wp_contact_form">
                                    <input type="text" name="email" placeholder="Email"
                                        class="form-control require" data-valid="email"
                                        data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="wp_contact_form">
                                    <input type="text" name="phone" placeholder="Phone"
                                        class="form-control require">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wp_cart_caption wp_cart_information">
                    <h2>Payment Method</h2>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wp_bottom_padder50">
                <div class="wp_cart_caption wp_cart_order">
                    <h2>Order</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="wp_cart_content">
                                {{-- <div class="time">Date of Use: <strong>19/07/2022</strong></div>
                                <ul>
                                    <li>
                                        <h3>Adult</h3>
                                        <div class="unit-price">
                                            <div class="count">x1</div>
                                            <div class="price"><strong>30$</strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h3>Student</h3>
                                        <div class="unit-price">
                                            <div class="count">x1</div>
                                            <div class="price"><strong>30$</strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h3>Kid</h3>
                                        <div class="unit-price">
                                            <div class="count">x1</div>
                                            <div class="price"><strong>30$</strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h3>Total</h3>
                                        <div class="total-price">
                                            <div class="price"><strong>90$</strong></div>
                                        </div>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="wp_cart_caption wp_cart_checkout">
                    <div class="row">
                        <div class="col-12">
                            <button class="checkout_button">Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
