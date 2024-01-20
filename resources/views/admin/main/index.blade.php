@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')

    <div class="container">

        <h1>Конфігурація</h1>



        <form class="m-15" method="POST" action="{{route('admin.config.form')}}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Телефон" aria-label="Телефон" value="{{ $config->phone ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="phone_2" class="form-control" placeholder="Телефон 2" aria-label="Телефон" value="{{ $config->phone_1 ?? ''}}">
                </div>
                <div class="col">
                    <input type="text" name="phone_2" class="form-control" placeholder="Телефон 3" aria-label="Телефон" value="{{ $config->phone_2 ?? '' }}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ $config->email ?? "" }}">
                </div>
                <div class="col">
                    <input type="text" name="email_2" class="form-control" placeholder="Email 2" aria-label="Email" value="{{ $config->email_1 ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="email_2" class="form-control" placeholder="Email 3" aria-label="Email" value="{{ $config->email_2 ?? ''}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" name="address" class="form-control" placeholder="Адреса" aria-label="Адреса" value="{{ $config->address  ?? '' }}">
                </div>
            </div>

{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="checkbox" value="1" id="slider" name="slider" {{ $config->slider ??  '' }}>--}}
{{--                <label class="form-check-label" for="slider">Слайдер</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured" {{ $config->featured ? 'checked' : '' }}>--}}
{{--                <label class="form-check-label" for="featured">featured</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="checkbox" value="1" id="hot_deals" name="hot_deals" {{ $config->hot_deals ? 'checked' : '' }}>--}}
{{--                <label class="form-check-label" for="hot_deals">hot_deals</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="checkbox" value="1" id="brands" name="brands" {{ $config->brands ? 'checked' : '' }}>--}}
{{--                <label class="form-check-label" for="brands">brands</label>--}}
{{--            </div>--}}









            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" class="form-control" id="phone" placeholder="+380123456789">
            </div>




            <div >
                <p>Телефон - {{ $config->phone ?? '' }}</p>
                <p>Телефон - {{ $config->phone_1 ?? '' }}</p>
                <p>Телефон - {{ $config->phone_2 ?? '' }}</p>
            </div>








        <div class="m-10 text-center" style="background: grey">
            <img src="{{asset('img/home-1/logo.png')}}" alt="">
        </div>
        <br>


            <div class="mb-3">
                <label for="formFile" class="form-label">Оберіть файл</label>
                <input class="form-control" type="file" id="formFile" name="logo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>





    </div>



@endsection
