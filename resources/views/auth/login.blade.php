<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bimbel Gambar Online Seni Rupa Desain | Villa Merah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('images/1.png') }}">

    <link href="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.css" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('landingpage') }}/fonts/icomoon/style.css">

	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/owl.theme.default.min.css">

    <style>
        #map {
          top: 0;
          bottom: 0;
          width: 80%;
          height: 500px;
        }
    </style>
	<link rel="stylesheet" href="{{ asset('bower_components') }}/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="{{ asset('landingpage') }}/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/aos.css">

	<link rel="stylesheet" href="{{ asset('landingpage') }}/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div class="site-wrap">

		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>


		<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

			<div class="container-fluid">
				<div class="d-flex align-items-center">
					<div class="site-logo mr-auto w-25"><a href=""><img width="50px" src="{{ asset('images/1.png') }}"
								alt="logo-villa-merah"></a></div>

					<div class="mx-auto text-center">
						<nav class="site-navigation position-relative text-right" role="navigation">
							<ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
								<li><a href="#home-section" class="nav-link">Home</a></li>
								<li><a href="#courses-section" class="nav-link">Materi</a></li>
								<li><a href="#location-section" class="nav-link">Lokasi</a></li>
							</ul>
						</nav>
					</div>


				</div>
			</div>

		</header>

		<div class="intro-section" id="home-section">

			<div class="slide-1" style="background-image: url('{{ asset('landingpage') }}/images/hero_1.jpg');"
				data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="row align-items-center">
								<div class="col-lg-6 mb-4">
									<h1 data-aos="fade-up" data-aos-delay="100">Bimbel Gambar Online Seni Rupa Desain</h1>
									<p class="mb-4" data-aos="fade-up" data-aos-delay="200">Bimbingan Belajar Online Seni Rupa
										Desain pertama #1 di Indonesia.</p>
									<p data-aos="fade-up" data-aos-delay="300"><a href="#"
											class="btn btn-danger py-3 px-5 btn-pill">Admission Now</a></p>

								</div>

								<div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
									<div class="form-box">

										<div class="box box-default">
											<div class="nav-tabs-custom">
												<!-- <ul class="nav nav-tabs">
													<div class="nav-link" data-toggle="tab" href="#tab_1">Masuk</div>
													<div class="nav-link" data-toggle="tab" href="#tab_2">Daftar</div>
												</ul> -->
												<div class="tab-content">
													<div class="tab-pane active" id="tab_1">
														<form class="user" method="POST" action="{{ route('login') }}">
															@csrf
															<h3 class="h4 text-black mb-4">Masuk</h3>
															<div class="form-group">
																<input type="text"
																	class="form-control form-control-user @error('username') is-invalid @enderror"
																	id="login" name="login" value="{{ old('email') }}" required autofocus
																	placeholder="Enter Email or Username">
																@if ($errors->has('username') || $errors->has('email'))
																<span class="invalid-feedback">
																	<strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
																</span>
																@endif
															</div>
															<div class="form-group">
																<input type="password"
																	class="form-control form-control-user @error('password')is-invalid @enderror"
																	id="exampleInputPassword" placeholder="Password" name="password" required
																	autocomplete="current-password">
																@error('password')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
																@enderror
															</div>
															<div class="form-group">
																<div class="custom-control custom-checkbox small">
																	<input type="checkbox" class="custom-control-input" id="customCheck" name="remember"
																		{{ old('remember') ? 'checked' : '' }}>
																	<label class="custom-control-label" for="customCheck">Remember
																		Me</label>
																</div>
															</div>
															<div class="form-group">
																<input type="submit" class="btn btn-danger btn-pill" value="Masuk">
															</div>

														</form>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="site-section courses-title" id="courses-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
					<h2 class="section-title">Materi</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="50">
		<div class="container">
			<div class="row">

				<div class="owl-carousel col-12 nonloop-block-14">

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img src="{{ asset('images/home') }}/1_grip a pencil.png" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Persiapan Menggambar</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img src="{{ asset('images/home') }}/2_arsir.png" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Garis</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img src="{{ asset('images/home') }}/16_konstruksi bentuk dasar 3D.png"
									alt="Image" class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Bidang Dasar</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img src="{{ asset('images/home') }}/2_arsir.png" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Arsir</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img
									src="{{ asset('images/home') }}/56_penerapan perspektif_dua titik hilang-1.jpg" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Perspektif, Interior dan Eksterior</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img
									src="{{ asset('images/home') }}/78_7langkah membuat figur manusia4-1.jpg" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Anatomi</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img
									src="{{ asset('images/home') }}/53_penerapan sketsa perspektif_mobil.jpg" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Kendaraan</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img src="{{ asset('images/home') }}/25_konstruksi pohon_2.png" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Pohon</a></h3>
							<p></p>
						</div>
					</div>

					<div class="course bg-white h-100 align-self-stretch">
						<figure class="m-0">
							<a href="course-single.html"><img
									src="{{ asset('images/home') }}/74_proporsi manusia pd jarak pandang2-1.jpg" alt="Image"
									class="img-fluid"></a>
						</figure>
						<div class="course-inner-text py-4 px-4">
							<h3><a href="#">Gambar Suasana</a></h3>
							<p></p>
						</div>
					</div>

				</div>



			</div>
			<div class="row justify-content-center">
				<div class="col-7 text-center">
					<button class="customPrevBtn btn btn-danger m-1">Prev</button>
					<button class="customNextBtn btn btn-danger m-1">Next</button>
				</div>
			</div>
		</div>
    </div>

    <div class="site-section bg-light" id="location-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 justify-text-center">

					<div class="row mb-5 justify-content-center">
                        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                            <h2 class="section-title">Lokasi Kami</h2>
                        </div>
                    </div>
				</div>
            </div>
            <div class="row justify-content-center">
                <div id="map"></div>
            </div>
        </div>
    </div>

	<!--
	<div class="site-section bg-light" id="contact-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-7">



					<h2 class="section-title mb-3">Hubungi Kami</h2>
					<p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi</p>

					<form method="post" data-aos="fade">
						<div class="form-group row">
							<div class="col-md-6 mb-3 mb-lg-0">
								<input type="text" class="form-control" placeholder="First name">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Last name">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Subject">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<input type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6">

								<input type="submit" class="btn btn-danger py-3 px-5 btn-block btn-pill" value="Send Message">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	-->

	<footer class="footer-section bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Tentang Bimbel Online Villa Merah</h3>
					<p>Bimbingan Belajar Online Villa Merah merupakan sebuah website yang berfungsi sebagai pelengkap dalam
						pembelajaran. </p>
				</div>

				<div class="col-md-3 ml-auto">
					<h3>Links</h3>
					<ul class="list-unstyled footer-links">
						<li><a href="#home-section">Home</a></li>
						<li><a href="#courses-section">Materi</a></li>
					</ul>
				</div>

				<div class="col-md-4">
					<h3>Akun Sosial Media Villa Merah</h3>
					<p>
						<a href="https://www.youtube.com/channel/UCCheW9-S6rzlSC8QUcnrMpA" target="_blank" rel="nofollow"
							title="Channel YouTube"><span class="fa fa-youtube fa-lg"></span></a>
						<a href="https://www.instagram.com/villamerah/" target="_blank" rel="nofollow" title="Instagram"><span
								class="fa fa-instagram fa-lg"></span></a>
					</p>
				</div>

			</div>

			<div class="row pt-5 mt-5 text-center">
				<div class="col-md-12">
					<div class="border-top pt-5">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i>
							by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>

			</div>
		</div>
	</footer>



	</div> <!-- .site-wrap -->

	<script src="{{ asset('landingpage') }}/js/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery-ui.js"></script>
	<script src="{{ asset('landingpage') }}/js/popper.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery.stellar.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery.countdown.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/bootstrap-datepicker.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery.easing.1.3.js"></script>
	<script src="{{ asset('landingpage') }}/js/aos.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery.fancybox.min.js"></script>
	<script src="{{ asset('landingpage') }}/js/jquery.sticky.js"></script>

	<script src="{{ asset('landingpage') }}/js/main.js"></script>


	<script src="{{ asset('bower_components') }}/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('bower_components') }}/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="{{ asset('bower_components') }}/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="{{ asset('bower_components') }}/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('dist') }}/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist') }}/js/demo.js"></script>

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZ2lhbmdpZmFybHkiLCJhIjoiY2tid2FzZ250MGU0cTJ1bnQ4cm13dHEyeSJ9.8c9FtYuHv56b4WV841Eoiw';
         var map = new mapboxgl.Map({
           container: 'map',
           style: 'mapbox://styles/mapbox/streets-v11',
           center: [107.3054925, -6.6067015],
           zoom: 8
         });

         var markerVMJaksel = "<a href='https://www.instagram.com/giangifarly/' target='_blank'><h3>Villa Merah Jakarta Selatan</h3></a>";
         markerVMJaksel += "A Jl. Gandaria 1 No.9a, RT.1/RW.10, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130";

         new mapboxgl.Marker()
           .setLngLat([106.789382, -6.246201])
           .setPopup(new mapboxgl.Popup().setHTML(markerVMJaksel))
           .addTo(map);

         var markerVMJaktim = "<a href='https://www.instagram.com/giangifarly/' target='_blank'><h3>Villa Merah Jakarta Timur</h3></a>";
         markerVMJaktim += "Jl. Jenderal Ahmad Yani No.41, RT.5/RW.4, Utan Kayu Sel., Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13130";

         new mapboxgl.Marker()
           .setLngLat([106.872897, -6.201225])
           .setPopup(new mapboxgl.Popup().setHTML(markerVMJaktim))
           .addTo(map);

         var markerVMBandung = "<a href='https://www.instagram.com/giangifarly/' target='_blank'><h3>Villa Merah Bandung</h3></a>";
         markerVMBandung += "Jl. Anggrek No.49, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114";

         new mapboxgl.Marker()
           .setLngLat([107.629666, -6.911374])
           .setPopup(new mapboxgl.Popup().setHTML(markerVMBandung))
           .addTo(map);
       </script>

</body>

</html>

