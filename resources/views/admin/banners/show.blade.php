@extends('admin.layout')

@php($title = 'Банер')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="banners" id="{{$banner->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <div class="text-center">
            <p>Заголовок - <b>{{$banner->title}}</b></p>
            <img src="{{asset($banner->image)}}" alt="">
        </div>


    </div>
@endsection

