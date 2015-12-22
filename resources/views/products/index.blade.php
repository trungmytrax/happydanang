@extends('index')
@section('css')
		<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
@stop
@section('js-top')
		<script src="{{asset('js/modernizr.custom.js')}}"></script>
@stop

@section('js-bootom')
		<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
		<script src="{{asset('js/classie.js')}}"></script>
		<script src="{{asset('js/cbpGridGallery.js')}}"></script>
		<script src="{{asset('js/products.js')}}"></script>

@stop

@section('content')
	<div class="container-fluid">
		<div id="grid-gallery" class="grid-gallery">
			<section class="grid-wrap">
				<ul class="grid">
					<li class="grid-sizer"></li><!-- for Masonry column width -->
					<li>
					    <figure>
					    	<img src='img\products\hompage_07_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>

					    	<img src='img\products\hompage_07_2.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\hompage_07_3.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\hompage_07_4.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\mockuppostcard.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\product.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\product2.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\run_v3.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\sell_tshirt.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character1_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character2.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character2_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character2_2.jpg'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character3.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character3_1.jpg'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character4.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character4_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character4_2.jpg'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character5.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character5_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character5_2.jpg'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character6.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character8.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character8_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character8_2.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character8_3.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character9.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character9_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\hompage_07.png'/>
					    </figure>
					</li>
				</ul>
			</section><!-- // grid-wrap -->
			<section class="slideshow">
				<ul>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\hompage_07_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>

					    	<img src='img\products\hompage_07_2.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\hompage_07_3.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\hompage_07_4.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\mockuppostcard.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\product.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\product2.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\run_v3.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\sell_tshirt.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character1_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character2.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character2_1.png'/>
					    </figure>
					</li>
					<li>
					    <figure>
					    	<img src='img\products\character2_2.jpg'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character3.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character3_1.jpg'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character4.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character4_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character4_2.jpg'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character5.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character5_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character5_2.jpg'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character6.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character8.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character8_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character8_2.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character8_3.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character9.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\character9_1.png'/>
					    </figure>
					</li>
					<li>
						<figcaption>
							<h3>Title products</h3>
							<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
						</figcaption>
					    <figure>
					    	<img src='img\products\hompage_07.png'/>
					    </figure>
					</li>
				</ul>
				<nav>
					<span class="icon nav-prev"></span>
					<span class="icon nav-next"></span>
					<span class="icon nav-close"></span>
				</nav>
			</section><!-- // slideshow -->
		</div><!-- // grid-gallery -->
	</div>
@stop