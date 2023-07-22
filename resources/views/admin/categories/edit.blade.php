@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')
{{--    {{dd($categories)}}--}}
    <div class="container">

        <h1>Редагування категорії</h1>

        <form class="m-15" method="POST" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Назва</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="{{ $category->title ?? old('title', 'Назва категорії') }}">
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="section" name="section">
                    <option value="0" selected>не обрано</option>
                    <option value="m" @if(isset($category->section) && ($category->section == 'm')) selected @endif>Чоловік</option>
                    <option value="w" @if(isset($category->section) && ($category->section == 'w')) selected @endif>Жінка</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="banner_heading" class="form-label">Оберіть файл банеру (banner_heading)</label>
                <input class="form-control" type="file" id="banner_heading" name="banner_heading">
            </div>

            <div class="mb-3">
                <label for="banner_shop" class="form-label">Оберіть файл банеру (banner_shop)</label>
                <input class="form-control" type="file" id="banner_shop" name="banner_shop">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="visibility" name="visibility"
                       @if(isset($category->visibility) && ($category->visibility)) checked @endif
                <label class="form-check-label" for="visibility">Видимість</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

    </div>
@endsection
