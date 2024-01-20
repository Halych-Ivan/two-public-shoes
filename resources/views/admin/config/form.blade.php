@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')

    <div class="container">

        <h1>Зміна конфігурації</h1>

        <form class="m-15"
              action="{{$config->exists ? route('admin.config.update', $config->id) : route('admin.config.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if($config->exists) @method('PATCH') @endif

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Телефон" aria-label="Телефон" value="{{ $config->phone ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="phone_1" class="form-control" placeholder="Телефон 2" aria-label="Телефон" value="{{ $config->phone_1 ?? ''}}">
                </div>
                <div class="col">
                    <input type="text" name="phone_2" class="form-control" placeholder="Телефон 3" aria-label="Телефон" value="{{ $config->phone_2 ?? '' }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ $config->email ?? "" }}">
                </div>
                <div class="col">
                    <input type="text" name="email_1" class="form-control" placeholder="Email 2" aria-label="Email" value="{{ $config->email_1 ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="email_2" class="form-control" placeholder="Email 3" aria-label="Email" value="{{ $config->email_2 ?? ''}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="address" class="form-label">Адреса</label>
                    <input id = "address" type="text" name="address" class="form-control" placeholder="Адреса" aria-label="Адреса" value="{{ $config->address ?? '' }}">
                </div>
            </div>

            <div class="col mb-3">
                <input type="text" name="title" class="form-control" placeholder="title" aria-label="title" value="{{ $config->title ?? "" }}">
            </div>
            <div class="col mb-3">
                <input type="text" name="title_1" class="form-control" placeholder="title_1" aria-label="title_1" value="{{ $config->title_1 ?? "" }}">
            </div>
            <div class="col mb-3">
                <input type="text" name="text" class="form-control" placeholder="text" aria-label="text" value="{{ $config->text ?? "" }}">
            </div>




            <div class="col mb-3">
                <input type="text" name="title_2" class="form-control" placeholder="title_2" aria-label="title_2" value="{{ $config->title_2 ?? "" }}">
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="tit_1" class="form-control" placeholder="Назва 1" aria-label="" value="{{ $config->tit_1 ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="txt_1" class="form-control" placeholder="Текст 1" aria-label="" value="{{ $config->txt_1 ?? ''}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="tit_2" class="form-control" placeholder="Назва 2" aria-label="" value="{{ $config->tit_2 ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="txt_2" class="form-control" placeholder="Текст 2" aria-label="" value="{{ $config->txt_2 ?? ''}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="tit_3" class="form-control" placeholder="Назва 3" aria-label="" value="{{ $config->tit_3 ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="txt_3" class="form-control" placeholder="Текст 3" aria-label="" value="{{ $config->txt_3 ?? ''}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="tit_4" class="form-control" placeholder="Назва 4" aria-label="" value="{{ $config->tit_4 ?? '' }}">
                </div>
                <div class="col">
                    <input type="text" name="txt_4" class="form-control" placeholder="Текст 4" aria-label="" value="{{ $config->txt_4 ?? ''}}">
                </div>
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

