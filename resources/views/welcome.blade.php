@extends('main')
@php 
    $active = "home";
@endphp
@section('title')
Home
@endsection
@section('content')
<div class="content-homepage">
    <!-- slide-homepage-1-->
    <div class="slide-index2 slide-index3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-homepage" style="background-image: url('imager/home/bellahairz_header.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 content-slide">
                                    <span>Original Beauty Products</span>
                                    <p>Get Amazing Discounts Right NOW</p>
                                    <h2>Bella Hairz </h2>
                                    <a href="/prooduct-page">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('imager/home/bellahairz_header2.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 content-slide">
                                    <span>100% Human Hair</span>
                                    <p>Redefine Your Class  </p>
                                    <h2>Affordable Luxury</h2>
                                    <a href="/prooduct-page">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('imager/home/bellahairz_header3.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-lg-6 col-md-8 content-slide">
                                    <span>Strictly Original Products</span>
                                    <p>Guaranteed Quality</p>
                                    <h2>Beauty with Class </h2>
                                    <a href="/prooduct-page">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-slide-homepage">
                <ul class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><p>1</p></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"><p>2</p></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"><p>3</p></li>
                </ul>

            </div>
        </div>

    </div>
    <!--end slide-homepage-1-->
    <!--Product out-->
    <div class="container">
        <div class="row content-homepage-home3">
            <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12  layer-content-homepage">
                <img src="imager/product/bella_hairz5.jpg" alt="">
            </div>
            <div class=" col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="product-out">
                    <div class="title">
                        <h2 class="text-center">Super Double Drwan</h2>
                    </div>
                    <div id="demo-slide1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-slide1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-slide1" data-slide-to="1"></li>
                            <li data-target="#demo-slide1" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row product">
                                @foreach($first->products->take(3) as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>
                            </div>
                            @if($first->products->count() > 5)
                            <div class="carousel-item">
                                <div class="row product">                              
                                @foreach($first->products->skip(3)->take(3)  as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>
                            </div>
                            @endif
                            @if($first->products->count() > 8)
                            <div class="carousel-item">
                                <div class="row product">
                                @foreach($first->products->skip(6)->take(3) as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>

                            </div>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--banner - product-->
    <div class="container">
        <div class="banner-product">
            <a href="#"><img src="imager/home/banner-1-product.jpg" alt=""></a>
        </div>
    </div>
    <!--end banner product-->
    <div class="container">
        <div class="row content-homepage-home3">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="product-out">
                    <div class="title">
                        <h2 class="text-center">Bouncy </h2>
                    </div>
                    <div id="demo-slide2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-slide2" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-slide2" data-slide-to="1"></li>
                            <li data-target="#demo-slide2" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row product">
                                @foreach($second->products->take(3) as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>
                            </div>
                            @if($second->products->count() > 5)
                            <div class="carousel-item">
                                <div class="row product">                              
                                @foreach($second->products->skip(3)->take(3)  as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>
                            </div>
                            @endif
                            @if($second->products->count() > 8)
                            <div class="carousel-item">
                                <div class="row product">
                                @foreach($second->products->skip(6)->take(3) as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>

                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layer-content-homepage">
                <img src="imager/product/bella_hairz6.jpg" alt="">
            </div>
        </div>
    </div>
    <!--banner - product-->
    <div class="container">
        <div class="banner-product">
            <a href="#"> <img src="imager/home/banner-2-product.jpg" alt=""></a>
        </div>
    </div>
    <!--end banner product-->
    <div class="container">
        <div class="row content-homepage-home3">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layer-content-homepage">
                <img src="imager/product/bella_hairz7.jpg" alt="">
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="product-out">
                    <div class="title">
                        <h2 class="text-center">Water Curls</h2>
                    </div>
                    <div id="demo-slide3" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-slide3" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-slide3" data-slide-to="1"></li>
                            <li data-target="#demo-slide3" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row product">
                                @foreach($last->products->take(3) as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>
                            </div>
                            @if($last->products->count() > 5)
                            <div class="carousel-item">
                                <div class="row product">                              
                                @foreach($last->products->skip(3)->take(3)  as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>
                            </div>
                            @endif
                            @if($last->products->count() > 8)
                            <div class="carousel-item">
                                <div class="row product">
                                @foreach($last->products->skip(6)->take(3) as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="javascript:void(0)" class="wp-post-image">
                                                    <img class="image-cover" src="{{$product->image}}" alt="product">
                                                </a>
                                            
                                            </div>
                                            <div class="card-body">
                                            <div class="btn-group">

                                            <button onclick="addToCart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                                
                                            </div>
                                                <p class="card-title"><a href="javascript:void(0)">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                {{$product->name}}</a></p>
                                                <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">N</span>{{$product->price}}
                                                            </span>
                                                        </ins>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
    
                                @endforeach
                                </div>

                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Product out-->
    <!--blog-homepage-->
    <div class="blog-homepage3">
        <div class="container">
            <div class="content-masonry">
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html"> Caring For Hair Extensions</a></h5>

                                            <p class="card-text">Having spent a sizeable cut on your classy Bella hair
                                                peruvian extensions, here are five tips on how to keep them ever new...</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Essential Hair Equipment for You</a>
                                            </h5>

                                            <p class="card-text">There is almost no way you can keep your hair alive
                                                without owning some of these essential hair tools</p>
                                        </div>
                                        <div class="card-body">
                                            <span>28th October 2022</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Why Your Hair is Your Crown</a>
                                            </h5>
                                            <p class="card-text">Doing the most to get by, you put so much effort into 
                                                your life daily, for that you've earned a crown, yous hair should tell.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>4th November 2022</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Caring for Hair Extensions</a>
                                            </h5>
                                            <p class="card-text">Having spent a sizeable cut on your classy Bella hair
                                                peruvian extensions, here are five tips on how to keep them ever new...</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20th October 2022</span>
                                            <a href="javascrip:void(0)" class="card-link share">Read
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Essential Hair Equipment For You </a>
                                            </h5>
                                            <p class="card-text">There is almost no way you can keep your hair alive
                                                without owning some of these essential hair tools</p>
                                        </div>
                                        <div class="card-body">
                                            <span>28th November 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Read
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Why Your Hair is Your Crown </a></h5>
                                            <p class="card-text">Doing the most to get by, you put so much effort into 
                                                your life daily, for that you've earned a crown, yous hair should tell.</p>
                                        </div>
                                        <div class="card-body share">
                                            <span>4th November 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Read
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Caring for Hair Extensions</a></h5>
                                            <p class="card-text">Having spent a sizeable cut on your classy Bella hair
                                                peruvian extensions, here are five tips on how to keep them ever new...</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20th October 2022</span>
                                            <a href="javascrip:void(0)" class="card-link share">Read
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Essential Hair Equipment For You</a>
                                            </h5>
                                            <p class="card-text">There is almost no way you can keep your hair alive
                                                without owning some of these essential hair tools.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>28th October 2022</span>
                                            <a href="javascrip:void(0)" class="card-link share">Read
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="imager/blog/bella-hair3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Why Your Hair is Your Crown</a>
                                            </h5>
                                            <p class="card-text">Doing the most to get by, you put so much effort into 
                                                your life daily, for that you've earned a crown, yous hair should tell.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>4th November 2022</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end blog homepage-->
    <div class="best-new">
        <div class="container">
            <div class="row product">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>Best Sellers</h2>
                        </div>
                        <div class="float-right btn-group">
                            <div class="btn-left">
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="lnr lnr-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="btn-right">
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/best1.jpg" alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Nutritional herbs</a></p>

                                                <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>51

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>41
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/best2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Against aging</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/best1.jpg" alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Nutritional herbs</a></p>

                                                <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>51

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>41
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/best2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Against aging</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/best1.jpg" alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Nutritional herbs</a></p>

                                                <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>51

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>41
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/best2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Against aging</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>New Arrivals</h2>
                        </div>
                        <div class="float-right btn-group">
                            <div class="btn-left">
                                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                    <span class="lnr lnr-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="btn-right">
                                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                    <span class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/new1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Baebody eye cream</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/new2.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Eye gel for dark </a></p>
                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/new1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Baebody eye cream</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class=" col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/new2.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Eye gel for dark </a></p>
                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/new1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Baebody eye cream</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="javascript:void(0)" class="wp-post-image">
                                                <img class="image-cover" src="imager/product-popular/new2.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="/prooduct-page">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                                    Eye gel for dark </a></p>
                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end best and new-->
    </div>
    <!--logo-->
    <div class="logo-homepage3">
        <div class="owl-carousel owl-theme">
            <div class="item"><a href="#"><img src="imager/home/logo1.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo2.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo3.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo4.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo5.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo6.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo1.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo2.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo3.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo4.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo5.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="imager/home/logo6.png" alt=""></a></div>
        </div>
    </div>
    <!--end logo-->
</div>
@endsection
