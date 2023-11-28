@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')
    <div class="container">

        <h1>Продукт</h1>
        <x-admin.action-icons resource="products" id=""></x-admin.action-icons>
        <hr>

        <h2>Всі продукти</h2>
        <table class="table">
            <tr>
                <th>Назва</th>
                <th>Категорія</th>
                <th>Видимість</th>
                <th>Ціна</th>
                <th>Фото</th>
                <th>Опис</th>
                <th>Банер категорії</th>
                <th>Банер верх</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->title }}</td>
                    <td>{{ $product->visibility }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @foreach($product->images as $image)
                            <img src="{{ asset($image->image_path) }}" alt="{{ $product->name }}" height="75">
                        @endforeach
                    </td>
{{--                    <td>{{ $product->images }}</td>--}}
{{--                    <td>{{ $category->visibility }}</td>--}}
{{--                    <td><img src="{{ asset('images/categories/'.$category->banner_shop) }}" alt="" height="100"></td>--}}
{{--                    <td><img src="{{ asset('images/categories/'.$category->banner_heading) }}" alt="" height="100"></td>--}}
                    <td class="text-center"><x-admin.action-icons resource="products" id="{{$product->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
