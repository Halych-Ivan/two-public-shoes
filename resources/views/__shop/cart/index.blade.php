@extends('__shop.layout')

@section('title', '')


@section('content')

    <!-- SHOPING CART AREA START -->
    <section class="shoping-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wishlist-table-area table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-remove">Remove</th>
                                <th class="product-image">Image</th>
                                <th class="product-name">Product Name</th>
                                <th class="product-edit">Edit</th>
                                <th class="product-unit-price">Unit Price</th>
                                <th class="product-quantity">Розмір</th>
                                <th class="product-subtotal">Ціна</th>
                            </tr>
                            </thead>
                            <tbody>
                            @isset($cart)
                            @foreach($cart as $item)
                                <tr>
                                <td class="product-remove">
                                    <a href="{{ route('cart.remove', $item['id'] ?? '') }}"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td class="product-image">
                                    <a href="#"><img alt="#" src="{{ asset($item['image']) }}"></a>
                                </td>
                                <td class="product-name">
                                    <h3><a href="#">{{ $item['title'] ?? '' }}</a></h3>
                                </td>
                                <td class="product-edit">
                                    <p><a href="#">Edit</a></p>
                                </td>
                                <td class="product-unit-price">
                                    <p>{{ $item['price'] ?? '' }}</p>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <input type="number" value="{{ $item['size'] ?? '' }}">
                                </td>
                                <td class="product-quantity">
                                    <p>{{ $item['price'] ?? '' }}</p>
                                </td>
                            </tr>
                            @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>
                    <div class="shopingcart-bottom-area">
                        <a href="{{ url()->previous() }}" class="bottoma">Продовжити покупки</a>
                        <div class="bottom-button">
{{--                            <a href="#" class="bottomb">CLEAR SHOPPING CART</a>--}}
                            <a href="{{ route('cart.update') }}" class="bottomb">Зробити замовлення</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SHOPING CART AREA END -->

@endsection
