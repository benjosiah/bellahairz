<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.css')}}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css?ver=1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link href="{{asset('asset/css/all.css')}}" rel="stylesheet">
    <link href="css.css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>
        @yield('title')
    </title>
    <style>
        .modal{
            display:block;
        }
        .add-to-cart {
        
          /* padding-right: 70px; */
          border: 1px solid #999999;

          border-radius: 0; }
           .btn-group .p {
            position: absolute;
            width: 40px;
            right: 0;
            height: 100%;
            top: 0;
            bottom: 0;
            background: #999999; }
             .btn-group .add-to-cart p i {
              color: white; }
           .btn-group .add-to-cart:hover {
            background: #333333;
            color: white; }
             .btn-group .add-to-cart:hover p {
              background: #333333; }
           .btn-group .add-to-cart:focus {
            outline: none;
            box-shadow: none !important; }
    </style>
    @livewireStyles
</head>
<body>
@include('header')
@yield('content')
@include('footer')
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <x-livewire-alert::scripts />
<script>
    // window.addEventListener('show-product', event => {
    //     // console.log(product)
    //     $('#exampleModalCenter').modal('show')
    // })
</script>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="asset/js/owl.carousel.js"></script>
<script type="text/javascript" src="asset/js/custom.js"></script>
</body>
</html>