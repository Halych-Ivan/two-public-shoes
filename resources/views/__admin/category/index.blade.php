@extends('__admin.layout')
@section('title', 'ADMIN')


@section('content')
    <div class="container">

        <h1>Категорії</h1>
        <a href="{{ route('admin.category.create') }}"> Додати нову категорію</a>

    </div>
@endsection
