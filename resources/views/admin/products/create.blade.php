@extends('admin.layout')
@section('title', 'ADMIN')


@section('content')

    <div class="container">

        <h1>{{$product->exists ? 'Редагування продукта' : 'Новий продукт'}}</h1>
        <x-admin.action-icons resource="products" id="{{$product->id ?? ''}}"></x-admin.action-icons>
        <hr>

        <form class="m-15"
              action="{{$product->exists ? route('admin.products.update', $product->id) : route('admin.products.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if($product->exists) @method('PATCH') @endif

            <div class="mb-3">
                <label for="title" class="form-label">Назва продукту</label>
                <input type="text"
                       class="form-control"
                       id="title"
                       name="title"
                       value="{{ old('title', $product->title) }}"
                       placeholder="Назва продукту" required>
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="category_id" name="category_id">
                    @foreach($categories as $category)
                        @php($id = old('category_id') ?? $product->category->id ?? '')
                        <option value="{{$category->id}}" {{$id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Ціна</label>
                <input type="text"
                       class="form-control"
                       id="price"
                       name="price"
                       value="{{ old('price', $product->price) }}"
                       placeholder="Ціна продукту" required>
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


            <div class="mb-3">
                <label for="description" class="form-label">Опис</label>
                <input type="text"
                       class="form-control"
                       id="description"
                       name="description"
                       value="{{ old('description', $product->description) }}"
                       placeholder="Опис продукту" required>
            </div>



{{--            <div class="mb-3">--}}
{{--                <label for="banner_heading" class="form-label">Оберіть файл банеру (1920x400)</label>--}}
{{--                <input class="form-control" type="file" id="banner_heading" name="banner_heading">--}}
{{--                @if($category->banner_heading)--}}
{{--                    <img src="{{ asset('images/categories/'.$category->banner_heading) }}" height="100" alt="">--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <label for="banner_shop" class="form-label">Оберіть файл банеру (870x247)</label>--}}
{{--                <input class="form-control" type="file" id="banner_shop" name="banner_shop">--}}
{{--                @if($category->banner_shop)--}}
{{--                    <img src="{{ asset('images/categories/'.$category->banner_shop) }}" height="100" alt="">--}}
{{--                @endif--}}
{{--            </div>--}}

            <div class="mb-3">
                <label for="visibility" class="form-label">Видимість</label>
                <input type="text"
                       class="form-control"
                       id="visibility"
                       name="visibility"
                       placeholder="{{ old('visibility', 'Чим більше значення - тим вище категорія') }}">
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

