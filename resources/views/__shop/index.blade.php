@extends('__shop.layout')

@section('title', 'Головна сторінка')


@section('content')

{{--    {{ dd( $products[1]->images[1]->image_path) }}--}}

<!-- SLIDER AREA START -->
<section class="slider-area-main">
    <!-- slider -->
    <div class="slider-area">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                <img src="img/home-1/slider-1.jpg" alt="" title="#slider-direction-1"  />
                <img src="img/home-1/slider-2.jpg" alt="" title="#slider-direction-2"  />
                <img src="img/home-1/slider-3.jpg" alt="" title="#slider-direction-3"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content t-lfl s-tb slider-1">
                    <div class="title-container s-tb-c">
                        <h1 class="title1">Best Collection</h1>
                        <p class="title1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <h3 class="title3"><a href="#">SHOP NOW</a></h3>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <h1 class="title1">Our gorgeous shop</h1>
                        <h3 class="title3">for fashion</h3>
                    </div>
                </div>
            </div>
            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction">
                <div class="slider-content t-lfr s-tb slider-3">
                    <div class="title-container s-tb-c">
                        <h1 class="title1">Little Princes Shoe</h1>
                        <h3 class="title3">Fashion Shoe</h3>
                    </div>
                </div>
            </div>
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
                                    <a class="promo-link" href="{{route('category', $products[0]->category)}}">
                                        <img src="{{ asset($products[0]->category->image_v) }}" alt="" />
                                        <h1>{{ $products[0]->category->title }}</h1>
                                        <span class="promo-hover"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="banner-left-side">
                                    <a class="mr-btm promo-link" href="{{route('product', $products[1])}}">
                                        <img src="{{ asset($products[1]->image) }}" alt="" />
                                        <h1>{{$products[1]->title}}</h1>
{{--                                        <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                    <a class="promo-link xs-res-mrbtm" href="{{route('product', $products[2])}}">
                                        <img src="{{ asset($products[2]->image) }}" alt="" />
                                        <h1>{{$products[2]->title}}</h1>
{{--                                        <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 xs-res-mrbtm">
                                <div class="banner-right">
                                    <a class="promo-link" href="{{route('category', $products[3]->category)}}">
                                        <img src="{{ asset($products[3]->category->image_v) }}" alt="" />
                                        <h1>{{ $products[3]->category->title }}</h1>
                                        <span class="promo-hover"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="banner-right-side">
                                    <a class="mr-btm promo-link" href="{{route('product', $products[4])}}">
                                        <img src="{{ asset($products[4]->image) }}" alt="" />
                                        <h1>{{$products[4]->title}}</h1>
            {{--                            <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                    <a class="promo-link" href="{{route('product', $products[5])}}">
                                        <img src="{{ asset($products[5]->image) }}" alt="" />
                                        <h1>{{$products[5]->title}}</h1>
            {{--                            <span class="sl-btn">SALE</span>--}}
                                        <div class="promo-hover"></div>
                                    </a>
                                </div>
                            </div>

            </div>
        </div>
    </section>
    <div class="mt-50">
        .
    </div>

@endsection
