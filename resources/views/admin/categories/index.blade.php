@extends('admin.layout')

@php($title = 'Категорії')

@section('title', $title)


@section('content')
    <div class="container">

        <h1>{{ $title }}</h1>
        <x-admin.action-icons resource="categories" id="{{$category->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <h2>Всі категорії</h2>
        <table class="table">
            <tr>
                <th>Назва</th>
                <th>Розділ</th>
                <th>Видимість</th>
                <th>Банер 1920х400</th>
                <th>Банер 870х247</th>
                <th>Банер 270х630</th>
                <th>Actions</th>
            </tr>
        @foreach($categories as $category)
{{--            {{dd($category->banner->image)}}--}}
            <tr>
                <td><a href="{{route('category', $category->id)}}" target="_blank">{{ $category->title }}</a></td>
                <td>{{ $category->section }}</td>
                <td>{{ $category->visibility }}</td>
                <td>
                    {{$category->banner->title ?? ''}}
                    <img src="{{ asset($category->banner->image ?? '') }}" alt="" height="50"></td>
                <td><img src="{{ asset($category->image) ?? '' }}" alt="" height="100"></td>
                <td><img src="{{ asset($category->image_v) ?? '' }}" alt="" height="150"></td>
                <td class="text-center"><x-admin.action-icons resource="categories" id="{{$category->id}}"></x-admin.action-icons></td>
            </tr>
        @endforeach

        </table>
    </div>
@endsection
