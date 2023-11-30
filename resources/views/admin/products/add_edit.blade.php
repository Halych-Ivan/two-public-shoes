@extends('admin.layout')

@php($title = $product->exists ? 'Редагування товару' : 'Новий товар')

@section('title', $title)

@section('content')

    <div class="container">
        <h1>{{$title}}</h1>
        <x-admin.action-icons resource="products" id="{{$product->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <form class="m-15"
              action="{{$product->exists ? route('admin.products.update', $product->id) : route('admin.products.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if($product->exists) @method('PATCH') @endif

            <x-admin.input-text name="title" value="{{ old('title', $product->title) }}" placeholder="Назва товару"></x-admin.input-text>
            <x-admin.input-text name="price" value="{{ old('price', $product->price) }}" placeholder="Ціна товару"></x-admin.input-text>
            <x-admin.input-text name="description" value="{{ old('description', $product->description) }}" placeholder="Опис товару"></x-admin.input-text>
            <x-admin.input-text name="visibility" value="{{ old('visibility', $product->visibility) }}" placeholder="Видимість товару"></x-admin.input-text>


            <div class="mb-3">
                <label for="category" class="form-label">Категорія</label>
                <select class="form-select" aria-label="category" name="category" id="category">
                    @php($cat = old('category') ?? $category->title ?? '')
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $cat == '' ? 'selected' : '' }}>{{$category->title}}</option>
                    @endforeach
                    <option value="NOT" {{ $cat == '' ? 'selected' : '' }}>Відсутній</option>
                </select>
            </div>






            <div class="mb-3">
                <label for="image" class="form-label">Фото</label>
                <input type="file"
                       class="form-control"
                       id="image"
                       name="image"
{{--                       value="{{ old('image', $product->image) }}"--}}
                       placeholder="Фото продукту">
            </div>



            <button type="submit" class="btn btn-primary mt-3">Зберегти</button>
        </form>


        <div class="m-3">
            @foreach($product->images as $image)
                <x-admin.products-image-destroy class="flex-1" img="{{ asset($image->image_path) }}" resource="products" x="{{$product->id}}" y="{{$image->id}}"></x-admin.products-image-destroy>
            @endforeach
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Обробник події введення даних у поле з id="price"
            $('#price').on('input', function() {
                let value = $(this).val();
                value = value.replace(/,/g, '.');
                $(this).val(value);
            });
        });
    </script>
@endsection

