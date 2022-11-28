@extends('main')
@section('title')
Home
@endsection
@section('content')
<div class="title-page" style="background-image: url('imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Shop</h1>
                <p><span>Home</span>/ Shop / Cart</p>
            </div>
        </div>
    </div>
</div>
<!--end title page-->
<livewire:cart/>
<!--content cart-->

@endsection