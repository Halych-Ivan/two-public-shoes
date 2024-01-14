@extends('admin.layout')

@php($title = 'Головний банер - редагування')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="main_banners" id="{{$mainBanner->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <form action="{{$mainBanner->exists ? route('admin.main_banners.update', $mainBanner->id) : route('admin.main_banners.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if($mainBanner->exists) @method('PATCH') @endif


            <x-admin.input-text name="title" value="{{ old('title', $mainBanner->title) }}" placeholder="Заголовок"></x-admin.input-text>
            <x-admin.input-text name="text" value="{{ old('text', $mainBanner->text) }}" placeholder="Підзаголовок"></x-admin.input-text>
            <x-admin.input-file src="{{ old('image') }}" name="image" title="Виберіть картинку розміром  1920х700"></x-admin.input-file>

            <x-admin.checkbox data="{{ old('active', $mainBanner->active) }}"></x-admin.checkbox>

            <x-admin.botton></x-admin.botton>
        </form>

    </div>
@endsection


