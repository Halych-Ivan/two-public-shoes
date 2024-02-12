<!-- Footer Top Area Start -->
<section class="footer-middle">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 xs-res-mrbtm">
                <div class="footer-menu">
                    <h4>MY ACCOUNT</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Cart</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="footer-menu">
                    <h4>Наші категорії</h4>
                    <ul>
                        @isset($data['categories'])
                            @foreach($data['categories'] as $category)
                                <li><a href="{{ route('category', $category->id) }}">{{ $category->title }}</a></li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 xs-res-mrbtm">
                <div class="footer-menu">
                    <h4>Про нас</h4>
                    <ul>
                        <li><a href="{{ route('contact') }}">Контакти</a></li>
                        <li><a href="{{ route('about') }}">Додаткова інформація</a></li>
                        <li><a href="{{ route('home') }}">Головна сторінка</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="address-area">
                    <a href="{{ route('home') }}"><img src="{{ asset($data['config']->logo) }}" alt=""></a>
{{--                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>--}}
                    <div class="contact-details">
                        <ul>
                            <li><i class="fa fa-phone"></i>{{ $data['config']->phone ?? '' }}</li>
                            <li><i class="fa fa-envelope-o"></i>{{ $data['config']->email ?? '' }}</li>
                            <li><i class="fa fa-map-marker"></i>{{ $data['config']->address ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Middle Area End -->
<!-- Footer Bottom Area Start -->
<div class="footer-bottom-area">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>Copyright &copy;  <a href="https://galych-ivan.pp.ua">Ivan Halych.</a> All Rights Reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="img/other-pg/payment.png" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom Area End -->
