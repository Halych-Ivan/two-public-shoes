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
                <label for="banner_heading" class="form-label">Оберіть файл банеру (1920x400)</label>
                <input class="form-control" type="file" id="banner_heading" name="banner_heading">
                @if($category->banner_heading)
                    <img src="{{ asset('images/categories/'.$category->banner_heading) }}" height="100" alt="">
                @endif
            </div>

            <div class="mb-3">
                <label for="banner_shop" class="form-label">Оберіть файл банеру (870x247)</label>
                <input class="form-control" type="file" id="banner_shop" name="banner_shop">
                @if($category->banner_shop)
                    <img src="{{ asset('images/categories/'.$category->banner_shop) }}" height="100" alt="">
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
