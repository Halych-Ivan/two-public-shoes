@extends('__shop.layout')

@section('title', 'Контакти')


@section('content')

    <!-- ADDRESS AREA START -->
    <section class="adress-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 res-mr-btm xs-res-mrbtm">
                    <div class="address-single">
                        <div class="all-adress-info">
                            <div class="icon">
                                <span><i class="fa fa-user-plus"></i></span>
                            </div>
                            <div class="info">
                                <h3>ТЕЛЕФОН</h3>
                                <p>{{ $config->phone ?? '' }}</p>
                                <p>{{ $config->phone_1 ?? '' }}</p>
                                <p>{{ $config->phone_2 ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 res-mr-btm xs-res-mrbtm">
                    <div class="address-single">
                        <div class="all-adress-info">
                            <div class="icon">
                                <span><i class="fa fa-map-marker"></i></span>
                            </div>
                            <div class="info">
                                <h3>АДРЕСА</h3>
                                <p>{{ $config->address ?? '' }}</p>
                                <p>{{ route('home') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address-single">
                        <div class="all-adress-info">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h3>E-MAIL</h3>
                                <p>{{ $config->email ?? '' }}</p>
                                <p>{{ $config->email_1 ?? '' }}</p>
                                <p>{{ $config->email_2 ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ADDRESS AREA END -->
    <!-- CONTACT FROM AREA START -->
    <section class="contact-from-area">
        <div class="container">
            <div class="contact-from-heading">
                <h3>Залиште повідомлення нам</h3>
            </div>
            <div class="row">
                <form action="{{route('contact_form')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <div class="contact-from-left">
                            <div class="input-text">
                                <input type="text" placeholder="Ваше ім'я" name="name" id="name" required>
                            </div>
                            <div class="input-text">
                                <input type="phone" placeholder="Ваш телефон" name="phone" id="phone" required>
                            </div>
                            <div class="input-text">
                                <input type="text" placeholder="Тема повідомлення" name="subject" id="subject"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-from-right">
                            <div class="input-message">
                                <textarea id="message" placeholder="Ваше повідомлення" name="messages" required></textarea>
                                <input type="submit" value="SEND" name="submitMessage" id="submitMessage"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- CONTACT FROM AREA END -->

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
