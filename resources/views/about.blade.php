@extends('main')
@section('title')
About
@endsection
@section('content')
<div class="about">
        <div class="container">
            <div class="row inner-about">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 content-inner-about-left">
                    <div class="content-item-about">
                        <h3>Eat More Healthfully</h3>
                        <div style="clear: both"></div>
                        <p>Quis autem vel eum iure reprehenderit qui
                            in ea voluptate velit esse quam nihil molestiae consequatur,
                            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                        <img class="img-icon-about" src="imager/about/icon-about1.png" alt="">
                    </div>
                    <div class="content-item-about">
                        <h3>Eat More Healthfully</h3>
                        <div style="clear: both"></div>
                        <p>Quis autem vel eum iure reprehenderit qui
                            in ea voluptate velit esse quam nihil molestiae consequatur,
                            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                        <img class="img-icon-about" src="imager/about/icon-about2.png" alt="Responsive image">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-0 col-sm-0 col-0 content-inner-about-center">
                    <img src="imager/about/about.png" alt="">
                </div>

                <div class=" col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 content-inner-about-right">
                    <div class="content-item-about">
                        <img class="img-icon-about" src="imager/about/icon-about3.png" alt="">
                        <h3>Eat More Healthfully</h3>
                        <p>Quis autem vel eum iure reprehenderit qui
                            in ea voluptate velit esse quam nihil molestiae consequatur,
                            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    </div>
                    <div class="content-item-about">
                        <img class="img-icon-about" src="imager/about/icon-about4.png" alt="">
                        <h3>Eat More Healthfully</h3>
                        <p>Quis autem vel eum iure reprehenderit qui
                            in ea voluptate velit esse quam nihil molestiae consequatur,
                            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end content about-->
    <!--intro about-->
    <div class="intro-about">
        <div class="row">
            <div class="col-sm-6 intro-video">
                <img src="imager/about/video.jpg" class="img-bg" alt="">
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <img src="imager/about/control.png" alt=""></a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <iframe height="315" src="../embed/DAu_jF-9AXs.html" allow="accelerometer;
                                 autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="row progress-intro-about">
                    <div class="col-sm-12">
                        <h2>What Have They</h2>
                        <p>Natural extracts <span>80%</span></p>
                        <div class="progress">
                            <div class="progress-bar " style="width:80%"></div>
                        </div>
                        <p>Product of quality <span>75%</span></p>
                        <div class="progress">
                            <div class="progress-bar " style="width:75%"></div>
                        </div>
                        <p>Serving staff <span>92%</span></p>
                        <div class="progress">
                            <div class="progress-bar " style="width:92%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end intro about-->
    <!-- code review home-->
    <div class="container">
        <div class="row review-homepage">
            <div class="container">
                <div class="row ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="content-review-homepage">
                                    <img src="imager/home/patricsia1.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="imager/home/patricsia2.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="imager/home/patricsia3.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end code review home-->
</div>
@endsection