<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Jthemes">
		<meta name="description" content="eTreeks - Education & Courses Landing Page Template">
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, Courses, Education, Learning, Online Education, Study">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>MTs Al-Mutazam</title> <!-- SITE TITLE -->

		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="{{asset('landing-page/images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('landing-page/images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{asset('landing-page/images/apple-touch-icon-152x152.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('landing-page/images/apple-touch-icon-120x120.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('landing-page/images/apple-touch-icon-76x76.png')}}">
		<link rel="apple-touch-icon" href="{{asset('landing-page/images/apple-touch-icon.png')}}">
		<link rel="icon" href="{{asset('landing-page/images/apple-touch-icon.png')}}" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

		<link href="{{asset('landing-page/css/bootstrap.min.css')}}" rel="stylesheet"> <!-- BOOTSTRAP CSS -->

		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
		<link href="{{asset('landing-page/css/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{asset('landing-page/css/menu.css')}}" rel="stylesheet">
		<link id="effect" href="{{asset('landing-page/css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
		<link href="{{asset('landing-page/css/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{asset('landing-page/css/flexslider.css')}}" rel="stylesheet">
		<link href="{{asset('landing-page/css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('landing-page/css/owl.theme.default.min.css')}}" rel="stylesheet">

		<link href="{{asset('landing-page/css/animate.css')}}" rel="stylesheet"> <!-- ON SCROLL ANIMATION -->
		<link href="{{asset('landing-page/css/style.css')}}" rel="stylesheet"> <!-- TEMPLATE CSS -->
		<link href="{{asset('landing-page/css/responsive.css')}}" rel="stylesheet"> <!-- RESPONSIVE CSS -->
		<style>
			.white-menu .wsmainfull{
				background-color: #5A79CB!important;
			}
			.tra-menu .wsmainfull.scroll, .white-menu .wsmainfull.scroll, .dark-menu.dark-scroll .wsmainfull.scroll{
				background-color: #5A79CB!important;
			}
			.navbar-dark .wsmenu > .wsmenu-list > li > a{
				color: white;
			}
		</style>
	</head>
	<body>
		<!-- PRELOADER SPINNER ============================================= -->
		{{-- <div id="loader-wrapper">
			<div id="loading">
				<div id="loading-center">
					<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
				</div>
			</div>
		</div> --}}

		<!-- PAGE CONTENT ============================================= -->	
		<div id="page" class="page">
			<!-- HEADER ============================================= -->
			<header id="header" class="header white-menu navbar-dark">
				<div class="header-wrapper">
					<!-- MOBILE HEADER -->
					<div class="wsmobileheader clearfix">	
					 	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
					 	<span class="smllogo smllogo-black"><img src="{{asset('landing-page/images/logo.png')}}" width="172" height="40" alt="mobile-logo"></span>
					 	<span class="smllogo smllogo-white"><img src="{{asset('landing-page/images/logo-white.png')}}" width="172" height="40" alt="mobile-logo"></span>
				 	</div>

				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
		 				<div class="wsmainwp clearfix">
		 					<!-- LOGO IMAGE -->
		 					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
		 					<div class="desktoplogo"><a href="#hero-1" class="logo-black"><img src="{{asset('landing-page/images/logo.png')}}" width="172" height="40" alt="header-logo"></a></div>
		 					<div class="desktoplogo"><a href="#hero-1" class="logo-white"><img src="{{asset('landing-page/images/logo-white.png')}}" width="172" height="40" alt="header-logo"></a></div>

		 					<!-- MAIN MENU -->
							<nav class="wsmenu clearfix">
			  					<ul class="wsmenu-list">
			  						<!-- SIMPLE NAVIGATION LINK -->
								 	<li class="nl-simple" aria-haspopup="true"><a href="javascript:void">HOME</a></li>
								 	<li class="nl-simple" aria-haspopup="true"><a href="javascript:void">AMTV</a></li>
									<li aria-haspopup="true"><a href="javascript:void">PROFIL<span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="javascript:void">Sejarah</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Visi Misi</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Sambutan Kepala Sekolah</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Struktur Organisasi</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Profil Struktural</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Fasilitas Sekolah</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="javascript:void">SIM<span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="javascript:void">Link Eksternal</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="javascript:void">PROGRAM<span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="javascript:void">Ekstrakulikuler</a></li>
											<li aria-haspopup="true"><a href="javascript:void">UKS</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Prestasi Siswa</a></li>
											<li aria-haspopup="true"><a href="javascript:void">Program Unggulan</a></li>
										</ul>
									</li>
									<li class="nl-simple" aria-haspopup="true"><a href="javascript:void">GALERI</a></li>
									<li aria-haspopup="true"><a href="javascript:void">APLIKASI<span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="javascript:void">RDM</a></li>
											<li aria-haspopup="true"><a href="javascript:void">E-Learning</a></li>
										</ul>
									</li>

								 	<!-- DROPDOWN MENU -->
								  	{{-- <li aria-haspopup="true">
										<a href="javascript:void">PROFIL<span class="wsarrow"></span></a>
								  		<div class="wsmegamenu clearfix halfmenu">
											<div class="container-fluid">
												<div class="row">
													<ul class="col-lg-6 col-md-12 col-xs-12 link-list left-link-list">
														<li><a href="about.html">AMTV</a></li>
														<li><a href="categories-list.html">Categories Listing</a></li>
														<li><a href="category-details.html">Category Details</a></li>
														<li><a href="javascript:void">Courses Listing</a></li>
														<li><a href="course-details.html">Course Details</a></li>
														<li><a href="teachers-list.html">Teachers Listing</a></li>
														<li><a href="teacher-profile.html">Teacher Profile</a></li>
													</ul>
													<ul class="col-lg-6 col-md-12 col-xs-12 link-list">
														<li><a href="become-a-teacher.html">Become A Teacher</a></li>
														<li><a href="pricing.html">Pricing Plans Page</a></li>
														<li><a href="reviews.html">Reviews Page</a></li>
														<li><a href="faqs.html">FAQs Page</a></li>
														<li><a href="blog-listing.html">Blog Listing</a></li>
														<li><a href="single-post.html">Single Post</a></li>
														<li><a href="contacts.html">Contacts Page</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li> --}}
									<!-- END DROPDOWN MENU -->

									{{-- <li aria-haspopup="true"><a href="javascript:void">Mega Menu <span class="wsarrow"></span></a>
										<div class="wsmegamenu clearfix">
											<div class="container">
												<div class="row">
													<!-- MEGAMENU QUICK LINKS -->
													<div class="col-md-12 col-lg-3">
														<h3 class="title">Top 5 Online Courses:</h3> <!-- Title -->
														<ul class="link-list clearfix">
															<li><a href="course-details.html">English for Tourism</a></li>
															<li><a href="course-details.html">Python Programming - Working with Lists and Files</a></li>
															<li><a href="course-details.html">Computer Networking - Wired and Wireless Networks</a></li>
															<li><a href="course-details.html">Digital Marketing: The Ultimate Guide to Strategic</a></li>
															<li><a href="course-details.html">The Complete iOS 10 & Swift 3 Developer Course</a></li>	
														</ul>
													</div>
													<!-- END MEGAMENU QUICK LINKS -->

													<!-- MEGAMENU FEATURED NEWS -->
													<div class="col-md-12 col-lg-5">
														<h3 class="title">Featured News:</h3> <!-- Title -->
														<div class="fluid-width-video-wrapper mb-15"><img src="{{asset('landing-page/images/blog/featured-news.jpg')}}" alt="featured-news"></div> <!-- Image -->
														<!-- Text -->
														<h5 class="h5-md">
															<a href="single-post.html">Study smart and save time with these 5 tips</a>
														</h5>
														<p class="wsmwnutxt">
															Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit magna...
														</p>
													</div>
													<!-- END MEGAMENU FEATURED NEWS -->

													<!-- MEGAMENU LATEST NEWS -->
													<div class="col-md-12 col-lg-4">
														<h3 class="title">Latest News:</h3>
														<ul class="latest-news">
															<!-- Post #1 -->
															<li class="clearfix d-flex align-items-center">
																<img class="img-fluid" src="{{asset('landing-page/images/blog/latest-post-1.jpg')}}" alt="blog-post-preview">
																<div class="post-summary">
																	<a href="single-post.html">Etiam sapien risus ante auctor tempus an accumsan...</a>
																	<p>18 hours ago</p>
																</div>
															</li>

															<!-- Post #2 -->
															<li class="clearfix d-flex align-items-center">
																<img class="img-fluid" src="{{asset('landing-page/images/blog/latest-post-2.jpg')}}" alt="blog-post-preview">
																<div class="post-summary">
																	<a href="single-post.html">Blandit tempor sapien ipsum, porta risus auctor justo...</a>
																	<p>Feb 17, 2020</p>
																</div>
															</li>

															<!-- Post #3 -->
															<li class="clearfix d-flex align-items-center">
																<img class="img-fluid" src="{{asset('landing-page/images/blog/latest-post-3.jpg')}}" alt="blog-post-preview">
																<div class="post-summary">
																	<a href="single-post.html">Cursus risus an auctor risus laoreet undo auctor varius...</a>
																	<p>Feb 07, 2020</p>
																</div>
															</li>
														</ul>
													</div>
													<!-- END MEGAMENU LATEST NEWS -->
												</div>
											</div>
										</div>
									</li> --}}
									{{-- <li aria-haspopup="true">
										<a href="javascript:void" class="lang-select">
											<img src="{{asset('landing-page/images/icons/flags/uk.png')}}" alt="flag-icon"> En <span class="wsarrow"></span>
										</a>
										<ul class="sub-menu last-sub-menu">
											<li aria-haspopup="true"><a href="javascript:void"><img src="{{asset('landing-page/images/icons/flags/germany.png')}}" alt="flag-icon"> Deutch</a></li>
											<li aria-haspopup="true"><a href="javascript:void"><img src="{{asset('landing-page/images/icons/flags/spain.png')}}" alt="flag-icon"> Español</a></li>
											<li aria-haspopup="true"><a href="javascript:void"><img src="{{asset('landing-page/images/icons/flags/france.png')}}" alt="flag-icon"> Français</a></li>
											<li aria-haspopup="true"><a href="javascript:void"><img src="{{asset('landing-page/images/icons/flags/italy.png')}}" alt="flag-icon"> Italiano</a></li>
											<li aria-haspopup="true"><a href="javascript:void"><img src="{{asset('landing-page/images/icons/flags/russia.png')}}" alt="flag-icon"> Русский</a></li>
											<li aria-haspopup="true"><a href="javascript:void"><img src="{{asset('landing-page/images/icons/flags/china.png')}}" alt="flag-icon"> 简体中文</a></li>
										</ul>
									</li> --}}

									{{-- <!--HEADER BUTTON  -->
									<li class="nl-simple" aria-haspopup="true">
										<a href="javascript:void" class="btn btn-rose tra-black-hover last-link">Get Started</a>
									</li> --}}
			  					</ul>
			  				</nav>
							<!-- END MAIN MENU -->
						</div>
		 			</div>
					<!-- END NAVIGATION MENU -->
				</div>
				<!-- End header-wrapper -->
			</header>
			<!-- END HEADER -->

			<!-- HERO-1 ============================================= -->
			<section id="hero-1" class="hero-section division">
				<!-- SLIDER -->
				<div class="slider">
				 	<ul class="slides">
						<!-- SLIDE #1 -->
						<li id="slide-1">
							<img src="{{asset('landing-page/images/slider/slide-1.jpg')}}" alt="slide-background"> <!-- Background Image -->
							<!-- Image Caption -->
							<div class="caption d-flex align-items-center left-align">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-lg-7">
											<div class="caption-txt">
												<h2 class="h2-sm">25K+ students trust our online courses</h2> <!-- Title -->
												<!-- Text -->
												<p class="p-lg">
													Feugiat primis ligula gravida auctor egestas augue viverra mauri 
													tortor in iaculis placerat an eugiat mauris ipsum undo viverra tortor gravida 
													purus lorem in tortor a viverr
												</p>
												<a href="#categories-3" class="btn btn-md btn-rose tra-black-hover">View Popular Courses</a> <!-- Button -->
											</div>
										</div>
									</div>
									<!-- End row -->
								</div>
								<!-- End container -->
							</div>
							<!-- End Image Caption -->
						</li>
						<!-- END SLIDE #1 -->

						<!-- SLIDE #2 -->
						<li id="slide-2">
							<img src="{{asset('landing-page/images/slider/slide-2.jpg')}}" alt="slide-background">
			  				<div class="caption d-flex align-items-center right-align">
			  					<div class="container">
									<div class="row">
										<div class="col-md-8 col-lg-7">
											<div class="caption-txt white-color">
												<h2 class="h2-sm">2,769 online courses from the best tutors</h2>
												<form class="hero-form" action="categories-list.html">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="Search">
														<span class="input-group-btn"><button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button></span>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
					  	</li>
						<!-- END SLIDE #2 -->

						<!-- SLIDE #3 -->
						<li id="slide-3">
						  	<img src="{{asset('landing-page/images/slider/slide-3.jpg')}}" alt="slide-background">
							<div class="caption d-flex align-items-center right-align">
			  					<div class="container">
									<div class="row">
										<div class="col-md-8 col-lg-7">
											<div class="caption-txt">
												<h2 class="h2-sm">High quality courses from the leading experts</h2>
												<p class="p-lg">Feugiat primis ligula gravida auctor egestas augue viverra mauri 
													tortor in iaculis placerat an eugiat mauris ipsum undo viverra tortor gravida 
													purus lorem in tortor a viverr
												</p>
												<a href="#courses-4" class="btn btn-md btn-rose tra-black-hover">View Popular Courses</a>
											</div>
							  			</div>
									</div>
									<!-- End row -->
								</div>
								<!-- End container -->
							</div>
							<!-- End Image Caption -->
					  	</li>
						<!-- END SLIDE #3 -->
					</ul>
			  	</div>
				<!-- END SLIDER -->
			</section>
			<!-- END HERO-1 -->	

			<!-- ABOUT-1 ============================================= -->
			<section id="about-1" class="bg-05 about-section division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">
						<!-- ABOUT BOX #1 -->		
						<div class="col-md-4">
							<div class="abox-1 icon-xs">
								<span class="flaticon-004-computer"></span>
								<div class="abox-1-txt">
									<h5 class="h5-md">2,769 online courses</h5>
									<p class="p-md">Explore a variety of fresh topics</p>
								</div>
							</div>
						</div>
						<!-- END ABOUT BOX #1 -->

						<!-- ABOUT BOX #2 -->
						<div class="col-md-4">
							<div class="abox-1 icon-xs">
								<span class="flaticon-028-learning-1"></span>
								<div class="abox-1-txt">
									<h5 class="h5-md">Expert instruction</h5>
									<p class="p-md">Find the right instructor for you</p>
								</div>
							</div>
						</div>
						<!-- END ABOUT BOX #2 -->

						<!-- ABOUT BOX #3 -->
						<div class="col-md-4">
							<div class="abox-1 icon-xs">
								<span class="flaticon-032-tablet"></span>
								<div class="abox-1-txt">
									<h5 class="h5-md">Lifetime access</h5>
									<p class="p-md">Learn on your schedule</p>
								</div>
							</div>
						</div>
						<!-- END ABOUT BOX #3 -->
					</div>
					<!-- End row -->
				</div>
				<!-- End container -->
			</section>
			<!-- End ABOUT-1 -->

			<!-- ABOUT-2 ============================================= -->
			<section id="about-2" class="wide-60 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">
						<!-- ABOUT IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="img-block pc-25 mb-40">
								<img class="img-fluid" src="{{asset('landing-page/images/image-01.png')}}" alt="about-image">
					 		</div>
						</div>

						<!-- ABOUT TEXT -->
					 	<div class="col-md-7 col-lg-6">
					 		<div class="txt-block pc-25 mb-40">
								<h3 class="h3-sm">Transform your life through online education</h3>
								<p>
									An enim nullam tempor sapien gravida donec porta and blandit ipsum enim justo integer velna vitae 
									auctor integer congue magna and purus pretium risus ligula rutrum luctus ultrice 
								</p>
								<ul class="txt-list mb-15">
									<li>Nullam rutrum eget nunc varius etiam mollis risus undo</li>
									<li>Integer congue magna at pretium purus pretium ligula at rutrum risus luctus dolor auctor 
										ipsum blandit purus		
									</li>
									<li>Risus at congue etiam aliquam sapien egestas posuere</li>
									<li>At pretium purus integer congue magna pretium ligula at ipsum blandit purus	rutrum risus 
										luctus dolor auctor 	
									</li>
								</ul>
					 		</div>
					 	</div>
						<!-- END ABOUT TEXT -->
					</div>
					<!-- End row -->
				</div>
			</section>
			<!-- End ABOUT-2 -->

			<!-- COURSES-3 ============================================= -->
			<section id="courses-3" class="bg-lightgrey wide-60 courses-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12">
							<div class="section-title mb-60">
								<h3 class="h3-sm">Most Popular Courses</h3>
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, blandit posuere and ligula varius magna a porta</p>
								<div class="title-btn"><a href="javascript:void" class="btn btn-tra-grey rose-hover">View All Courses</a></div>
							</div>	
						</div>
					</div>

					<!-- COURSES HOLDER -->
					<div class="row courses-grid">
						<!-- COURSE #1 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									<img class="img-fluid" src="{{asset('landing-page/images/courses/course-1-img.jpg')}}" alt="course-preview">
									<div class="cbox-4-txt">
										<p class="course-tags">
											<span>Languages</span>
											<span>English</span>
										</p>
										<h5 class="h5-xs">Beginner Level English - Foundations</h5>
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<span>4.5 (26 Ratings)</span>
										</div>
										<span class="course-price"><span class="old-price">$149.99</span> $138.99</span>
									</div>
								</a>
							</div>
						</div>
						<!-- END COURSE #1 -->

						<!-- COURSE #2 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									<img class="img-fluid" src="{{asset('landing-page/images/courses/course-2-img.jpg')}}" alt="course-preview">
									<div class="cbox-4-txt">
										<p class="course-tags">
											<span>Languages</span>
											<span>English</span>
										</p>
										<h5 class="h5-xs">Diploma in Basic English Grammar - Revised 2019</h5>
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5 (118 Ratings)</span>
										</div>
										<span class="course-price"><span class="old-price">$174.99</span> $59.99</span>
									</div>
								</a>
							</div>
						</div>
						<!-- END COURSE #2 -->

						<!-- COURSE #3 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									<img class="img-fluid" src="{{asset('landing-page/images/courses/course-3-img.jpg')}}" alt="course-preview">
									<div class="cbox-4-txt">
										<p class="course-tags"><span>IT Managment</span></p>
										<h5 class="h5-xs">Diploma in Information Technology Management</h5>
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<span>4.5 (72 Ratings)</span>
										</div>
										<span class="course-price"><span class="old-price">$119.99</span> $34.99</span>
									</div>
								</a>
							</div>
						</div>
						<!-- END COURSE #3 -->

						<!-- COURSE #4 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									<img class="img-fluid" src="{{asset('landing-page/images/courses/course-4-img.jpg')}}" alt="course-preview">
									<div class="cbox-4-txt">
										<p class="course-tags">
											<span>SEO</span>
											<span>Marketing</span>
										</p>
										<h5 class="h5-xs">Google AdWords for Beginners 2020</h5>
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5 (281 Ratings)</span>
										</div>
										<span class="course-price">Free Course</span>
									</div>
								</a>
							</div>
						</div>
						<!-- END COURSE #4 -->
					</div>
					<!-- END COURSES HOLDER -->
				</div>
				<!-- End container -->
			</section>
			<!-- END COURSES-3 -->

			<!-- ABOUT-3 ============================================= -->
			<section id="about-3" class="pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">
						<!-- ABOUT TEXT -->
					 	<div class="col-md-7 col-lg-6">
					 		<div class="txt-block pc-25">
								<h3 class="h3-sm">Learn new personal & professional skills online</h3>
								<p>
									An enim nullam tempor sapien gravida donec porta and blandit ipsum enim justo integer velna vitae 
									auctor integer congue magna and purus pretium risus ligula rutrum luctus ultrice 
								</p>
								<ul class="txt-list mb-15">
									<li>Nullam rutrum eget nunc varius etiam mollis risus undo</li>
									<li>Integer congue magna at pretium purus pretium ligula at rutrum risus luctus dolor auctor ipsum blandit purus</li>
									<li>Risus at congue etiam aliquam sapien egestas posuere</li>
								</ul>
								<a href="categories-list.html" class="btn btn-md btn-rose tra-black-hover">Start Learning Now</a>
					 		</div>
					 	</div>
						<!-- END ABOUT TEXT -->

						<div class="col-md-5 col-lg-6">
							<div class="img-block">
								<img class="img-fluid" src="{{asset('landing-page/images/image-02.png')}}" alt="about-image">
					 		</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End ABOUT-3 -->

			<!-- SERVICES-6 ============================================= -->
			<section id="services-6" class="bg-03 wide-60 services-section division">
				<div class="container white-color">
					<!-- SERVICES TEXT -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 text-center">
							<div class="services-6-txt">
								<h3 class="h3-md">Get Quality Education with eTreeks</h3>
								<p class="p-md">Integer congue magna at pretium purus pretium ligula at rutrum luctus risus eros dolor auctor ipsum blandit luctus purus vehicula magna a tempor laoreet</p>
								<a href="javascript:void" class="btn btn-md btn-rose tra-white-hover">Start Learning Now!</a>
							</div>
						</div>
					</div>
					<!-- END SERVICES TEXT -->

					<!-- SERVICE BOXES -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<div class="row">
								<!-- SERVICE BOX #1 -->
								<div class="sbox-6 icon-xl">
									<span class="flaticon-031-select"></span>
									<h5 class="h5-xs">Trending Courses</h5>
								</div>

								<!-- SERVICE BOX #2 -->
								<div class="sbox-6 icon-xl">
									<span class="flaticon-028-learning-1"></span>
									<h5 class="h5-xs">Certified Teachers</h5>
								</div>

								<!-- SERVICE BOX #3 -->
								<div class="sbox-6 icon-xl">
									<span class="flaticon-006-diploma"></span>
									<h5 class="h5-xs">Graduation Certificate</h5>
								</div>

								<!-- SERVICE BOX #4 -->
								<div class="sbox-6 icon-xl">
									<span class="flaticon-013-elearning-5"></span>
									<h5 class="h5-xs">Online Course Facilities</h5>
								</div>

								<!-- SERVICE BOX #5 -->
								<div class="sbox-6 icon-xl">
									<span class="flaticon-001-book"></span>
									<h5 class="h5-xs">Free Books & Library</h5>
								</div>
							</div>
						</div>
					</div>
					<!-- END SERVICE BOXES -->
				</div>
			</section>
			<!-- End SERVICES-6 -->

			<!-- CATEGORIES-3 ============================================= -->
			<section id="categories-3" class="wide-100 categories-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title mb-60">
								<h3 class="h3-sm">Top Trending Categories</h3>
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, blandit posuere and ligula varius magna a porta</p>
								<div class="title-btn"><a href="categories-list.html" class="btn btn-tra-grey rose-hover">View All Categories</a></div>
							</div>
						</div>
					</div>

					<!-- CATEGORIE BOXES CAROUSEL -->
					<div class="row">
						<div class="col-lg-12">
							<div class="owl-carousel owl-theme owl-loaded categories-carousel">
								<!-- CATEGORIE BOX #1 -->
								<div class="bg-blue c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/development.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Development</h5>
											<p>36 Courses</p>
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #1 -->


								<!-- CATEGORIE BOX #2 -->
								<div class="bg-green c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon">
											<img src="{{asset('landing-page/images/icons/categories/money.png')}}" alt="category-icon">
										</div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Finance</h5>
											<p>28 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #2 -->


								<!-- CATEGORIE BOX #3 -->
								<div class="bg-red c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/chip.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">IT & Software</h5>
											<p>54 Courses</p>
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #3 -->

								<!-- CATEGORIE BOX #4 -->
								<div class="bg-teal c3-box text-center white-color">
									<a href="category-details.html">
										<div class="c3-box-icon">
											<img src="{{asset('landing-page/images/icons/categories/gear.png')}}" alt="category-icon">
										</div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Engineering</h5>
											<p>68 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #4 -->

								<!-- CATEGORIE BOX #5 -->
								<div class="bg-yellow c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"> 
											<img src="{{asset('landing-page/images/icons/categories/science.png')}}" alt="category-icon">
										</div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Science</h5>
										<p>59 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #5 -->

								<!-- CATEGORIE BOX #6 -->
								<div class="bg-violet c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon">
											<img src="{{asset('landing-page/images/icons/categories/marketing.png')}}" alt="category-icon">
										</div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Marketing</h5>
											<p>28 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #6 -->

								<!-- CATEGORIE BOX #7 -->
								<div class="bg-orange c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/translation.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Languages</h5>
											<p>137 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #7 -->

								<!-- CATEGORIE BOX #8 -->
								<div class="bg-lightgreen c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/heartbeat.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Health & Fitness</h5>
											<p>94 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #8 -->

								<!-- CATEGORIE BOX #9 -->
								<div class="bg-skyblue c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/design.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Design & Arts</h5>
											<p>72 Courses</p>
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #9 -->

								<!-- CATEGORIE BOX #10 -->
								<div class="bg-yellow c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon">
											<img src="{{asset('landing-page/images/icons/categories/human-mind')}}.png" alt="category-icon">
										</div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Life Science</h5>
											<p>72 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #10 -->

								<!-- CATEGORIE BOX #11 -->
								<div class="bg-red c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/calculator.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Mathematics</h5>
											<p>63 Courses</p>
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #11 -->

								<!-- CATEGORIE BOX #12 -->
								<div class="bg-olive c3-box text-center icon-md white-color">
									<a href="category-details.html">
										<div class="c3-box-icon"><img src="{{asset('landing-page/images/icons/categories/photo.png')}}" alt="category-icon"></div>
										<div class="cbox-3-txt">
											<h5 class="h5-md">Photography</h5>
											<p>106 Courses</p>	
										</div>
									</a>
								</div>
								<!-- END CATEGORIE BOX #13 -->
							</div>
						</div>
					</div>
					<!-- END CATEGORIE BOXES CAROUSEL -->
				</div>
			</section>
			<!-- END CATEGORIES-3 -->

			<!-- COURSES-5 ============================================= -->
			<section id="courses-5" class="bg-lightgrey courses-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title mb-60">
								<h3 class="h3-sm">Best Online Courses of 2019</h3>
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, blandit posuere and ligula varius magna a porta</p>
							</div>
						</div>
					</div>

					<div class="row">
						<!-- COURSES LIST -->
						<div class="col-lg-6">
							<!-- COURSE #1 -->
							<div class="cbox-5 b-bottom">
								<a href="course-details.html">
									<div class="row">
										<div class="col-sm-7 cbox-5-txt">
											<h5 class="h5-xs">English for Beginners: Intensive English Speaking Course</h5>
											<p class="p-sm grey-color">54 Total Hours - Updated 2/2020</p>
											<div class="course-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="cr-rating">4.89 (331 Reviews)</span>
											</div>
										</div>
										<div class="col-sm-3 cbox-5-data text-center clearfix">
											<p class="grey-color"><i class="fas fa-users"></i> 7348</p>
										</div>
										<div class="col-sm-2 cbox-5-price text-right clearfix">
											<span class="course-price">$34.99</span>
											<span class="old-price">$64.99</span>
										</div>
									</div>
								</a>
							</div>
							<!-- END COURSE #1 -->
						</div>
						<!-- END COURSES LIST -->

						<!-- COURSES LIST -->
						<div class="col-lg-6">
							<!-- COURSE #4 -->
							<div class="cbox-5 b-bottom">
								<a href="course-details.html">
									<div class="row">
										<div class="col-sm-7 cbox-5-txt">
											<h5 class="h5-xs">IT Management - Building Information Systems</h5>
											<p class="p-sm grey-color">48 Total Hours - Updated 2/2020</p>
											<div class="course-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
												<span class="cr-rating">4.08 (264 Reviews)</span>
											</div>
										</div>
										<div class="col-sm-3 cbox-5-data text-center clearfix"><p class="grey-color"><i class="fas fa-users"></i> 15491</p></div>
										<div class="col-sm-2 cbox-5-price text-right clearfix">
											<span class="course-price">$22.99</span>
											<span class="old-price">$44.99</span>
										</div>
									</div>
								</a>
							</div>
							<!-- END COURSE #4 -->
						</div>
						<!-- END COURSES LIST -->
					</div>
					<!-- End row -->
				</div>
				<!-- End container -->
			</section>
			<!-- END COURSES-5 -->

			<!-- TESTIMONIALS-3 ============================================= -->
			<section id="reviews-3" class="bg-01 reviews-section division">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- TESTIMONIAL TEXT -->
							<div class="review-3">
								<div class="quote-ico"><img src="{{asset('landing-page/images/left-quote.png')}}" alt="quote-image"></div>
								<p>
									An enim nullam tempor sapien gravida donec eTreeks - enim ipsum porta justo integer at odio velna and vitae 
									auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus blandit congue 
									magna. Sagittis congue augue egestas volutpat egestas magna consequat posuere nunc, eu porttitor neque 
								</p>
								<div class="review-3-author">
									<div class="tst-rating clearfix">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half-alt"></i>
									</div>
									<h5 class="h5-md">Jennifer S.</h5>	
									<span>Online Student (Public Relations)</span>
								</div>
							</div>
							<!-- END TESTIMONIAL TEXT -->
						</div>
					</div>
					<!-- End row -->
				</div>
				<!-- End container -->
			</section>
			<!-- END TESTIMONIALS-3 -->

			<!-- COURSES-1 ============================================= -->
			<section id="courses-1" class="wide-100 courses-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title mb-60">
								<h3 class="h3-sm">Best Courses of All-Time</h3>
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, blandit posuere and ligula varius magna a porta</p>
								<div class="title-btn">
									<a href="javascript:void" class="btn btn-tra-grey rose-hover">View All Courses</a>
								</div>
							</div>
						</div>
					</div>

					<!-- COURSE BOXES CAROUSEL -->
					<div class="row">
						<div class="col-lg-12">
							<div class="owl-carousel owl-theme owl-loaded courses-carousel">
								<!-- COURSE #1 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-1-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<p class="course-tags">
												<span>Languages</span>
												<span>English</span>
											</p>
											<h5 class="h5-xs">Beginner Level English - Foundations</h5>
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
												<span>4.5 (26 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$149.99</span> $138.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #1 -->

								<!-- COURSE #2 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-2-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<p class="course-tags">
												<span>Languages</span>
												<span>English</span>
											</p>
											<h5 class="h5-xs">Diploma in Basic English Grammar - Revised 2019</h5>
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span>5 (118 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$174.99</span> $59.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #2 -->

								<!-- COURSE #3 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-3-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<p class="course-tags"><span>Network Security</span></p>
											<h5 class="h5-xs">The Complete Cyber Security Course : End Point Protection!</h5>
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
												<span>4.5 (72 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$119.99</span> $34.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #3 -->

								<!-- COURSE #4 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-4-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<p class="course-tags">
												<span>SEO</span>
												<span>Marketing</span>
											</p>
											<h5 class="h5-xs">Google AdWords for Beginners 2020</h5>
											<!-- Course Rating -->
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span>5 (281 Ratings)</span>
											</div>
											<span class="course-price">Free Course</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #4 -->

								<!-- COURSE #5 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-5-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<!-- Course Tags -->
											<p class="course-tags">
												<span>Design</span>
												<span>WordPress</span>
											</p>
											<h5 class="h5-xs">Wordpress for Beginners - Master Wordpress Quickly</h5>
											<!-- Course Rating -->
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span>4.15 (58 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$194.99</span> $62.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #5 -->

								<!-- COURSE #6 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-6-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<!-- Course Tags -->
											<p class="course-tags">
												<span>Sowtware</span>
												<span>Productivity</span>
											</p>
											<h5 class="h5-xs">Excel Essentials: The Complete Excel Series - Level 1 & 2</h5>
											<!-- Course Rating -->
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span>5 (31 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$149.99</span> $45.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #6 -->

								<!-- COURSE #7 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-7-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<!-- Course Tags -->
											<p class="course-tags">
												<span>Web Design</span>
												<span>HTML 5</span>
											</p>
											<h5 class="h5-xs">Landing Page Design & Conversion Rate Optimization 2020</h5>
											<!-- Course Rating -->
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
												<span>4.8 (74 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$109.99</span> $23.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #7 -->

								<!-- COURSE #8 -->
								<div class="cbox-1">
									<a href="course-details.html">
										<img class="img-fluid" src="{{asset('landing-page/images/courses/course-8-img.jpg')}}" alt="course-preview">
										<div class="cbox-1-txt">
											<!-- Course Tags -->
											<p class="course-tags">
												<span>Internet</span>
												<span>Marketing</span>
											</p>
											<h5 class="h5-xs">Instagram Marketing 2020: A Step-By-Step to 10,000 Followers</h5>
											<!-- Course Rating -->
											<div class="course-rating clearfix">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span>5 (374 Ratings)</span>
											</div>
											<span class="course-price"><span class="old-price">$169.99</span> $33.99</span>
										</div>
									</a>
								</div>
								<!-- END COURSE #8 -->
							</div>
						</div>
					</div>
					<!-- END COURSES BOXES CAROUSEL -->
				</div>
			</section>
			<!-- END COURSES-1 -->

			<!-- BANNER-5 ============================================= -->
			<section id="banner-5" class="bg-whitesmoke wide-60 banner-section division">
				<div class="container">
					<div class="row">
						<!-- BANNER TEXT -->
						<div class="col-md-6">
							<div class="banner-5-txt">
								<img src="{{asset('landing-page/images/image-04.png')}}" alt="banner-icon">
								<div class="b5-txt">
									<h4 class="h4-xs">Become a Teacher</h4>
									<p>Feugiat primis ligula a risus auctor egestas an augue mauri and viverra tortor iaculis an eugiat viverra</p>
									<a href="become-a-teacher.html" class="btn btn-rose tra-black-hover">Find Out More</a>
								</div>
							</div>
						</div>
						<!-- END BANNER TEXT -->

						<!-- BANNER TEXT -->
						<div class="col-md-6">
							<div class="banner-5-txt">
								<img src="{{asset('landing-page/images/image-05.png')}}" alt="banner-icon">
								<div class="b5-txt">
									<h4 class="h4-xs">eTreeks for Business</h4>
									<p>Feugiat primis ligula a risus auctor egestas an augue mauri and viverra tortor iaculis an eugiat viverra</p>
									<a href="javascript:void" class="btn btn-rose tra-black-hover">Find Out More</a>
								</div>
							</div>
						</div>
						<!-- END BANNER TEXT -->
					</div>
					<!-- End row -->
				</div>
				<!-- End container -->
			</section>
			<!-- END BANNER-5 -->

			<!-- ABOUT-4 ============================================= -->
			<section id="about-4" class="wide-70 about-section division">
				<div class="container">
					<!-- ABOUT TEXT -->
					<div class="row">
					 	<div class="col-xl-10 offset-xl-1">
					 		<div class="a4-txt">
								<h5 class="h5-xl text-center">Our goal is to make online education work for everyone</h5>
								<p>
									Sagittis congue augue egestas volutpat egestas magna suscipit egestas magna ipsum vitae purus 
									efficitur ipsum primis and cubilia laoreet augue egestas luctus donec diam. Curabitur ac dapibus 
									libero mauris donec ociis and neque. Phasellus blandit tristique justo ut aliquam. Aliquam vitae 
									molestie nunc sapien justo, aliquet non molestie augue tempor sapien
								</p>
							</div>
						</div>
					</div>
					<!-- END ABOUT TEXT -->

					<!-- ABOUT IMAGE -->
					<div class="row">
					 	<div class="col-md-12">
							<div class="img-block">
								<img class="img-fluid" src="{{asset('landing-page/images/image-03.jpg')}}" alt="about-image">
							</div>
						</div>
					</div>

					<!-- ABOUT BOXES -->
					<div class="a4-boxes">
						<div class="row d-flex align-items-center">
							<!-- BOX #1 -->
							<div class="col-md-4">
								<div class="abox-4 icon-sm">
									<span class="flaticon-004-computer"></span>
									<div class="abox-4-txt">
										<h5 class="h5-md">Trusted Content</h5>
										<p>Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
									</div>
								</div>
							</div>
							<!-- END BOX #1 -->

							<!-- BOX #2 -->
							<div class="col-md-4">
								<div class="abox-4 icon-sm">
									<span class="flaticon-028-learning-1"></span>
									<div class="abox-4-txt">
										<h5 class="h5-md">Certified Teachers</h5>
										<p>Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
									</div>
								</div>
							</div>
							<!-- END BOX #2 -->

							<!-- BOX #3 -->
							<div class="col-md-4">
								<div class="abox-4 icon-sm">
									<span class="flaticon-032-tablet"></span>
									<div class="abox-4-txt">
										<h5 class="h5-md">Lifetime Access</h5>
										<p>Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
									</div>
								</div>
							</div>
							<!-- END BOX #3 -->
						</div>
						<!-- End row --> 
					</div>
					<!-- END ABOUT BOXES -->
				</div>
				<!-- End container -->
			</section>
			<!-- End ABOUT-4 -->

			<!-- VIDEO-3 ============================================= -->
			<section id="video-3" class="bg-scroll video-section division">
				<!-- VIDEO TEXT -->
				<div class="bg-scroll video-3-txt division">
					<div class="container white-color">
						<div id="video-3-content" class="row">
							<div class="col-lg-8 offset-lg-2 video-txt text-center">
								<h3 class="h3-md">Find the right instructor for you from over 10,000 teachers</h3>
								<p class="p-lg">Feugiat primis ligula risus auctor laoreet augue egestas</p>
							</div>
						</div>
					</div>
				</div>
				<!-- END VIDEO TEXT -->

				<!-- VIDEO LINK -->
				<div class="video-3-link mb-40 division">
					<div class="container">
						<div class="row">
							<div class="col-md-12 video-link text-center">
								<!-- Change the link HERE!!! -->
								<div class="play-btn play-btn-rose text-center">
									<a class="video-popup3 video-play-button" href="https://www.youtube.com/embed/0gv7OC9L2s8"><span></span></a>
									<img class="img-fluid" src="{{asset('landing-page/images/video-3-img.jpg')}}" alt="video-preview"> <!-- Preview Image -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- VIDEO-3 BRANDS -->
				<div class="video-3-brands division">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<p class="p-md">Trusted by companies of all sizes:</p>
								<!-- Brands Carousel -->
								<div class="owl-carousel brands-carousel">
									<!-- BRAND LOGO IMAGE -->
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-1.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-2.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-3.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-4.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-5.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-6.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-7.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-4.png')}}" alt="brand-logo"></div>
									<div class="brand-logo"><img class="img-fluid" src="{{asset('landing-page/images/brand-5.png')}}" alt="brand-logo"></div>
								</div>
								<!-- Brands Carousel -->
							</div>
							<!-- End col -->
						</div>
						<!-- End row -->
					</div>
					<!-- End container -->
				</div>
				<!-- END VIDEO-3 BRANDS -->
			</section>
			<!-- END VIDEO-3 -->

			<!-- SERVICES-5 ============================================= -->
			<section id="services-5" class="bg-lightgrey wide-60 services-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title title-centered mb-60">
								<h3 class="h3-sm">Best Learning Opportunities</h3>
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, blandit posuere and ligula varius magna a porta</p>
							</div>
						</div>
					</div>

					<div class="row">
						<!-- SERVICE BOX #1 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-5">
								<img class="img-70" src="{{asset('landing-page/images/icons/education.png')}}" alt="service-icon"> <!-- Icon -->
								<div class="sbox-5-txt">
									<h5 class="h5-md">Trending Courses</h5>
									<p class="grey-color">Augue luctus egestas luctus neque purus an ipsum neque dolor primis libero tempus at blandit massa</p>
								</div>
							</div>
						</div>
						<!-- END SERVICE BOX #1 -->

						<!-- SERVICE BOX #2 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-5">
								<img class="img-70" src="{{asset('landing-page/images/icons/presentation.png')}}" alt="service-icon"> <!-- Icon -->
								<div class="sbox-5-txt">
									<h5 class="h5-md">Certified Teachers</h5>
									<p class="grey-color">Augue luctus egestas luctus neque purus an ipsum neque dolor primis libero tempus at blandit massa</p>
								</div>
							</div>
						</div>
						<!-- END SERVICE BOX #2 -->

						<!-- SERVICE BOX #3 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-5">
								<img class="img-70" src="{{asset('landing-page/images/icons/certificate.png')}}" alt="service-icon"><!-- Icon -->
								<div class="sbox-5-txt">
									<h5 class="h5-md">Graduation Certificate</h5>
									<p class="grey-color">Augue luctus egestas luctus neque purus an ipsum neque dolor primis libero tempus at blandit massa</p>
								</div>
							</div>
						</div>
						<!-- END SERVICE BOX #3 -->

						<!-- SERVICE BOX #4 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-5">
								<img class="img-70" src="{{asset('landing-page/images/icons/elearning-1.png')}}" alt="service-icon"> <!-- Icon -->
								<div class="sbox-5-txt">
									<h5 class="h5-md">Online Course Facilities</h5>
									<p class="grey-color">Augue luctus egestas luctus neque purus an ipsum neque dolor primis libero tempus at blandit massa</p>
								</div>
							</div>
						</div>
						<!-- END SERVICE BOX #4 -->

						<!-- SERVICE BOX #5 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-5">
								<img class="img-70" src="{{asset('landing-page/images/icons/reading.png')}}" alt="service-icon"> <!-- Icon -->
								<div class="sbox-5-txt">
									<h5 class="h5-md">Free Books & Library</h5>
									<p class="grey-color">Augue luctus egestas luctus neque purus an ipsum neque dolor primis libero tempus at blandit massa</p>
								</div>
							</div>
						</div>
						<!-- END SERVICE BOX #5 -->

						<!-- SERVICE BOX #6 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-5">
								<img class="img-70" src="{{asset('landing-page/images/icons/bookshelf.png')}}" alt="service-icon">
								<div class="sbox-5-txt">
									<h5 class="h5-md">Free Study Materials</h5>
									<p class="grey-color">Augue luctus egestas luctus neque purus an ipsum neque dolor primis libero tempus at blandit massa</p>
								</div>
							</div>
						</div>
						<!-- END SERVICE BOX #6 -->
					</div>
					<!-- End row -->
				</div>
				<!-- End container -->
			</section>
			<!-- End SERVICES-5 -->

			<!-- NEWS-2 ============================================= -->
			<section id="news-2" class="wide-60 news-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title mb-70">
								<h3 class="h3-sm">Our Stories & Latest News</h3>
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, blandit posuere and ligula varius magna a porta</p>
								<div class="title-btn">
									<a href="blog-listing.html" class="btn btn-tra-grey rose-hover">Read More Stories</a>
								</div>
							</div>
						</div>
					</div>

					<!-- NEWS GRID -->
					<div class="row d-flex align-items-center">
						<!-- ARTICLE #1 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-1" class="article-2 b-right">
								<p class="p-sm">March 11, 2020</p>
								<h5 class="h5-sm"><a href="single-post.html">Integer congue magna at pretium purus pretium</a></h5>
								<p>An enim nullam tempor sapien gravida donec enim blandit ipsum porta justo integer odio velna vitae auctor integer</p>
								<span>By Joel Peterson</span>
							</div>
						</div>
						<!-- END ARTICLE #1 -->

						<!-- ARTICLE #2 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-2" class="article-2 b-right">
								<p class="p-sm">March 04, 2020</p>
								<h5 class="h5-sm"><a href="single-post.html">Congue magna eTreeks purus pretium magnis</a></h5>	
								<p>Donec enim blandit and ipsum porta justo integer odio a velna vitae auctor an integer congue magna at pretium nulla</p>
								<span>By Jennifer K.</span>
							</div>
						</div>
						<!-- END ARTICLE #2 -->

						<!-- ARTICLE #3 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-3" class="article-2 b-right">	
								<p class="p-sm">February 24, 2020</p>
								<h5 class="h5-sm"><a href="single-post.html">8 neque dolor primis a libero tempus blandit</a></h5>	
								<p>Porta justo integer odio velna vitae an auctor integer congue magna at pretium purus ligula rutrum luctus risus ultrice</p>
								<span>By Michael Deal</span>
							</div>
						</div>
						<!-- END ARTICLE #3 -->

						<!-- ARTICLE #4 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-4" class="article-2">
								<p class="p-sm">February 19, 2020</p>
								<h5 class="h5-sm"><a href="single-post.html">Ligula varius magna and porta a laoreet pretium</a></h5>
								<p>Vitae auctor integer a congue magna undo pretium at purus pretium ligula a rutrum luctus risus and ultrice blandit</p>
								<span>By Aaron Wall</span> <!-- Post Author -->
							</div>
						</div>
						<!-- END ARTICLE #4 -->
					</div>
					<!-- END NEWS GRID -->
				</div>
				<!-- End container -->
			</section>
			<!-- END NEWS-2 -->

			<!-- BANNER-3 ============================================= -->
			<section id="banner-3" class="bg-lightdark bg-map banner-section division">
				<div class="container">
					<div class="banner-3-holder bg-lightgrey">
						<div class="row d-flex align-items-center">
							<!-- BANNER IMAGE -->
							<div class="col-lg-8">
								<div class="banner-3-img">
									<img class="img-fluid" src="{{asset('landing-page/images/banner-3-img.jpg')}}" alt="banner-image">
								</div>
							</div>
							<!-- END BANNER IMAGE -->

							<!-- BANNER TEXT -->
							<div class="col-lg-4">
								<div class="banner-3-txt">
									<h4 class="h4-xs">Learn something new every day with <span>eTreeks</span></h4> <!-- Title -->
									<a href="javascript:void" class="btn btn-rose tra-black-hover">Find Out More</a> <!-- Button -->
								</div>
							</div>
							<!-- END BANNER TEXT -->
						</div>
						<!-- End row -->
					</div>
					<!-- End banner-3-holder -->
				</div>
				<!-- End container -->
			</section>
			<!-- END BANNER-3 -->

			<!-- FOOTER-2 ============================================= -->
			<footer id="footer-2" class="footer division">
				<div class="container">
					<!-- FOOTER CONTENT -->
					<div class="row">
						<!-- FOOTER INFO -->
						<div class="col-md-5 col-lg-5 col-xl-4">
							<div class="footer-info mb-40">
								<img src="{{asset('landing-page/images/logo.png')}}" width="172" height="40" alt="footer-logo"> <!-- Footer Logo -->
								<p>Aliquam orci a nullam tempor sapien gravida donec enim ipsum porta justo velna an auctor undo congue magna laoreet augue sapien</p>
							</div>
						</div>

						<!-- FOOTER PRODUCTS LINKS -->
						<div class="col-md-3 col-lg-3 col-xl-2">
							<div class="footer-links mb-40">
								<h5 class="h5-md">Quick Links</h5> <!-- Title -->
								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><a href="about.html">About eTreeks</a></li>
									<li><a href="categories-list.html">Courses Catalog</a></li>
									<li><a href="reviews.html">Our Testimonials</a></li>
									<li><a href="pricing.html">Premium Learning</a></li>
									<li><a href="blog-listing.html">From the Blog</a></li>
								</ul>
							</div>
						</div>


						<!-- FOOTER COMPANY LINKS -->
						<div class="col-md-4 col-lg-4 col-xl-3">
							<div class="footer-links mb-40">
								<h5 class="h5-md">Popular Categories</h5> <!-- Title -->
								<!-- Footer Links -->
								<ul class="clearfix">
									<li><a href="javascript:void">Business English</a></li>
									<li><a href="javascript:void">Software Development</a></li>
									<li><a href="javascript:void">Finance & Accounting</a></li>
									<li><a href="javascript:void">Health and Fitness</a></li>
									<li><a href="javascript:void">Office Productivity</a></li>
								</ul>
							</div>
						</div>

						<!-- FOOTER NEWSLETTER FORM -->
						<div class="col-md-7 col-xl-3">
							<div class="footer-form mb-20">
								<!-- Title -->
								<h5 class="h5-md">Stay in Touch</h5>
								<!-- Newsletter Form Input -->
								<form class="newsletter-form">
									<div class="input-group">
										<input type="email" autocomplete="off" class="form-control" placeholder="Your Email Address" required="" id="s-email">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-rose black-hover">Subscribe</button>
										</span>
									</div>
									<!-- Newsletter Form Notification -->
									<label for="s-email" class="form-notification"></label>
								</form>
							</div>
						</div>	<!-- END FOOTER NEWSLETTER FORM -->
					</div> <!-- END FOOTER CONTENT -->

					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row">
							<!-- FOOTER COPYRIGHT -->
							<div class="col-lg-8">
								<ul class="bottom-footer-list">
									<li><p>&copy; Copyright eTreeks 2020</p></li>
									<li><p><a href="tel:123456789">508.746.9892</a></p></li>
									<li><p class="last-li"><a href="mailto:yourdomain@mail.com">hello@domain.com</a></p></li>
								</ul>
							</div>

							<!-- FOOTER SOCIALS LINKS -->
							<div class="col-lg-4 text-right">
								<ul class="foo-socials text-center clearfix">
									<li><a href="javascript:void" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="javascript:void" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
									<li><a href="javascript:void" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
									<li><a href="javascript:void" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END BOTTOM FOOTER -->
				</div>
				<!-- End container -->
			</footer>
			<!-- END FOOTER-2 -->
		</div>
		<!-- END PAGE CONTENT -->

		<!-- EXTERNAL SCRIPTS ============================================= -->
		<script src="{{asset('landing-page/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('landing-page/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('landing-page/js/modernizr.custom.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.easing.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.appear.js')}}"></script>
		<script src="{{asset('landing-page/js/menu.js')}}"></script>
		<script src="{{asset('landing-page/js/materialize.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.countdown.min.js')}}"></script>
		<script src="{{asset('landing-page/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('landing-page/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.flexslider.js')}}"></script>
		<script src="{{asset('landing-page/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('landing-page/js/register-form.js')}}"></script>
		<script src="{{asset('landing-page/js/comment-form.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('landing-page/js/jquery.ajaxchimp.min.js')}}"></script>

		<script src="{{asset('landing-page/js/custom.js')}}"></script> <!-- Custom Script -->
	</body>
</html>	