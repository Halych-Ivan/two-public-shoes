@extends('__shop.layout')

@section('title', 'Про нас')


@section('content')

    <!-- BANNER AREA STRAT -->
{{--    <section class="bannerhead-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="banner-heading">--}}
{{--                        <h1>ABOUT US</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- BANNER AREA END -->
    <!-- WELCOME AREA START -->
    <section class="welcome-area">
        <div class="welcome-heading">
            <h1>{{ $config->title ?? '' }}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="welcome-left">
                        <div class="welcome-left-titel">
                            <h3>{{ $config->title_1 ?? '' }}</h3>
                        </div>
                        <div class="welcome-left">
                            <p>{!! $config->text ?? '' !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="welcome-right">
                        <img src="{{ asset($config->image ?? 'uploads/banners/570x480.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WELCOME AREA END -->
    <!-- WHO WE ARE SKILL AREA START -->
    <section class="whoare-skill-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 res-mr-btm">
                    <div class="whoare-skill-heading">
                        <h3>{{ $config->title_2 ?? '' }}</h3>
                    </div>
                    <div class="whoare-skill-left">
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading titel_panel">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle accrodin_2 border" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                        <a class="accordion-toggle right" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            {{ $config->tit_1 }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        {{ $config->txt_1 }}
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading titel_panel">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle accrodin_2 border" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                        <a class="accordion-toggle right" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            {{ $config->tit_2 }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{ $config->txt_2 }}
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading titel_panel">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle accrodin_2 border" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                        <a class="accordion-toggle right" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            {{ $config->tit_3 }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{ $config->txt_3 }}
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading titel_panel">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle accrodin_2 border" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                        <a class="accordion-toggle right" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            {{ $config->tit_4 }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{ $config->txt_4 }}
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- WHO WE ARE SKILL AREA END -->

    <!-- OUR BRAND AREA START -->
    <section class="our-brand-area">
        <div class="container">
            <div class="text-center">
                <div class="section-titel">
                    <h3>НАШІ ТОВАРИ</h3>
                </div>
            </div>
            <div class="row blog-area">
                <div id="ourbrand-owl">
                    @foreach($productsAll as $product)
                        <div class="col-md-12"><a href="{{route('product', $product)}}"><img src="{{asset($product->image)}}" alt="" /></a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BRAND AREA END -->


@endsection

