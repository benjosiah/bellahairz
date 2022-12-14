<div>
    

<div class="title-page" style="background-image: url('imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Shop</h1>
                <p><span>Home</span> / Shop / Product List</p>
              
            </div>
        </div>
    </div>
</div>
<!--end title detail-->
<!--product list-->

<div class="container">
    <div class="prodcut-list">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="row header-show-list">
                    <div class="col-md-6 col-sm-12 col-12">
                        
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <select class="float-right">
                            <option>Default sorting</option>
                            <option>Sort by average rating</option>
                            <option>Sort by latest</option>
                            <option>Sort by price: low to high</option>
                            <option>Sort by price: high to low</option>
                        </select>
                    </div>
                </div>
                <div class="row product">
                    @foreach($products as $product)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-img-top">
                                <a href="javascript:void(0)" class="wp-post-image">
                                    <img class="image-cover" src="{{$product->image}}" alt="product" style="width: 270px; height:270px; margin: 0px 3px;">
                                </a>
                                
                                <!-- <p class="onnew">New</p> -->
                                <!-- <div class="icon-product">
                                    <button wire:click="increament({{$product}})" class="btn">
                                        <span class="lnr lnr-minus"> - </span>
                                    </button>
                                    <button type="button" class="btn" >
                                        <span class="">
                                            
                                        </span>
                                    </button>
                                    <button wire:click="increament({{$product}})" class="btn">
                                        <span class=""> + </span>
                                    </button>
                                </div> -->
                            </div>
                            <div class="card-body">
                                <div class="btn-group">
                                    <button wire:click.prevent="addTocart({{$product}})" class="btn add-to-cart">ADD TO CART <i class="fas fa-cart-plus"></i> </button>
                                </div>
                                <p class="card-title"><a href="/prooduct-page">{{$product->category->name}} </a></p>
                                <p class="woocommerce-loop-product__title"><a href="javascript:void(0)">
                                {{$product->name}}</a></p>
                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">N</span> {{$product->price}}
													</span>
												</ins>
                                    </span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    @empty($products)
                    <div class="col-md-4 col-sm-6 col-12">
                        No tem found                    
                    </div>
                    @endif

                    
                    <!-- <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#"> > </a></li>
                    </ul> -->
                </div>
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
                
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="content-blog-left">
                    <!-- <div class="search-blog">
                        <input type="text" placeholder="Search" class="float-left">
                        <button class="btn float-right"><span class="lnr lnr-chevron-right"></span></button>
                    </div> -->
                    <!-- <div class="filter-price">
                        <h2>Filter By Price</h2>

                        <p></p>
                        <span class="float-left">Price: $6 - $54</span>
                        <button class="btn float-right">FILTER</button>
                    </div> -->
                    
                    <div class="category-blog">
                        <h2>Categories</h2>
                        <a href="/prooduct-page"> All </a>
                        @foreach($categories as $category)
                        <a href="/prooduct-page?category={{$category->slug}}"> {{$category->name}} ({{$category->products->count()}})</a>
                        @endforeach
                    </div>
                    <!-- <div class="popular-item">
                        <h2>Popular Items</h2>
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                                   <a href="javascript:void(0)"><img src="imager/product-popular/popular-item1.jpg" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                                    <div class="card-body">
                                        <h5 class="card-title woocommerce-loop-product__title"><a href="javascript:void(0)">Skin reaction</a></h5>
                                        <p class="card-text price">
                                            <ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>56
													</span>
                                            </ins>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                                   <a href="javascript:void(0)"><img src="imager/product-popular/popular-item2.jpg" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                                    <div class="card-body">
                                        <h5 class="card-title woocommerce-loop-product__title"><a href="javascript:void(0)">Face cream</a> </h5>
                                        <p class="card-text price">
                                            <ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>48
													</span>
                                            </ins>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                                  <a href="javascript:void(0)"><img src="imager/product-popular/popular-item3.jpg" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                                    <div class="card-body">
                                        <h5 class="card-title woocommerce-loop-product__title"><a href="javascript:void(0)">Hydrating primer</a> </h5>
                                        <p class="card-text price">
                                            <ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>83
													</span>
                                            </ins>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="tag-blog">
                        <h2>Tag</h2>
                        <div class="link-blog">
                            <a href="#">Nature</a>
                            <a href="#">Oragnic</a>
                            <a href="#">Fresh</a>
                            <a href="#">Vegan</a>
                            <a href="#">Spa</a>
                        </div>
                    </div> -->
                    <div class="lastest-img">
                        <img src="imager/portfolio/Portfolio_Single_Images_item.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>