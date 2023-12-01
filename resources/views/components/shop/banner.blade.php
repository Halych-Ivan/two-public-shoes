@props(['image'])
<!-- BANNER AREA STRAT -->
<section class="bannerhead-area" style="background:url({{asset($image)}}) rgba(0, 0, 0, 0) no-repeat scroll center center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-heading">
                    <h1>{{$slot}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER AREA END -->
