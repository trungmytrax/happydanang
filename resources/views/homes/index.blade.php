@extends('index')
@section('css')
    <link href="{{asset('css/themes/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/responsive.css')}}" rel="stylesheet">

@stop
@section('js-bootom')
    <script src="{{asset('js/homes.js')}}"></script>
    <script src="{{asset('js/themes/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/themes/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/themes/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/themes/main.js')}}"></script>
    <script src="{{asset('js/themes/wow.min.js')}}"></script>
@stop
@section('content')
@endsection
@section('slide')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style='background-image: url({{asset("img/slider/homepage_2_bg.png")}}) !important;'>
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{asset('img/slider/character_home_2.png')}}" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Daragon</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3 btn-view-product" href="{{url('products',['id' => 2])}}">View Product</a>
                                    <a class="btn-slide animation animated-item-3 btn-view-shop" href="{{url('products',['id' => 2])}}">View Shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style='background-image: url({{asset("img/slider/homepage_1_bg.png")}}) !important;'>
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{asset('img/slider/character_home_1.png')}}" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Pho</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3 btn-view-product" href="{{url('products',['id' => 3])}}">View Product</a>
                                    <a class="btn-slide animation animated-item-3 btn-view-shop" href="{{url('products',['id' => 3])}}">View Shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style='background-image: url({{asset("img/slider/homepage_3_bg.png")}}) !important;'>
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">hand bridge</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3 btn-view-product" href="{{url('products',['id' => 4])}}">View Product</a>
                                    <a class="btn-slide animation animated-item-3 btn-view-shop" href="{{url('products',['id' => 4])}}">View Shop</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{asset('img/slider/character_home_3.png')}}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <!-- <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a> -->
    </section><!--/#main-slider-->
    <!-- End #carousel-section -->
@endsection