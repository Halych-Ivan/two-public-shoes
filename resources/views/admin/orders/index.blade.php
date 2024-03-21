@extends('admin.layout')

@php($title = 'Замовлення')

@section('title', $title)

@section('content')

    @php( $color = ['', 'lightcoral', 'lightyellow', 'lightgreen'])

    <div class="container">

        <h1>{{$title}}</h1>
{{--        <x-admin.action-icons resource="orders" id="{{$order->id ?? ''}}"></x-admin.action-icons>--}}
        <hr>

        <h2>Всі замовлення</h2>
        <table class="table">
            <tr>
{{--                <th>Ім'я</th>--}}
{{--                <th>Телефон</th>--}}
{{--                <th>Тема</th>--}}
{{--                <th>Повідомлення</th>--}}
{{--                <th></th>--}}
{{--                <th></th>--}}
            </tr>
            @foreach($orders as $order)
                <tr @if($order->active)style="background: {{ $color[$order->active] }}"@endif>
                    <td>{{ $order->title }}</td>
                    <td>{{ $order->size }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->client }}</td>
                    <td>{{ $order->telephone }}</td>
                    <td>{{ $order->address }}</td>

                    <td>
                        <a href="{{route('admin.orders.edit', [$order, 'active' => '1'])}}" class="text-danger pl-1 pr-1" title="Редагувати даний запис"><i class="fas fa-thumbs-up"></i></a>
                        |
                        <a href="{{route('admin.orders.edit', [$order, 'active' => '2'])}}" class="text-warning pl-1 pr-1" title="Редагувати даний запис"><i class="fas fa-thumbs-up"></i></a>
                        |
                        <a href="{{route('admin.orders.edit', [$order, 'active' => '3'])}}" class="text-success pl-1 pr-1" title="Редагувати даний запис"><i class="fas fa-thumbs-up"></i></a>
                        |
                        <span class="" title="Видалити даний запис"><button type="submit" form="del{{$order}}" class="text-danger border"><i class="fas fa-cut"></i></button></span>

                        <form id="del{{$order}}" method="POST" action="{{route('admin.orders.destroy', $order)}}" class="" onsubmit="return confirm('Підтверджуєте видалення об\'єкту?')">
                            @method('DELETE')
                            @csrf
                        </form>



                    </td>

{{--                    <td class="text-center"><x-admin.action-icons resource="messages" id="{{$order->id}}"></x-admin.action-icons></td>--}}
                </tr>
            @endforeach
        </table>

    </div>
@endsection

