@extends('admin.layout')

@php($title = 'Банери')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="banners" id="{{$banner->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <h2>Всі банери</h2>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Images</th>
                <th>Actions</th>
            </tr>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->title }}</td>
                    <td><img src="{{ asset($banner->image) }}" alt="" height="100"></td>
                    <td class="text-center"><x-admin.action-icons resource="banners" id="{{$banner->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

