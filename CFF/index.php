<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Rate My School - Trang </title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<!--  -->
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<!-- Template Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

	<!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<?php include_once('includes/header.php'); ?>

	<!--================ Start Home Banner Area =================-->
	<section id="hero" class="hero">

		<div class="info d-flex align-items-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<h2 data-aos="fade-down">Chào mừng đến với <span>Fpoly's Library</span></h2>
						<p data-aos="fade-up">Trang đánh giá và tổng hợp thông tin về giảng viên và tài liệu học tập của <span style="color: orange; line-height: 45px; font-weight: 700;">Trường Cao đẳng Fpoly</span>.</p>
						<form action="monhoc.php" class="form_box d-flex justify-content-between w-100" method="post" name="search">
							<div class="input-group">

								<button type="submit" class="btn btn-get-started mr-0 pr-0" name="search" id="submit">
									<i class="fa fa-university" aria-hidden="true"></i>
								</button>
								<input type="search" id="form1" name="searchteacher" placeholder="Tìm kiếm thông tin..." data-aos="fade-up" data-aos-delay="200" class="form-control btn-get-started" style="margin-left:-10;" />

							</div>
						</form>
						<!-- <i class="fal fa-graduation-cap"><input type="search" placeholder="Tìm kiếm thông tin" data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started"></i> -->
					</div>
				</div>
			</div>
		</div>

		<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

			<div class="carousel-item active" style="background-image: url(assets/img/caodangfptpolytechnic-lienhe-1.jpg)">
			</div>

			<a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
			</a>

		</div>

	</section><!-- End Hero Section -->

	<main id="main">



		<!-- ======= Constructions Section ======= -->
		<section id="constructions" class="constructions">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<h2>Thông tin giảng viên</h2>
					<p>Dưới đây là một giảng viên nổi bật trong trường ở từng môn học khác nhau.</br><strong>Bấm vào</strong> vào để biết thêm thông tin chi tiết</p>
				</div>

				<div class="row gy-4">

					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
						<div class="card-item">
							<div class="row">
								<div class="col-xl-5">
									<div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
								</div>
								<div class="col-xl-7 d-flex align-items-center">
									<div class="card-body">
										<h4 class="card-title">Giảng viên 1.</h4>
										<p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti
											adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Card Item -->

					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
						<div class="card-item">
							<div class="row">
								<div class="col-xl-5">
									<div class="card-bg" style="background-image: url(assets/img/constructions-2.jpg);"></div>
								</div>
								<div class="col-xl-7 d-flex align-items-center">
									<div class="card-body">
										<h4 class="card-title">Giảng viên 2.</h4>
										<p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui
											iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum
											dignissimos.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Card Item -->

					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
						<div class="card-item">
							<div class="row">
								<div class="col-xl-5">
									<div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
								</div>
								<div class="col-xl-7 d-flex align-items-center">
									<div class="card-body">
										<h4 class="card-title">Giảng viên 3</h4>
										<p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat
											ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla
											culpa.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Card Item -->

					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
						<div class="card-item">
							<div class="row">
								<div class="col-xl-5">
									<div class="card-bg" style="background-image: url(assets/img/constructions-4.jpg);"></div>
								</div>
								<div class="col-xl-7 d-flex align-items-center">
									<div class="card-body">
										<h4 class="card-title">Giảng viên 4.</h4>
										<p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque
											architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores
											libero nobis.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Card Item -->

				</div>

			</div>
		</section><!-- End Constructions Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<h2>Tài liệu</h2>
					<p>Dưới đây là tổng hợp tài liệu của các môn <strong>(Bao gồm Assignment và Labs)</strong></p>
				</div>

				<div class="row gy-4">

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<div class="service-item  position-relative">
							<div class="icon">
								<i class="fa-solid fa-mountain-city"></i>
							</div>
							<h3>Nesciunt Mete</h3>
							<p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis
								tempore et consequatur.</p>
							<a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="fa-solid fa-arrow-up-from-ground-water"></i>
							</div>
							<h3>Eosle Commodi</h3>
							<p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut
								nesciunt dolorem.</p>
							<a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="fa-solid fa-compass-drafting"></i>
							</div>
							<h3>Ledo Markt</h3>
							<p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci
								eos earum corrupti.</p>
							<a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="fa-solid fa-trowel-bricks"></i>
							</div>
							<h3>Asperiores Commodit</h3>
							<p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident
								adipisci neque.</p>
							<a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="fa-solid fa-helmet-safety"></i>
							</div>
							<h3>Velit Doloremque</h3>
							<p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem
								alias eius labore.</p>
							<a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="fa-solid fa-arrow-up-from-ground-water"></i>
							</div>
							<h3>Dolori Architecto</h3>
							<p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti
								recusandae ducimus enim.</p>
							<a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
						</div>
					</div><!-- End Service Item -->

				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Alt Services Section ======= -->
		<section id="alt-services" class="alt-services">
			<div class="container" data-aos="fade-up">

				<div class="row justify-content-around gy-4">
					<div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

					<div class="col-lg-5 d-flex flex-column justify-content-center">
						<h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
						<p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus
							laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

						<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
							<i class="bi bi-easel flex-shrink-0"></i>
							<div>
								<h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
								<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
									non provident</p>
							</div>
						</div><!-- End Icon Box -->

						<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
							<i class="bi bi-patch-check flex-shrink-0"></i>
							<div>
								<h4><a href="" class="stretched-link">Nemo Enim</a></h4>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
									deleniti atque</p>
							</div>
						</div><!-- End Icon Box -->

						<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
							<i class="bi bi-brightness-high flex-shrink-0"></i>
							<div>
								<h4><a href="" class="stretched-link">Dine Pad</a></h4>
								<p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
									aut eligendi omnis</p>
							</div>
						</div><!-- End Icon Box -->

						<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-brightness-high flex-shrink-0"></i>
							<div>
								<h4><a href="" class="stretched-link">Tride clov</a></h4>
								<p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
									Et eligendi</p>
							</div>
						</div><!-- End Icon Box -->

					</div>
				</div>

			</div>
		</section><!-- End Alt Services Section -->

		<!-- ======= Features Section ======= -->
		<section id="features" class="features section-bg">
			<div class="container" data-aos="fade-up">

				<ul class="nav nav-tabs row  g-2 d-flex">

					<li class="nav-item col-3">
						<a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
							<h4>Học kỳ Summer</h4>
						</a>
					</li><!-- End tab nav item -->

					<li class="nav-item col-3">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
							<h4>Học kỳ Spring</h4>
						</a><!-- End tab nav item -->

					<li class="nav-item col-3">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
							<h4>Học kỳ Fall</h4>
						</a>
					</li><!-- End tab nav item -->

					<li class="nav-item col-3">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
							<h4>Học kỳ Winter</h4>
						</a>
					</li><!-- End tab nav item -->

				</ul>

				<div class="tab-content">

					<div class="tab-pane active show" id="tab-1">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
								<h3>Voluptatem dignissimos provident</h3>
								<p class="fst-italic">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
									magna aliqua.
								</p>
								<ul>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									<li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
										aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
										pariatur.</li>
								</ul>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
								<img src="assets/img/features-1.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div><!-- End tab content item -->

					<div class="tab-pane" id="tab-2">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
								<h3>Neque exercitationem debitis</h3>
								<p class="fst-italic">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
									magna aliqua.
								</p>
								<ul>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									<li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
									<li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a.
										Ipsum neque dolor voluptate nisi sed.</li>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
										aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
										pariatur.</li>
								</ul>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center">
								<img src="assets/img/features-2.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div><!-- End tab content item -->

					<div class="tab-pane" id="tab-3">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
								<h3>Voluptatibus commodi accusamu</h3>
								<ul>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									<li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
									<li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a.
										Ipsum neque dolor voluptate nisi sed.</li>
								</ul>
								<p class="fst-italic">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
									magna aliqua.
								</p>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center">
								<img src="assets/img/features-3.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div><!-- End tab content item -->

					<div class="tab-pane" id="tab-4">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
								<h3>Omnis fugiat ea explicabo sunt</h3>
								<p class="fst-italic">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
									magna aliqua.
								</p>
								<ul>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									<li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
									<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
										aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
										pariatur.</li>
								</ul>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center">
								<img src="assets/img/features-4.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div><!-- End tab content item -->

				</div>

			</div>
		</section><!-- End Features Section -->


		<!-- ======= Testimonials Section ======= -->
		<section id="testimonials" class="testimonials section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<h2>Testimonials</h2>
					<p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
						reprehenderit sunt deleniti</p>
				</div>

				<div class="slides-2 swiper">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
									<h3>Saul Goodman</h3>
									<h4>Ceo &amp; Founder</h4>
									<div class="stars">
										<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
										Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
									<h3>Sara Wilsson</h3>
									<h4>Designer</h4>
									<div class="stars">
										<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
										quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
									<h3>Jena Karlis</h3>
									<h4>Store Owner</h4>
									<div class="stars">
										<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
										tempor labore quem eram duis noster aute amet eram fore quis sint minim.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
									<h3>Matt Brandon</h3>
									<h4>Freelancer</h4>
									<div class="stars">
										<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
										minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
									<h3>John Larson</h3>
									<h4>Entrepreneur</h4>
									<div class="stars">
										<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
										culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
										quid.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
						</div><!-- End testimonial item -->

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</section><!-- End Testimonials Section -->

		<!-- ======= Recent Blog Posts Section ======= -->
		<section id="recent-blog-posts" class="recent-blog-posts">
			<div class="container" data-aos="fade-up"">



				<div class=" section-header">
				<h2>Recent Blog Posts</h2>
				<p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
			</div>

			<div class="row gy-5">

				<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
					<div class="post-item position-relative h-100">

						<div class="post-img position-relative overflow-hidden">
							<img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
							<span class="post-date">December 12</span>
						</div>

						<div class="post-content d-flex flex-column">

							<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

							<div class="meta d-flex align-items-center">
								<div class="d-flex align-items-center">
									<i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
								</div>
								<span class="px-3 text-black-50">/</span>
								<div class="d-flex align-items-center">
									<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
								</div>
							</div>

							<hr>

							<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

						</div>

					</div>
				</div><!-- End post item -->

				<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="post-item position-relative h-100">

						<div class="post-img position-relative overflow-hidden">
							<img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
							<span class="post-date">July 17</span>
						</div>

						<div class="post-content d-flex flex-column">

							<h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

							<div class="meta d-flex align-items-center">
								<div class="d-flex align-items-center">
									<i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
								</div>
								<span class="px-3 text-black-50">/</span>
								<div class="d-flex align-items-center">
									<i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
								</div>
							</div>

							<hr>

							<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

						</div>

					</div>
				</div><!-- End post item -->

				<div class="col-xl-4 col-md-6">
					<div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

						<div class="post-img position-relative overflow-hidden">
							<img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
							<span class="post-date">September 05</span>
						</div>

						<div class="post-content d-flex flex-column">

							<h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

							<div class="meta d-flex align-items-center">
								<div class="d-flex align-items-center">
									<i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
								</div>
								<span class="px-3 text-black-50">/</span>
								<div class="d-flex align-items-center">
									<i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
								</div>
							</div>

							<hr>

							<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

						</div>

					</div>
				</div><!-- End post item -->

			</div>

			</div>
		</section>
		<!-- End Recent Blog Posts Section -->
		<!-- ======= Get Started Section ======= -->
		<section id="get-started" class="get-started section-bg">
			<div class="container">

				<div class="row justify-content-between gy-4">

					<div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
						<div class="content">
							<h3>Minus hic non reiciendis ea possimus at quia.</h3>
							<p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis
								ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus
								dicta.
							<p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt
								porro magni qui necessitatibus dolorem at animi cupiditate.</p>
						</div>
					</div>

					<div class="col-lg-5" data-aos="fade">
						<form action="forms/quote.php" method="post" class="php-email-form">
							<h3>Get a quote</h3>
							<p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero
								park flows.</p>
							<div class="row gy-3">

								<div class="col-md-12">
									<input type="text" name="name" class="form-control" placeholder="Name" required>
								</div>

								<div class="col-md-12 ">
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								</div>

								<div class="col-md-12">
									<input type="text" class="form-control" name="phone" placeholder="Phone" required>
								</div>

								<div class="col-md-12">
									<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
								</div>

								<div class="col-md-12 text-center">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

									<button type="submit">Get a quote</button>
								</div>

							</div>
						</form>
					</div><!-- End Quote Form -->

				</div>

			</div>
		</section><!-- End Get Started Section -->
	</main><!-- End #main -->

	<?php include_once('includes/footer.php'); ?>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
</body>

</html>