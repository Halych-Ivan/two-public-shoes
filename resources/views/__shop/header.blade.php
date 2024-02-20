{{--<section class="header-top-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="left-msg pull-left">--}}
{{--                    <h6>FREE SHIPPING ON OVER $100</h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="right-login pull-right">--}}
{{--                    <div class="currencies-block-top curency pull-left">--}}
{{--                        <div class="current">--}}
{{--                            <span>USD</span>--}}
{{--                            <i class="fa fa-angle-down"></i>--}}
{{--                        </div>--}}
{{--                        <ul class="first-currencies toggle-content">--}}
{{--                            <li><a href="#">Dollar (USD)</a></li>--}}
{{--                            <li><a href="#">Pound (GBP)</a></li>--}}
{{--                            <li><a href="#">Pound (GBP)</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="languages-block-top curency pull-left">--}}
{{--                        <div class="current">--}}
{{--                            <span>LANGUAGE</span>--}}
{{--                            <i class="fa fa-angle-down"></i>--}}
{{--                        </div>--}}
{{--                        <ul class="first-languages toggle-content">--}}
{{--                            <li><a href="#">ENGLISH</a></li>--}}
{{--                            <li><a href="#">BANGLA</a></li>--}}
{{--                            <li><a href="#">ARABIC</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="curency pull-left">--}}
{{--                        <div class="current">--}}
{{--                            <span><a href="login.html">LOG IN</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--{{ dd($data) }}--}}

<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="logo-area">
                    <a href="{{ route('home') }}"><img src="{{ asset($data['config']->logo ?? '') }}" alt="" height="40"></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="main-menu">
                    <ul class="list-inline">
                        <li><a href="{{ route('home') }}">ГОЛОВНА</a></li>
{{--                        <li class="expand active"><a href="index.html">HOME</a>--}}
{{--                            <ul class="single sub-menu">--}}
{{--                                <li class="sub-menu-title"><a href="index.html">Home Pages</a></li>--}}
{{--                                <li><a href="index.html">Home Version One</a></li>--}}
{{--                                <li><a href="index-2.html">Home Version Two</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">WOMEN</a>--}}
{{--                            <!-- Mega Menu Four Column -->--}}
{{--                            <div class="mega-menu two-column">--}}
{{--									<span>--}}
{{--										<a href="#" class="mega-title">Categories 01</a>--}}
{{--										<a href="shop.html">Washing machine 1</a>--}}
{{--										<a href="shop.html">Washing machine 2</a>--}}
{{--										<a href="shop.html">Washing machine 3</a>--}}
{{--										<a href="shop.html">Washing machine 4</a>--}}
{{--									</span>--}}
{{--                                <span>--}}
{{--										<a href="#" class="mega-title">Categories 02</a>--}}
{{--										<a href="shop.html">Washing machine 1</a>--}}
{{--										<a href="shop.html">Washing machine 2</a>--}}
{{--										<a href="shop.html">Washing machine 3</a>--}}
{{--										<a href="shop.html">Washing machine 4</a>--}}
{{--									</span>--}}
{{--                                <span>--}}
{{--										<a href="#" class="mega-title">Categories 03</a>--}}
{{--										<a href="shop.html">Washing machine 1</a>--}}
{{--										<a href="shop.html">Washing machine 2</a>--}}
{{--										<a href="shop.html">Washing machine 3</a>--}}
{{--										<a href="shop.html">Washing machine 4</a>--}}
{{--									</span>--}}
{{--                                <span class="mega-menu-img">--}}
{{--										<a href="#"><img alt="" src="img/other-pg/img_menu.jpg"></a>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </li>--}}

                        <li class="expand"><a href="#">КАТЕГОРІЇ</a>
                            <ul class="single sub-menu">
                                @if(isset($data['categories']))
                                    @foreach($data['categories'] as $category)
{{--                                        {{ dd($category) }}--}}
                                <li><a href="{{ route('category', $category->id) }}">{{ $category->title }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>

                        <li><a href="{{route('about')}}">ПРО НАС</a></li>
                        <li><a href="{{route('contact')}}">КОНТАКТИ</a></li>
                    </ul>
                </div>
            </div>

            <!-- MOBILE-MENU-AREA START -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-area">
                                <div class="mobile-menu">
                                    <nav id="mobile-nav">
                                        <ul>
                                            <li><a href="{{ route('home') }}">ГОЛОВНА</a></li>
                                            <li class="expand"><a href="#">КАТЕГОРІЇ</a>
                                                <ul>
                                                    @if(isset($data['categories']))
                                                        @foreach($data['categories'] as $category)
                                                            <li><a href="{{ route('category', $category->id) }}">{{ $category->title }}</a></li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                            <li><a href="{{route('about')}}">ПРО НАС</a></li>
                                            <li><a href="{{route('contact')}}">КОНТАКТИ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MOBILE-MENU-AREA END  -->
            <div class="col-md-2 col-sm-2">
                <div class="menu-right-area">
                    <ul>
                        <li>
                            <a href="#" class="cart-toggler search-icon">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="header-bottom-search">
                                <form method="POST" action="#" class="search-box">
                                    <div>
                                        <input type="text" autocomplete="off" placeholder="Search" value="">
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="cart-toggler mini-cart-icon">
                                <i class="fa fa-shopping-cart"></i>
                                @if(session()->has('cart') && count(session('cart')) > 0)
                                    <span>{{ count(session('cart')) }}</span>
                                @endif
                            </a>

                            @if(session()->has('cart') && count(session('cart')) > 0)
                                <div class="top-cart-content">

                                    @foreach(session('cart') as $cart)

                                        <div class="media header-middle-checkout">
                                            <div class="media-left check-img">
                                                <a href="{{ route('product', $cart['id']) }}">
                                                    <img alt="" src="{{ asset($cart['image']) }}" height="100">
                                                </a>
                                            </div>
                                            <div class="media-body checkout-content">
                                                <h4 class="media-heading">
                                                    <a href="{{ route('product', $cart['id']) }}">{{ $cart['title'] }}</a>
                                                    <a href="{{ route('cart.remove', $cart['id']) }}"><span title="Remove This Item" class="btn-remove checkout-remove">
                                                        <i class="fa fa-trash"></i></a>
                                                    </span>
                                                </h4>
                                                <p>{{ $cart['price'] }}</p>
                                            </div>
                                        </div>

                                    @endforeach

                                    <div class="actions">
                                        <a href="{{ route('cart.index') }}">
                                            <button type="button" title="Checkout-botton" class="Checkout-botton">
                                                <span>Checkout</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
