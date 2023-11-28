@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')
    <div class="container">

        <h1>Категорії</h1>
        <x-admin.action-icons resource="categories" id="{{$category->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <h2>Всі категорії</h2>
        <table class="table">
            <tr>
                <th>Назва</th>
                <th>Розділ</th>
                <th>Видимість</th>
                <th>Банер категорії</th>
                <th>Банер верх</th>
            </tr>
        @foreach($categories as $category)
            <tr>
                <td><a href="{{route('category', $category->id)}}" target="_blank">{{ $category->title }}</a></td>
                <td>{{ $category->section }}</td>
                <td>{{ $category->visibility }}</td>
                <td><img src="{{ asset('images/categories/'.$category->banner_shop) }}" alt="" height="100"></td>
                <td><img src="{{ asset('images/categories/'.$category->banner_heading) }}" alt="" height="100"></td>
                <td class="text-center"><x-admin.action-icons resource="categories" id="{{$category->id}}"></x-admin.action-icons></td>
            </tr>
        @endforeach

        </table>
    </div>
@endsection
