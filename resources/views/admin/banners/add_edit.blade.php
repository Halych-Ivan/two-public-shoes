@extends('admin.layout')

@php($title = 'Банери - редагування')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="banners" id="{{$banner->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <form action="{{$banner->exists ? route('admin.banners.update', $banner->id) : route('admin.banners.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if($banner->exists) @method('PATCH') @endif

            <x-admin.input-text name="title" value="{{ old('title', $banner->title) }}" placeholder="Заголовок"></x-admin.input-text>
            <x-admin.input-file src="{{ old('image') }}" name="image" title="Виберіть картинку розміром  1920х400"></x-admin.input-file>

            <x-admin.botton></x-admin.botton>
        </form>

    </div>
@endsection


