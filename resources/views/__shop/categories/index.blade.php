@extends('__shop.layout')

@section('title', '')


@section('content')


    @if($category->banner)
        <x-shop.banner image="{{$category->banner->image}}">{{$category->banner->title}}</x-shop.banner>
    @endif


    <!-- SHOP AREA START -->
    <section class="wishlist-area shop-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="wishlist-left-area">

                        <div class="category">
                            <h4>Категорії</h4>
                            <div class="category-list">
                                <ul>
                                    @foreach($categories as $category_item)
                                        <li>
                                            <a href="{{route('category', $category_item)}}">
                                                <i class="fa fa-angle-double-right"></i>
                                                {{$category_item->title}}
                                                <span>({{$category_item->products->count()}})</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{--                            <div class="price-slider">--}}
                            {{--                                <h4>PRICE SLIDER</h4>--}}
                            {{--                                <aside class="widget shop-filter">--}}
                            {{--                                    <div class="info_widget">--}}
                            {{--                                        <div class="price_filter">--}}
{{--                                            <div id="slider-range"></div>--}}
{{--                                            <div class="price_slider_amount">--}}
{{--                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />--}}
{{--                                                <input type="submit"  value="Filter"/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </aside>--}}
{{--                            </div>--}}

{{--                            <div class="price-slider size-area">--}}
{{--                                <h4>SIZE</h4>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">XS</a></li>--}}
{{--                                    <li><a href="#">S</a></li>--}}
{{--                                    <li><a href="#">M</a></li>--}}
{{--                                    <li><a href="#">L</a></li>--}}
{{--                                    <li><a href="#">XL</a></li>--}}
{{--                                    <li><a href="#">XXL</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                        </div>

{{--                        <div class="popular-tag">--}}
{{--                            <h4>POPULAR TAG</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">kids</a></li>--}}
{{--                                <li><a href="#">fashion</a></li>--}}
{{--                                <li><a href="#">dresses</a></li>--}}
{{--                                <li><a href="#">shopy</a></li>--}}
{{--                                <li><a href="#">nice</a></li>--}}
{{--                                <li><a href="#">child</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="compare-products">--}}
{{--                            <h4>COMPARE PRODUCTS</h4>--}}
{{--                            <p>You have no item to compare</p>--}}
{{--                            <div class="single-product">--}}
{{--                                <a href="#"><img src="/img/other-pg/wishlist-1.jpg" alt="" />--}}
{{--                                    <span>$ 60</span>--}}
{{--                                    <p>SAVE UP TO 25% OFF</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="shop-top-seller">--}}
{{--                            <h4>TOP SELLERS</h4>--}}
{{--                            <div class="shop-single-main">--}}
{{--                                <div class="top-seller-product">--}}
{{--                                    <img alt="#" src="/img/other-pg/wishlist-2.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="top-seller-details">--}}
{{--                                    <h5><a href="#">Girl’s dress</a></h5>--}}
{{--                                    <h5>$ 50.00</h5>--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="shop-single-main">--}}
{{--                                <div class="top-seller-product">--}}
{{--                                    <img alt="#" src="/img/other-pg/wishlist-3.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="top-seller-details">--}}
{{--                                    <h5><a href="#">Boys dress</a></h5>--}}
{{--                                    <h5>$ 50.00</h5>--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                        <li><i class="fa fa-star color"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>{{--wishlist-left-area--}}
                </div>

                {{-- ПОЛЕ КОНТЕНТУ--}}
                <div class="col-md-9">
                    <div class="shop-right-area">

                        {{-- БАННЕР КАТЕГОРІЇ--}}

                        @isset($category->image)
                            <div class="shop-banner">
                                <img src="{{asset($category->image)}}" alt=""/>
                            </div>
                        @endisset

                        <div class="shop-tab-area">

                            <!--NAV PILL-->
                            <div class="shop-tab-pill">
                                <ul>
                                    <li class="active" id="p-mar">
                                        <a data-toggle="pill" href="#grid">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                            <span>Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#list">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                            <span>List</span>
                                        </a>
                                    </li>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label>Show : </label>
                                            <select>
                                                <option value="10" selected="selected">10</option>
                                                <option value="09">09</option>
                                                <option value="08">08</option>
                                                <option value="07">07</option>
                                                <option value="06">06</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sort-position">
                                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                            <select>
                                                <option value="position" selected="selected">Position</option>
                                                <option value="Name">Name</option>
                                                <option value="Price">Price</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--NAV PILL-->


                            <div class="tab-content">
                                <div class="row tab-pane active" id="grid">

                                    @foreach($category->products as $product)
                                        <div class="col-md-4 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-image">
                                                    <a class="product-img" href="{{route('product', $product)}}">
                                                        <img class="primary-img" src="{{asset($product->image)}}" alt=""/>
                                                        <img class="secondary-img" src="{{asset($product->image)}}" alt=""/>
                                                    </a>
                                                </div>
{{--                                                <span class="onsale red">--}}
{{--                                                    <span class="sale-text">Sale</span>--}}
{{--                                                </span>--}}
                                                <div class="product-action">
                                                    <h4><a href="#">{{$product->title}}</a></h4>
                                                    @isset($product->rating)
                                                    <ul class="pro-rating">
                                                        @for($i = 0; $i < $product->rating; $i++)
                                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                                        @endfor
                                                    </ul>
                                                    @endisset
                                                    <span class="price">{{$product->price}}</span>
                                                </div>
                                                <div class="pro-action">
                                                    <ul>
                                                        <li>
                                                            <a class="test all_src_icon" href="#" title=""
                                                               data-toggle="tooltip" data-placement="top"
                                                               data-original-title="Shop Cart">
                                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="test all_src_icon" href="#" title=""
                                                               data-toggle="tooltip" data-placement="top"
                                                               data-original-title="Add Wishlist">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="test all_src_icon" href="#" title=""
                                                               data-toggle="tooltip" data-placement="top"
                                                               data-original-title="Compare">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div id="list" class="tab-pane">
                                    <div class="row">

                                        @foreach($category->products as $product)
                                            <div class="col-md-12">
                                                <div class="shop-list-single shop-single-product-area">
                                                    <div class="shop-list-left">
                                                        <a href="#"><img src="{{asset($product->image)}}" alt="" height="270"></a>
                                                        <span class="shop-cart-icon">
                                                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                                            </span>
                                                    </div>
                                                    <div class="shop-list-right">
                                                        <div class="product-content">
                                                            <h2><a href="#">{{$product->title}}</a></h2>
                                                            <p><b>{{$product->price}}</b></p>
                                                            <div class="rating">
                                                                @isset($product->rating)
                                                                    @for($i = 0; $i < $product->rating; $i++)
                                                                        <i class="fa fa-star color"></i>
                                                                    @endfor
                                                                @endisset

                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <p>{{$product->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>


                            <!--NAV PILL-->
                            <div class="shop-tab-pill dwn">
                                <ul>
                                    <li class="active" id="r-mar">
                                        <a data-toggle="pill" href="#grid">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                            <span>Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#list">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                            <span>List</span>
                                        </a>
                                    </li>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label>Show : </label>
                                            <select>
                                                <option value="10" selected="selected">10</option>
                                                <option value="09">09</option>
                                                <option value="08">08</option>
                                                <option value="07">07</option>
                                                <option value="06">06</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sort-position">
                                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                            <select>
                                                <option value="position" selected="selected">Position</option>
                                                <option value="Name">Name</option>
                                                <option value="Price">Price</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--NAV PILL-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SHOP AREA END -->

@endsection
