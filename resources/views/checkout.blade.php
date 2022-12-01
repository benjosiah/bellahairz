@extends('main')
@section('title')
Home
@endsection
@section('content')
<div class="container ">
        <!-- <div class="entry-content">
            <div class="woocommerce-info">
                <i class="far fa-window-maximize"></i> &nbsp;&nbsp;&nbsp;Returning customer?
                <a class="showlogin">Click here to login</a>
            </div>
            <form class="woocommerce-form woocommerce-form-login" method="POST" action="#">
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a  new customer, please proceed to the Billing & Shipping section.</p>
                <p class="form-row-first float-left">
                    <input type="text" class="input-text" name="username" id="username" placeholder="Username or email*">
                </p>
                <p class="form-row-last float-right">
                    <input class="input-text" type="password" name="password" id="password" placeholder="Password*">
                </p>
                <p class="form-button">
                    <button class="btn-sm">Login</button><br>
                    <label class="woocommerce-form__label">
                        <input class="woocommerce-form__input" name="rememberme" type="checkbox" id="rememberme" value="forever">
                        <span>Create an account?</span>
                    </label>
                </p>
                <p class="woocommerce-LostPassword">
                    <a href="#">Lost your password?</a>
                </p>
                <div style="clear: both;"></div>
            </form>

            <div class="woocommerce-info">
                <i class="far fa-window-maximize"></i> &nbsp;&nbsp;&nbsp;Have a coupon?
                <a class="showcoupon">Click here to enter your code</a>
            </div>
            <form class="checkout_coupon" method="post" action="#">
                <p class="form-row-first float-left">
                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                </p>
                <p class="form-row-last float-right">
                    <button class="btn-sm">Apply Coupon</button>
                </p>
                <div style="clear: both;"></div>
            </form>
        </div> -->
</div>

<div class="container">
    <div class="row content-checkout">
        <div class="col-md-6 billing-detail">
            <h2>Billing details</h2>
            <form action="{{route('pay')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12"><p>First name<span>*</span></p>
                        <input type="text" name="first_name">
                    </div>
                    <div class="col-md-6 col-sm-12 col-12"><p>Last name<span>*</span></p>
                        <input type="text" name="last_name">
                    </div>
                </div>                <div class="row">
                    <div class="col-md-6"><p>Phone<span>*</span></p>
                        <input type="text" name="phone">
                    </div>
                    <div class="col-md-6"><p>Email Address<span>*</span></p>
                        <input type="text" name="email">
                    </div>
                </div>
                <p>Address<span>*</span></p>
                <input type="text" placeholder="Steet Address" name="address">
                <p>Town/City<span>*</span></p>
                <input type="text" name="town">
                <!-- <p><input type="checkbox" class="check-creat-account"> &nbsp;&nbsp;&nbsp;Create an account</p> -->
                <h3>Additional information</h3>
                <p>Order notes</p>
                <textarea name="note" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                <div style="width: 100%;text-align: center;margin-top: 40px;">
                    <button type="submit" class="btn">PLACE ORDER</button>
                </div>
            </form>

        </div>
        <div class="col-md-6 item-checkout">
            <h2>Your order</h2>
            @foreach($cart as $item)
            <div class="item-checkout-detail" style="border-bottom: 1px solid #e6e6e6;">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-5">
                            <img src="images/{{$item->options->image}}" class="card-img" alt="...">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-7">
                            <div class="card-body">
                                <p class="card-text">{{$item->name}}</p>
                                <p class="card-text">x{{$item->qty}}</p>
                                <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">N</span> {{$item->qty * $item->price}}
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="sub-payment" style="margin-top: 20px;">
                <h5>Subtotal&nbsp;&nbsp;&nbsp;<span>N {{$total}}</span></h5>
            </div>
            <div class="sub-payment">
                <h5>Shipping &nbsp;&nbsp;&nbsp;<small> there are no shipping methods available. please double check your
                    address, or contact us if you need any help.
                </small>
                </h5>
            </div>
            <div class="sub-payment">
                <h5>Total&nbsp;&nbsp;&nbsp;<span>N {{$total}}</span></h5>
            </div>
            <!-- <div class="payment">
                <div class="content-type-payment">
                    <input type="radio" name="type-payment" class="showpayment">&nbsp;&nbsp;Direct bank transfer
                    <div class="input-content">
                        Make your payment directly into our bank account. Please use your Order ID as the payment
                        reference.
                        Your order will not be shipped until the funds have cleared in our account.
                    </div>
                </div>
                <div class="content-type-payment">
                    <input type="radio" name="type-payment" class="showpayment">&nbsp;&nbsp;Check payments
                    <div class="input-content">
                        Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                    </div>
                </div>
                <div class="content-type-payment">
                    <input type="radio" name="type-payment" class="showpayment">&nbsp;&nbsp;Cash on delivery
                    <div class="input-content">
                        Pay with cash upon delivery.
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection