@extends('main')
@section('title')
About
@endsection
@section('content')
<!--content contact us-->
<div class="contact-us">
    <!--div class="iframe-responsive">
        <iframe src="../maps/embed.html?pb=!1m18!1m12!1m3!1d3724.587550454988!2d105.79960181429747!3d21.009164093824385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca1023de3f9%3A0x509606baa1145b0f!2sDinh+Ami+Hanoi+Hotel!5e0!3m2!1sen!2sus!4v1556949968573!5m2!1sen!2sus" height="450" width="600" style="border:0" allowfullscreen=""></iframe>
    </div-->
    <div class="container">
        <div class="content-contact-us">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline">
                                <li><p>Lagos</p></li>
                                <li>Suite E159-161, Road 2, Ikota Shoping Complex, Lekki 
                                    Lagos, Nigeria
                                </li>
                                <li>Call NOW <br> <!--a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3952584d514b405714000b795c41585449555c175a5654">[email&#160;protected]</a-->
                                    Phone: (849) 490 4283
                                </li>
                            </ul>
                        </div>
                        <!--div class="col-md-6">
                            <ul class="list-inline">
                                <li><p>Barcelona</p></li>
                                <li>184 Main Collins Street West 8007
                                    Barselona 23765
                                </li>
                                <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e7949382918289dfd5a7829f868a978b82c984888a">[email&#160;protected]</a>
                                    Phone: (527) 376 6381
                                </li>
                            </ul>
                        </div-->
                    </div>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post">
                        <textarea placeholder="Message"></textarea>
                        <div class="row">
                            <div class="col-md-6"><input type="text" placeholder="Your Name"></div>
                            <div class="col-md-6"><input type="text" placeholder="Your Mail"></div>
                        </div>
                        <button type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection