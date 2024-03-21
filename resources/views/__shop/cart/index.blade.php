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

                        <form class="m-15" action="{{ route('cart.order') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Прізвище Ім'я та По батькові</label>
                                <input type="text"
                                       class="form-control"
                                       id="title"
                                       name="title"
                                       value="{{ old('title') }}"
                                       placeholder="ПІБ" required>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Номер телефону</label>
                                <input type="text"
                                       class="form-control"
                                       id="telephone"
                                       name="telephone"
                                       value="{{ old('telephone') }}"
                                       placeholder="телефон" required>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Вкажіть дані для відправки замовлення (міто, відділення нової пошти або укрпошти)</label>
                                <input type="text"
                                       class="form-control"
                                       id="address"
                                       name="address"
                                       value="{{ old('address') }}"
                                       placeholder="адреса" required>
                            </div>

                            <button type="submit" class="">Зробити замовлення</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- SHOPING CART AREA END -->

@endsection
