@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')

    <div class="container">

        <h1>{{$category->exists ? 'Редагування категорії' : 'Нова категорія'}}</h1>
        <x-admin.action-icons resource="categories" id="{{$category->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <form class="m-15"
              action="{{$category->exists ? route('admin.categories.update', $category->id) : route('admin.categories.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if($category->exists) @method('PATCH') @endif

            <div class="mb-3">
                <label for="title" class="form-label">Назва категорії</label>
                <input type="text"
                       class="form-control"
                       id="title"
                       name="title"
                       value="{{ old('title', $category->title) }}"
                       placeholder="Назва категорії" required>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Секція категорії</label>
                <select class="form-select" aria-label="section" name="section" id="section">
                    @php($section = old('section') ?? $category->section ?? '')
                    <option value="0" {{ $section == '' ? 'selected' : '' }}>не обрано</option>
                    <option value="m" {{ $section == 'm' ? 'selected' : '' }}>Чоловік</option>
                    <option value="w" {{ $section == 'w' ? 'selected' : '' }}>Жінка</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="banner" class="form-label">Банер </label>
                <select class="form-select" aria-label="banner" name="banner_id" id="banner">
                    @php($ban = old('banner') ?? $category->banner ?? '')
                    @foreach($banners as $banner)
                        <option value="{{$banner->id}}" {{ $ban == '' ? 'selected' : '' }}>{{$banner->title}}</option>
                    @endforeach
                    <option value="NOT" {{ $ban == '' ? 'selected' : '' }}>Відсутній</option>
                </select>
                @if($category->banner)
                    Банер - <span>{{$category->banner->title}}</span>
                    <img src="{{asset($category->banner->image)}}" height="50">
                @endif
            </div>


            <div class="mb-3">
                <label for="image" class="form-label">Оберіть файл банеру (870x247)</label>
                <input class="form-control" type="file" id="image" name="image">
                @if($category->image)
                    <img src="{{ asset($category->image) }}" height="100" alt="">
                @endif
            </div>

            <div class="mb-3">
                <label for="image_v" class="form-label">Оберіть файл банеру (270x630)</label>
                <input class="form-control" type="file" id="image_v" name="image_v">
                @if($category->image_v)
                    <img src="{{ asset($category->image_v) }}" height="150" alt="">
                @endif
            </div>


            <div class="mb-3">
                <label for="visibility" class="form-label">Видимість (чим більше значення - тим вище категорія)</label>
                <input type="text"
                       class="form-control"
                       id="visibility"
                       name="visibility"
                       placeholder="{{ old('visibility', $category->visibility??'') }}">

            </div>

            <button type="submit" class="btn btn-primary mt-3">Зберегти</button>
        </form>

    </div>
@endsection
