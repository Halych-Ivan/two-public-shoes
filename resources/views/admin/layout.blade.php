<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'ADMIN')</title>
    <meta name="description" content="">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">HOME PAGE</span>
        </a>
        <ul class="nav nav-pills">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Налаштування</a>
                <ul class="dropdown-menu">
{{--                    <li><a class="dropdown-item" href="{{route('admin')}}">Загальні</a></li>--}}
{{--                    <li><a class="dropdown-item" href="{{route('admin.logo')}}">Логотип</a></li>--}}
                    <li><a class="dropdown-item" href="{{route('admin.banners.index')}}">Баннери</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.categories.index')}}">Категорії</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.products.index')}}">Продукти</a></li>
{{--                    <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                    <li><hr class="dropdown-divider"></li>
{{--                    <li><a class="dropdown-item" href="#">Separated link</a></li>--}}
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </header>
</div>



@yield('content')


    <script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
