<!--header-->
<!--header desktop-->
<div class="header">
    <div class="container-fluid search-header">
        <form>
            <input type="text" placeholder="Search">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid">
        <div class="header-desktop ">
            <div class=" header-menu-desktop d-flex justify-content-between">
                <div>
                    <div class="logo">
                        <a href="index.html"><img src="imager/home/Logo.png" alt=""></a>
                    </div>
                </div>
                <div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="/" >home</a>
                            </li>
                            <li><a href="/about" >about</a>
                            </li>
                            <li><a href="prooduct-page">Product List</a>
                               
                            </li>
                            <!-- <li><a href="blog">blog</a>
                               
                            </li> -->
                            <li><a href="/contact">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="header-right">
                        <ul class="list-inline">
                            <li><a href="/cart" class="cart-index">
                                <img src="imager/home/bag-2.png" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                {{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()}}
                                </div>
                            </a>
                                <!-- <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="#">
                                                    <img src="imager/home/cart-home1.jpg" alt="cart-1">
                                                </a>
                                                <a class="product-title" href="#">Skin recreation</a>

                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														56
                                                </span>
                                                <span class="quantity">
													Qty: 1
												</span>
                                                <a href="#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="#">
                                                    <img src="imager/home/cart-home2.jpg" alt="cart-2">
                                                </a>
                                                <a class="product-title" href="#">Face cream</a>

                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														48
													</span>
                                                <span class="quantity">
													Qty: 2
												</span>
                                                <a href="#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <span>Order Total:</span>
                                            <span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>
												200
											</span>
                                        </p>
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="#" class="button wc-forward au-btn btn-small">VIEW CART &
                                                CHECKOUT</a>
                                        </p>
                                    </div>
                                </div> -->
                            </li>
                            <li><a href="javascript:void(0)" class="search-header1"><img src="imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                            </li>
                            <li><a href="javascript:void(0)" class="introduce1"><img src="imager/home/control-introduce.png" alt="" style="width: 16px;height: 16px;margin-top: -10px;"></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="introduce">
                    <div class="content-introduce">
                        <h3>follow instagram</h3>
                        <p>@Ura.cosmetic_beauty</p>
                        <div class="img-controduce">
                            <img src="imager/home/introduce.jpg" alt="">
                            <img src="imager/home/introduce1.jpg" alt="">
                            <img src="imager/home/introduce2.jpg" alt="">
                            <img src="imager/home/introduce3.jpg" alt="">
                            <img src="imager/home/introduce4.jpg" alt="">
                            <img src="imager/home/introduce5.jpg" alt="">
                        </div>
                        <h4>newsletter</h4>
                        <p>Subcribe to our newsletter</p>
                        <input type="text" placeholder="Email">
                        <button class="bt"><i class="fas fa-angle-right"></i></button>
                        <div class="icon-introduce">
                            <a href="" style="margin-left: 95px;"><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <span class="lnr lnr-cross close-introduce"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end header desktop-->
<!--header mobile-->
<div class="header">
    <div class="container-fluid search-header">
        <form>
            <input type="text" placeholder="Search">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid">
        <div class="header-mobile">
            <div class="header-menu-mobile d-flex justify-content-between">
                <div>
                    <button><span class="lnr lnr-menu click-mobile"></span></button>
                </div>
                <div class="logo">
                    <img src="imager/home/Logo.png" alt="">
                </div>
                <div>
                    <div class="row header-right">
                        <ul class="list-inline">
                            <li><a href="/cart" class="cart-index">
                                <img src="imager/home/bag-2.png" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                    {{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()}}
                                </div>
                            </a>
                                <!-- <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="#">
                                                    <img src="imager/home/cart-home1.jpg" alt="cart-1">
                                                </a>
                                                <a class="product-title" href="#">Skin recreation</a>

                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														56
                                                </span>
                                                <span class="quantity">
													Qty: 1
												</span>
                                                <a href="#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="#">
                                                    <img src="imager/home/cart-home2.jpg" alt="cart-2">
                                                </a>
                                                <a class="product-title" href="#">Face cream</a>

                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														48
													</span>
                                                <span class="quantity">
													Qty: 2
												</span>
                                                <a href="#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <span>Order Total:</span>
                                            <span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>
												200
											</span>
                                        </p>
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="#" class="button wc-forward au-btn btn-small">VIEW CART &
                                                CHECKOUT</a>
                                        </p>
                                    </div>
                                </div> -->
                            </li>
                            <li><a href="javascript:void(0)" class="search-header1"><img src="imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                            </li>
                            <li><a href="javascript:void(0)" class="introduce1"><img src="imager/home/control-introduce.png" alt="" style="width: 16px;height: 16px;margin-top: -10px;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="introduce">
            <div class="content-introduce">
                <h3>follow instagram</h3>
                <p>@Ura.cosmetic_beauty</p>
                <div class="img-controduce">
                    <img src="imager/home/introduce.jpg" alt="">
                    <img src="imager/home/introduce1.jpg" alt="">
                    <img src="imager/home/introduce2.jpg" alt="">
                    <img src="imager/home/introduce3.jpg" alt="">
                    <img src="imager/home/introduce4.jpg" alt="">
                    <img src="imager/home/introduce5.jpg" alt="">
                </div>
                <h4>newsletter</h4>
                <p>Subcribe to our newsletter</p>
                <input type="text" placeholder="Email">
                <button class="bt"><i class="fas fa-angle-right"></i></button>
                <div class="icon-introduce">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <span class="lnr lnr-cross close-introduce"></span>
            </div>
        </div>
        <div class="menu-mobile">
            <ul>
                <li>
                    <a href="/" >home</a><span class="lnr lnr-chevron-down drop-link"></span>
                </li>
                <li>
                    <a href="/about">About</a><span class="lnr lnr-chevron-down drop-link"></span>
                </li>
                <li><a href="/prooduct-page">Product List</a><span class="lnr lnr-chevron-down drop-link"></span>
                   
                </li>
                <li><a href="/contact">contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!--end header mobile-->
<!--end header-->