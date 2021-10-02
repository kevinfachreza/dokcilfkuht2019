@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="body">
	<header id="header" class="header-transparent header-effect-shrink appear-animation" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}" data-appear-animation="fadeIn" data-appear-animation-delay="200">
		<div class="header-body border-top-0 header-body-bottom-border">
			<div class="header-container container">
				<div class="header-row">
					<div class="header-column">
						<div class="header-row">
							<div class="header-logo">
								<a href="index.html">
									<img alt="Porto" width="70" height="70" data-sticky-width="40" data-sticky-height="40" src="{{url('img/logo-2021-md.png')}}">
								</a>
							</div>
						</div>
					</div>
					<div class="header-column justify-content-end">
						<div class="header-row">
							<div class="header-nav header-nav-links justify-content-start order-2 order-lg-1">
								<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav nav-pills" id="mainNav">
											<li class="dropdown">
												<a class="dropdown-item active" data-hash data-hash-offset="95" href="#home">Home</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#tentang">Tentang</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#cara-daftar">Cara Daftar</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#jadwal">Jadwal</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#materi">Materi</a>
											</li>
											<!-- <li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#hasil-tm">Hasil TM</a>
											</li> -->
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#hadiah">Hadiah</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#galeri">Galeri</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item"  data-hash data-hash-offset="95" href="#footer">Kontak</a>
											</li>
										</ul>
									</nav>
								</div>
								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
							<a class="btn btn-primary btn-rounded font-weight-semibold text-3 btn-px-5 btn-py-2 order-1 order-lg-2 d-none d-md-block mr-3 mr-lg-0" data-hash data-hash-offset="65" href="{{url('register')}}">Daftar Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div role="main" class="main">
		@include('guest.components.header')
		@include('guest.components.call-action')
		@include('guest.components.about')
		@include('guest.components.info-pendaftaran')
		@include('guest.components.timeline')
		@include('guest.components.materi')
		{{-- @include('guest.components.hasil-tm') --}}
		@include('guest.components.hadiah')
		@include('guest.components.gallery')
		@include('guest.components.sponsor')
	</div> 


	<footer id="footer" class="border-0">
		<div class="container py-4">
			<div class="row justify-content-md-center py-5">
				<div class="col-12  mb-5 mb-lg-0">
					<h2 class="text-6 font-weight-bold mb-1">Hubungi Kami</h2>
					<div class="row mt-3 mt-lg-5">
						<div class="col-lg-4 col-md-6 mb-20">
							<h4 class="mb-2">Contact Person</h4>
							<p class="mb-0 font-weight-semibold">Pipit (WA) </p>
							<a href="https://wa.me/6283129358229" class="text-color-white text-5 p-relative bottom-3" target="_blank" title="Call Us"> 0831-2935-8229</a>
							<p class="mb-0 font-weight-semibold">Denisa (WA) </p>
							<a href="https://wa.me/6281336911575" class="text-color-white text-5 p-relative bottom-3" target="_blank" title="Call Us">0813-3691-1575 </a>
							<p class="mb-0 font-weight-semibold">Stephen (WA) </p>
							<a href="https://wa.me/6285290527102" class="text-color-white text-5 p-relative bottom-3" target="_blank" title="Call Us">0852-9052-7102 </a>


						</div>
						<div class="col-lg-4 col-md-6 mb-20">
							<h4 class="mb-2">Email</h4>
							<a href="mail:acaradokcil.fkuht@gmail.com" class="text-color-primary text-5 p-relative bottom-3" target="_blank" title="Mail Us">acaradokcil.fkuht@gmail.com</a>
						</div>
						<div class="col-lg-4 col-md-6 mb-20">
							<h4 class="mb-2">Social Media</h4>
							<ul class="footer-social-icons social-icons mt-3"><!-- 
								<li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCorr3ewS-jx5OPmk2i1GJuA" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li> -->
								<li class="social-icons-facebook"><a href="https://instagram.com/doktercilikfkuht" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
								<a href="https://instagram.com/doktercilikfkuht" target="_blank" title="Instagram">@doktercilikfkuht</a>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright footer-copyright-style-2 footer-top-light-border">
			<div class="container py-2">
				<div class="row py-4">
					<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
						<p>Dokcil FK UHT © Copyright 2021. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>
@endsection