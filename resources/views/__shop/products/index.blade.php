@extends('__shop.layout')

@section('title', '')


@section('content')





    <!-- PRODUCT SINGLE AREA START -->
    <div class="product-simple-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-product-image">
                        <div class="single-product-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($product->images as $key => $image)
                                    <li role="presentation" {{ $key === 0 ? 'class="active"' : '' }}>
                                        <a href="#{{$image->id}}" aria-controls="{{$image->id}}" role="tab" data-toggle="tab">
                                            <img alt="" src="{{asset($image->image_path)}}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($product->images as $key => $image)
                                    <div role="tabpanel" class="tab-pane {{ $key === 0 ? 'active' : '' }}" id="{{$image->id}}"><img alt="" src="{{asset($image->image_path)}}"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-product-info">
                        <div class="product-nav">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <h1 class="product_title">{{$product->title}}</h1>
                        <div class="price-box">
                            <span class="new-price">{{$product->price}}</span>
{{--                            <span class="old-price">£190.00</span>--}}
                        </div>
                        <div class="pro-rating">
                            @for($i = 0; $i < $product->rating; $i++)
                                <a href="#"><i class="fa fa-star"></i></a>
                            @endfor
                        </div>
                        <div class="short-description">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="stock-status">
                            <label>Категорія</label>: <strong> <a href="{{route('category', $product->category->id)}}">{{$product->category->title}}</a></strong>
                        </div>

                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <div class="quantity">
                                <label for="product-quantity-{{ $product->id }}">Розмір: </label>
                                <input type="number" id="product-quantity-{{ $product->id }}" name="size" value="41" min="36" max="45"/>
                                <!-- Використання title для кнопки -->
                                <button type="submit" title="Натисніть, щоб додати товар у корзину">Додати в корзину</button>
                            </div>
                        </form>
{{--                        <div class="add-to-wishlist">--}}
{{--                            <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i></a>--}}
{{--                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="share_buttons">--}}
{{--                            <a href="#"><img src="img/share-img.png" alt="" /></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT SINGLE AREA END -->

@endsection

