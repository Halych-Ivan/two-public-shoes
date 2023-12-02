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

            <div>
                <label for="customRange" class="form-label">Рейтинг</label>
                <input type="range" class="form-range" min="0" max="5" step="1" name="rating" id="customRange">
            </div>


            <div class="mb-3">
                <label for="category_id" class="form-label">Категорія</label>
                <select class="form-select" aria-label="category_id" name="category_id" id="category_id">
                    @php($cat = old('category_id') ?? $product->category->title ?? '')
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $cat == '' ? 'selected' : '' }}>{{$category->title}}</option>
                    @endforeach
                    <option value="NOT" {{ $cat == '' ? 'selected' : '' }}>Відсутній</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Фото 270x300</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image', $product->image) }}" placeholder="Фото 270x300">
                @isset($product->image)
                    <div class="m-3" title="Видалити даний запис">
                        <img src="{{ asset($product->image) }}" alt="" height="150">
                        <button type="submit" form="del1" class="text-danger border">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                @endisset
            </div>


            <div class="mb-3">
                <label for="images" class="form-label">Фото 720x950</label>
                <input type="file" class="form-control" id="images" name="images"
                       value="{{ old('images', $product->images) }}" placeholder="Фото продукту">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Зберегти</button>
        </form>

        @isset($product->image)
        <form id="del1" class="inline" method="POST"
              action="{{route('admin.products.images.destroy', $product->id)}}"
              onsubmit="return confirm('Підтверджуєте видалення об\'єкту? {{$product->image}}')">
            @method('DELETE')
            @csrf
        </form>
        @endisset


        <div class="m-3">
            <div class="row">
            @foreach($product->images as $image)
                <x-admin.products-image-destroy class="flex" img="{{ asset($image->image_path) }}" resource="products" x="{{$product->id}}" y="{{$image->id}}"></x-admin.products-image-destroy>
            @endforeach
            </div>
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

