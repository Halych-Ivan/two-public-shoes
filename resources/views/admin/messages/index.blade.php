@extends('admin.layout')

@php($title = 'Повідомлення')

@section('title', $title)

@section('content')
    <div class="container">

        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="messages" id="{{$message->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <h2>Всі повідомлення</h2>
        <table class="table">
            <tr>
                <th>Ім'я</th>
                <th>Телефон</th>
                <th>Тема</th>
                <th>Повідомлення</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->messages }}</td>
                    <td>{{ $message->ative }}</td>

                    <td class="text-center"><x-admin.action-icons resource="messages" id="{{$message->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

