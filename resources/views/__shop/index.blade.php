@extends('__shop.layout')

@section('title', 'Головна сторінка')


@section('content')
    @php($direct=['', 't-lfl', 't-cn', 't-lfr'])

{{--    {{ dd( $products[1]->images[1]->image_path) }}--}}

<!-- SLIDER AREA START -->
<section class="slider-area-main">
    <!-- slider -->
    <div class="slider-area">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                @foreach($mainBanners as $mainBanner)
                    <img src="{{asset($mainBanner->image)}}" alt="" title="#slider-direction-{{$loop->iteration}}"  height="700"/>
                @endforeach
            </div>
            @foreach($mainBanners as $mainBanner)
                <div id="slider-direction-{{$loop->iteration}}" class="t-cn slider-direction">
                    <div class="slider-content {{$direct[$loop->iteration]}} s-tb slider-{{$loop->iteration}}">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">{{$mainBanner->title}}</h1>
                            <h3 class="title3">{{$mainBanner->text}}</h3>
{{--                            <h3 class="title3"><a href="#">SHOP NOW</a></h3>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- slider end-->
</section>
<!-- SLIDER AREA END -->


    <!-- BANNER AREA START -->
    <section class="banner-area">
        <div class="container">
            <div class="row">

                            <div class="col-md-3 col-sm-3 xs-res-mrbtm">
                                <div class="banner-left">
                                    <a class="promo-link" href="{{route('category', $categories[0])}}">
                                        <img src="{{ asset($categories[0]->image_v) }}" alt="" />
                                        <h1>{{ $categories[0]->title }}</h1>
                                        <span class="promo-hover"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="banner-left-side">
                                    <a class="mr-btm promo-link" href="{{route('product', $products[0])}}">
                                        <img src="{{ asset($products[0]->image) }}" alt="" />
                                        <h1>{{$products[0]->title}}</h1>
{{--                                        <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                    <a class="promo-link xs-res-mrbtm" href="{{route('product', $products[1])}}">
                                        <img src="{{ asset($products[1]->image) }}" alt="" />
                                        <h1>{{$products[1]->title}}</h1>
{{--                                        <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 xs-res-mrbtm">
                                <div class="banner-right">
                                    <a class="promo-link" href="{{route('category', $categories[1])}}">
                                        <img src="{{ asset($categories[1]->image_v) }}" alt="" />
                                        <h1>{{ $categories[1]->title }}</h1>
                                        <span class="promo-hover"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="banner-right-side">
                                    <a class="mr-btm promo-link" href="{{route('product', $products[2])}}">
                                        <img src="{{ asset($products[2]->image) }}" alt="" />
                                        <h1>{{$products[2]->title}}</h1>
            {{--                            <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                    <a class="promo-link" href="{{route('product', $products[3])}}">
                                        <img src="{{ asset($products[3]->image) }}" alt="" />
                                        <h1>{{$products[3]->title}}</h1>
            {{--                            <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                </div>
                            </div>

            </div>
        </div>
    </section>


    <!-- NEW ARRIVALS START -->
    <section class="featured-area new-arrival">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="section-titel">
                        <h3>НАША КОЛЛЕКЦІЯ</h3>
                    </div>
                </div>
                <div class="newarrival-area">
                    <div id="newarrival-curosel" class="indicator-style">

                        @foreach($productsAll as $product)
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="{{route('product', $product)}}">
                                        <img class="primary-img" src="{{asset($product->image)}}" alt="" />
                                        <img class="secondary-img" src="{{asset($product->image_2)}}" alt="" />
{{--                                        <img class="secondary-img" src="{{asset($product->images[0]->image_path)}}" alt="" style="max-height: 300px; width: 270px">--}}
                                    </a>
                                </div>
{{--                                <span class="onsale"><span class="sale-text">Sale</span></span>--}}
                                <div class="product-action">
                                    <h4><a href="{{route('product', $product)}}">{{$product->title}}</a></h4>
{{--                                    <ul class="pro-rating">--}}
{{--                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>--}}
{{--                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>--}}
{{--                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                    </ul>--}}
                                    <span class="price">{{$product->price}}</span>
                                </div>
{{--                                <div class="pro-action">--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">--}}
{{--                                                <i class="fa fa-retweet" aria-hidden="true"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">--}}
{{--                                                <i class="fa fa-heart" aria-hidden="true"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">--}}
{{--                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEW ARRIVALS END -->
    <div class="mt-50">
        .
    </div>

@endsection
