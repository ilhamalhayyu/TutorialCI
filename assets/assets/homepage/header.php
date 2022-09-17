<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<title>Test Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href= {{ assets('i/favicon.png') }} type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:100,200,300,400,600,500,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
	<!-- Bootstrap 4.3.1 CSS -->
	<!-- 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">


<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">

<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->

<link rel="stylesheet" href="{{assets('css/jquery.fancybox.min.css')}} ">

<!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- Startup 3 CSS (Styles for all blocks) -->
<link href="{{ assets('css/style.css')}}" rel="stylesheet" />
<!-- jQuery 3.3.1 -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
</head>
<body>
	<!-- Navigation 18 -->

	<nav class="navigation_18 bg-dark pt-30 pb-30 lh-40 text-center">
		<div class="container px-xl-0">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-auto text-lg-left" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<a href="#" class="logo link color-white">Startup 3</a>
				</div>
				<div class="col-lg-9 text-lg-right" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<a href="#" class="link color-white mr-15">Tour</a>
					<a href="#" class="link color-white mx-15">Prices</a>
					<a href="#" class="link color-white mx-15">About</a>
					<a href="#" class="link color-white mx-15">F.A.Q.</a>
					<a href="#" class="link color-white mx-15">Support</a>
					<form method="GET" action="/" class="ml-15 mt-10 mt-md-0 d-inline-block">
						<input type="text" name="search" placeholder="Search" class="input sm w-200 mw-full border-transparent-white focus-white color-white placeholder-transparent-white text-center text-md-left" />
						<input type="submit" class="d-none" />
					</form>
				</div>
			</div>
		</div>
	</nav>
	<!-- Feature 44 -->

	<section class="feature_44 bg-light pt-100 text-center text-md-left">
		<div class="container px-xl-0">
			<div class="row align-items-center align-items-lg-start">
				<div class="col-xl-1"></div>
				<div class="col-lg-5 col-md-7" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<h2 class="mt-20 mb-30 small">Work Hurd, <br />Stat Humble</h2>
					<div class="f-22 color-heading text-adaptive">
						This I have produced as a scantling of
						Jack’s great eloquence and the force of
						his reasoning upon such abstruse matters.
					</div>
					<a href="#" class="mt-30 btn border-gray color-main">Learn More</a>
				</div>
				<div class="col-md-1"></div>
				<div class="col-lg-5 col-md-4" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<img srcset="i/feature_44_img_1@2x.png 2x" src="i/feature_44_img_1.png" class="img" alt="" />
				</div>
			</div>
			<div class="mt-75 row justify-content-center justify-content-md-between align-items-end align-items-lg-start flex-row-reverse row2">
				<div class="col-xl-1"></div>
				<div class="col-lg-5 col-md-6 pb-60 pb-lg-0 inner2" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<h2 class="mt-55 mb-30 small">It Was a Large <br />Long Room</h2>
					<div class="f-22 color-heading text-adaptive">
						This little wandering journey, without
						settled place of abode, had been so
						unpleasant to me, that my own house, as I called.
					</div>
					<a href="#" class="mt-30 btn border-gray color-main">Learn More</a>
				</div>
				<div class="col-md-1"></div>
				<div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<img srcset="i/feature_44_img_2@2x.png 2x" src="i/feature_44_img_2.png" class="img-fluid img" alt="" />
				</div>
				<div class="col-xl-1"></div>
			</div>
		</div>
	</section>
