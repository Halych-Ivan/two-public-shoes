@extends('__shop.layout')

@section('title', '')


@section('content')


    @if($category->banner)
    <!-- BANNER AREA STRAT -->
    <section class="bannerhead-area" style="background:url({{asset($category->banner->image)}}) rgba(0, 0, 0, 0) no-repeat scroll center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-heading">
                        <h1>{{$category->banner->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->
    @endif

<h2>Буде сторінка категорії</h2>
{{$category->title??''}}




@endsection
