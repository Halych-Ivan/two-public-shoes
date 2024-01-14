@extends('admin.layout')

@php($title = 'Голові Банери')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="main_banners" id="{{$main_banner->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <h2>Всі банери</h2>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Text</th>
                <th>Images</th>
                <th>Показ</th>
                <th>Actions</th>
            </tr>
            @foreach($mainBanners as $main_banner)
                <tr>
                    <td>{{ $main_banner->title }}</td>
                    <td>{{ $main_banner->text }}</td>
                    <td><img src="{{ asset($main_banner->image ?? 'uploads/banners/1920x700.jpg') }}" alt="" height="100"></td>
                    <td>{{ $main_banner->active ? 'так' : 'ні' }}</td>
                    <td class="text-center"><x-admin.action-icons resource="main_banners" id="{{$main_banner->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

