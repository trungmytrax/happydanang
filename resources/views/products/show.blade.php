@extends('index')
@section('content')
<style type="text/css" media="screen">

	.product-detail-contain ul li .left-content .bgr-product{
		min-height: 200px;
		padding-left: 250px;
		background-position: left center;
		text-align: left;
	}
	.product-detail-contain ul li .content-inner {
		display: inline-block;
	}
	.product-detail-contain ul li .left-content {
		background: #efa473;
	}
	.product-detail-contain ul li .right-content {
		background: #f2918a;
	}
	.product-detail-contain ul li .bgr-product{
		display: table;
		background-repeat: no-repeat;
		width: 100%;
	}
	.product-detail-contain ul li .right-content .bgr-product{
		min-height: 200px;
		padding-right: 250px;
		background-position: right center;
		text-align: right;
	}
	.one-edge-shadow {
		-webkit-box-shadow: 0 -50px 100px -70px #555;
		-moz-box-shadow: 0 -50px 100px -70px #555;
		box-shadow: 0 -50px 100px -70px #555;
	}
	.charactor img {
	    display: table;
	    position: fixed;
	    z-index: 8;
	    margin: auto;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	}

</style>
<div class="product-detail-contain container-fluid">
	<div class="charactor">
		<img src="{{asset('img/products/character9.png')}}" alt="">
	</div>
	<ul class="container-fluid">
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_1.png')}})">
					div.
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_2.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_3.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_4.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_5.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_6.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_5.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_6.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_5.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_6.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_5.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_6.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_5.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_6.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
		<li class="row">
			<div class="content-inner left-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#" class="bgr-product" style="background-image: url({{asset('img/products/service_5.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
			<div class="content-inner right-content col-sm-12 col-md-6 col-lg-6 one-edge-shadow">
				<a href="#"  class="bgr-product" style="background-image: url({{asset('img/products/service_6.png')}})">
					cup</br>
					Introduct</br>
					coast</br>
				</a>
			</div>
		</li>
	</ul>
</div>
@stop