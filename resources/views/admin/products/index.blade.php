@extends('admin.layout')

@php($title = 'Товари')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{ $title }}</h1>
        <x-admin.action-icons resource="products" id=""></x-admin.action-icons>
        <hr>

        <h2>Всі товари</h2>
        <table class="table">
            <tr>
                <th>Назва</th>
                <th>Категорія</th>
                <th>Видимість</th>
                <th>Ціна</th>
                <th>Рейтинг</th>
                <th>Фото 270x300</th>
                <th>Опис</th>
                <th>Actions</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>
                        <a href="{{route('product', $product)}}">{{$product->title}}</a>
                    </td>
                    <td>
                        @isset($product->category->title)
                            <a href="{{route('category', $product->category->id)}}">{{$product->category->title}}</a>
                        @endisset
                    </td>
                    <td>{{ $product->visibility }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->rating }}</td>

                    <td>
                        <img src="{{ asset($product->image ?? 'uploads/products/270x300.jpg') }}" alt="" height="75">
                        <img src="{{ asset($product->image_2 ?? 'uploads/products/270x300.jpg') }}" alt="" height="75">
{{--                        @foreach($product->images as $image)--}}
{{--                            <img src="{{ asset($image->image_path) }}" alt="{{ $product->name }}" height="75">--}}
{{--                        @endforeach--}}
                    </td>
                    <td>{{ $product->description }}</td>
                    <td class="text-center"><x-admin.action-icons resource="products" id="{{$product->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
