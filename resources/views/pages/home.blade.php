
@extends('layouts.app')
<head>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>


@section('title', 'Gamification Agency')
@section('main-content')
<!-- BANNER AREA -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-8">
				<h1 class="text-white">
					MR. GAMIFICATION
				</h1>
				<p class="pt-20 pb-20 text-white">
					With more than 3 years experience in gamification field, Mr. Gamification designs and develops
					creative
					experiences to increase engagement rate, customer loyalty, brand awareness, conversion rate, or
					improve
					sales.
				</p>
				<a href="/hire"
					class="primary-btn red text-uppercase mb-3">FREE Gamification Advice</a>
				<div class="col-lg-12"></div>
				<a href="/hire"
					class="primary-btn text-uppercase">Hire
					Us</a>
				<div class="col-lg-12"></div>

			</div>
			<div class="bounce">
				<a href="#quote">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
		</div>

	</div>
</section>
<!-- END BANNER AREA -->

<!-- START QUOTE AREA -->
<section class="quote-area section-gap mt-50 mb-50" id='quote'>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 quote-left">
				<h2>
					<span>Games</span> are the new <br>
					<span>normal</span>.
					<br>
					<span id="author"> - Al Gore</span>
				</h2>
			</div>
			<div class="col-lg-6 quote-right">
				<p>
					<strong>Gamification</strong>, or the act of making something game-like, is the combination of
					UX design,
					game
					design, behavioral
					design, and neuropsychology.
					Successful gamified experiences usually increase <strong>the engagement rate, customer loyalty,
						or
						conversion
						rate</strong> .
					Generally, gamification designers want to motivate the users to commit a list of desired
					actions.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- End QUOTE AREA -->

<!-- START SERVICES AREA -->
<section class="service-area pb-100" id="about">
	<div class="container">
		<h2 class="pb-5">Mr. Gamification is a Combination of</h2>
		<div class="row d-flex justify-content-center flex-wrap">
			<div class="col-lg-4 col-sm-9 col-11 d-flex align-items-stretch flex-wrap justify-content-center">
				<div class="single-service d-flex justify-content-center flex-wrap">
					<i class="fas fa-chess-knight"></i>
					<div class="col-lg-12"></div>
					<h4>Game Design</h4>
					<p>
						Game design is the art of applying design and aesthetics to create a game for entertainment
						or for educational,
						exercise, or other purposes.
					</p>
					<div class="overlay">
						<div class="text">
							<p>
								Mr. Gamification team has years of experience in designing games and gamifying
								serious experiences. We designed and
								developed various mobile games, alternate reality games, board games, and gamified
								experiences. </p>
							<a href="/hire"
								class="text-uppercase red skills primary-btn">Hire Us</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-9 col-11 d-flex align-items-stretch justify-content-center">
				<div class="single-service d-flex justify-content-center flex-wrap">
					<i class="fas fa-brain"></i>
					<div class="col-lg-12"></div>
					<h4>Behavioral Sciences</h4>
					<p>
						Behavioral science, any of various disciplines dealing with the subject of human actions,
						explores the cognitive processes within humans and the behavioural
						interactions
						between
						them.
					</p>
					<div class="overlay">
						<div class="text">
							<p>
								Mr. Gamification team includes psychology graduates who deeply understand user and
								employee motivations. We also have a
								decent experience in designing for behavior change in different contexts, including
								healthcare and urban management. </p>
							<a href="/hire"
								class="text-uppercase red skills primary-btn">Hire Us</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-9 col-11 d-flex align-items-stretch justify-content-center">
				<div class="single-service d-flex justify-content-center flex-wrap">
					<i class="fas fa-desktop"></i>
					<div class="col-lg-12"></div>
					<h4>Technology</h4>
					<p>
						Web or mobile application development is the process of creating a program or a set
						of
						programs to perform the different
						tasks that a business requires.
					</p>
					<div class="overlay">
						<div class="text">
							<p>
								A great development team complements Mr. Gamification's design team. Mr.
								Gamification developers are masters of on the edge technologies and develop modern
								web and mobile applications. </p>
							<a href="/hire"
								class="text-uppercase red skills primary-btn">Hire Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SERVICED AREA -->


<!-- START SOLUTION TYPES AREA -->
<section class="exibition-area section-gap" id="exhibitions">
	<div class="container">
		<div class="row d-flex justify-content-around">
			<div class="menu-content pb-20 col-lg-10">
				<div class="title text-center">
					<h2 class="mb-10">Mr. Gamification Solution Types</h2>
				</div>
			</div>
			<a href="/categories/workplace" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Workplace Gamification</h2>
				</div>

				<img src="https://images.unsplash.com/photo-1516681859000-292df1ed3e83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/UX" class="col-lg-4 type">
				<div class="overlay-effect red-overlay">
					<h2>User Experience</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1460066122679-741dd6c4ad37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/app" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Gamified Apps</h2>
				</div>
				<img src="https://cdn.thewirecutter.com/wp-content/uploads/2019/07/500-laptops-2019-lowres-6391-570x380.jpg"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/education" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Gamification in Education</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1504169448388-60f322bebb2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/lifestyle" class="col-lg-4 type">
				<div class="overlay-effect red-overlay">
					<h2>Lifestyle Gamification</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/marketing" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Marketing Campaigns</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1517816428104-797678c7cf0c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
		</div>
	</div>
</section>
<!-- END SOLUTION TYPES AREA -->
<!-- START CLIENTS AREA -->
<section class="clients-area section-gap" id="events">
	<div class="container">
		<div class="row justify-content-center mb-50">
			<div class="col-lg-10 text-center">
				<h2>Mr. Gamification Clients</h2>
			</div>
			<div class="clients d-flex justify-content-center flex-wrap px-5">
				<div class="col-4 col-md-2">
					<img src="http://storage.ictstartups.ir/images/1aec8745-7c72-45a8-9c46-6fec4230c8ff.jpg"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Unilever.svg/1200px-Unilever.svg.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://miladtower.tehran.ir/Portals/0/Images/Borj-Milad-Tehran-Logo.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/IRIB_TV2_logo.svg/1200px-IRIB_TV2_logo.svg.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://upload.wikimedia.org/wikipedia/en/d/db/Mofid_Securities_Logo.png"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="data:image/png;base64,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"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://akhbarrasmi.com/Content/files/f43dfb654aed49228bdd897794e15a17/73e951cd364d41498a9a18f2ca546537.jpeg"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://s.cafebazaar.ir/1/upload/icons/ir.hamkelasi.app.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://www.tarafdari.com/sites/all/modules/firebase/images/logo.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://way2pay.ir/wp-content/uploads/Dokme-Logo-JPG-Way2pay-96-12-03.jpg"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://s.cafebazaar.ir/1/icons/com.projects.bahartel.simsoot_512x512.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://appreview.ir/uploads/ir.barmanrayan.tikkaa.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/%D9%84%D9%88%DA%AF%D9%88_%D8%B4%D9%87%D8%B1%D8%AF%D8%A7%D8%B1%DB%8C_%D8%AA%D9%87%D8%B1%D8%A7%D9%86.svg/600px-%D9%84%D9%88%DA%AF%D9%88_%D8%B4%D9%87%D8%B1%D8%AF%D8%A7%D8%B1%DB%8C_%D8%AA%D9%87%D8%B1%D8%A7%D9%86.svg.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://files.namnak.com/users/fn/aup/201812/353_pics/%D9%87%D9%85%D8%B1%D8%A7%D9%87-%D8%A8%D8%A7%D9%86%DA%A9-%D9%85%D9%84%D8%AA.jpg"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://www.irangi.org/uploads/images/4_1560089256_1291127534.png"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://storage.irantalent.com/employer-logo/employer_logo_8135_200117.jpeg"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://www.specchioeconomico.com/images/Cooperacy_logo_Specchio_Economico.jpeg"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="./images/Northern13.png" class="client-logo img-responsive img-fluid">
				</div>

			</div>
		</div>
	</div>
</section>
<!-- END CLIENTS AREA -->

<!-- START PROJECTS AREA -->
<section class="gallery-area section-gap" id="events">
	<div class="container">
		<div class="row justify-content-center mb-50">
			<div class="col-lg-10 text-center">
				<h2>Mr. Gamification Latest Projects</h2>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-md-3 col-sm-6 d-flex justify-content-center text-center flex-wrap">
				<figure class="snip1104 orange">
					<img src="https://s.cafebazaar.ir/1/upload/screenshot/com.tarafdari.news-821716119619.jpg"
						alt="sample33" />
					<figcaption class="d-flex justify-content-center align-items-center">
						<h2>Tarafdari App</h2>
					</figcaption>
					<a href="/solutions"></a>
				</figure>
				<div class="col-lg-12"></div>
				<p class="client">Client </p>
				<div class="col-lg-12"></div>
				<a class="client-name" href='https://www.tarafdari.com/'>Tarafdari Website</a>
			</div>
			<div class="col-md-5 col-sm-6 d-flex justify-content-center text-center flex-wrap mt-5 mt-sm-0">
				<figure class="snip1104 red"><img
						src="http://serviceiran.ca/wp-content/uploads/2018/01/Tehran-Wallpaper-HD-1024x788.jpg"
						alt="sample34" />
					<figcaption class="d-flex justify-content-center align-items-center">
						<h2 style="width: 70%;">The Ultimate Forerunner</h2>
					</figcaption>
					<a href="/solutions"></a>
				</figure>
				<div class="col-lg-12"></div>
				<p class="client">Client </p>
				<div class="col-lg-12"></div>
				<a class="client-name" href='http://en.tehran.ir/'> Tehran Municipality</a>
			</div>
			<div class="col-md-3 col-sm-6 d-flex justify-content-center text-center flex-wrap mt-5 mt-md-0">
				<figure class="snip1104 orange"><img
						src="https://images.unsplash.com/photo-1534723328310-e82dad3ee43f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=976&q=80"
						alt="sample35" />
					<figcaption class="d-flex justify-content-center align-items-center">
						<h2>Robokids</h2>
					</figcaption>
					<a href="/solutions"></a>
				</figure>
				<div class="col-lg-12"></div>
				<p class="client">Client </p>
				<div class="col-lg-12"></div>
				<a class="client-name" href="http://aut.ac.ir/aut/"> Amir Kabir University</a>
			</div>
			<div class="col-md-3 col-sm-6 d-flex justify-content-center text-center flex-wrap mt-5">
				<figure class="snip1104 orange"><img
						src="https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80"
						alt="sample35" />
					<figcaption class="d-flex justify-content-center align-items-center">
						<h2>Kharazmi Interactive Course</h2>
					</figcaption>
					<a href="/solutions"></a>
				</figure>
				<div class="col-lg-12"></div>
				<p class="client">Client </p>
				<div class="col-lg-12"></div>
				<a class="client-name" href="http://old.emofid.com/en/about-mofid/">Kharazmi Investment
					Advisory</a>
			</div>
			<div class="col-md-5 col-sm-6 d-flex justify-content-center text-center flex-wrap mt-5">
				<figure class="snip1104 red"><img
						src="https://images.unsplash.com/photo-1528750997573-59b89d56f4f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1466&q=80"
						alt="sample34" />
					<figcaption class="d-flex justify-content-center align-items-center">
						<h2 style="width: 70%;">Pemina Campaign</h2>
					</figcaption>
					<a href="/solutions"></a>
				</figure>
				<div class="col-lg-12"></div>
				<p class="client">Client </p>
				<div class="col-lg-12"></div>
				<a class="client-name" href='http://www.kalleh.com/fa'> Kalleh Dairy </a>
			</div>
			<div class="col-md-3 col-sm-6 d-flex justify-content-center text-center flex-wrap mt-5">
				<figure class="snip1104 orange"><img
						src="https://images.unsplash.com/photo-1524117074681-31bd4de22ad3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1100&q=80"
						alt="sample35" />
					<figcaption class="d-flex justify-content-center align-items-center">
						<h2>Lovemoji</h2>
					</figcaption>
					<a href="/solutions"></a>
				</figure>
				<div class="col-lg-12"></div>
				<p class="client">Client </p>
				<div class="col-lg-12"></div>
				<a class="client-name" href="https://lovemoji.com">Lovemoji</a>
			</div>
		</div>
	</div>
</section>
<!-- END PROJECTS AREA -->

<!-- START BLOG AREA -->
<section class="blog-area pt-80 pb-80" id="blog">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-40 col-lg-8">
				<div class="title text-center">
					<h2 class="mb-10">Mr. Gamification Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-6 single-blog">
				<div class="thumb">
					<img class="img-fluid"
						src="https://images.unsplash.com/photo-1522069213448-443a614da9b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80"
						alt="">
				</div>
				<p class="date">10 Jan 2018</p>
				<a href="#">
					<h4>Best Gamification Examples</h4>
				</a>
			</div>
			<div class="col-lg-3 col-6 single-blog">
				<div class="thumb">
					<img class="img-fluid"
						src="https://images.unsplash.com/photo-1493217465235-252dd9c0d632?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
						alt="">
				</div>
				<p class="date">10 Jan 2018</p>
				<a href="#">
					<h4>Best Gamification Examples</h4>
				</a>
			</div>
			<div class="col-lg-3 col-6 single-blog">
				<div class="thumb">
					<img class="img-fluid"
						src="https://images.unsplash.com/photo-1517164850305-99a3e65bb47e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
						alt="">
				</div>
				<p class="date">10 Jan 2018</p>
				<a href="#">
					<h4>Best Gamification Examples
					</h4>
				</a>
			</div>
			<div class="col-lg-3 col-6 single-blog">
				<div class="thumb">
					<img class="img-fluid"
						src="https://images.unsplash.com/photo-1469032923574-4f1413034019?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
						alt="">
				</div>
				<p class="date">10 Jan 2018</p>
				<a href="#">
					<h4>Best Gamification Examples</h4>
				</a>
			</div>
			<div class="col-lg-12 d-flex justify-content-center mt-4">
				<a href="#" class="primary-btn btn-sm read-more text-uppercase"><strong>Read More</strong></a>
			</div>
		</div>
	</div>
</section>
<!-- END BLOG AREA -->

<!-- START HIRE AREA -->
<section class="hire-area pt-50 pb-50" id="blog">
	<div class="overlay-effect"></div>
	<div class="container">
		<div class="row d-flex justify-content-center flex-wrap">
			<h2 class="text-center">"Games Help us do Serious Things Better."</h2>
			<div class="col-lg-12"></div>
			<p id="quote-auth" class="mt-2">-Daniel Debow</p>
			<div class="col-lg-12"></div>
			<h2 class="better mt-3 mb-3">Do Better.</h2>
			<div class="col-lg-12"></div>
			<a href="/hire"
				class="primary-btn btn-sm text-uppercase d-flex align-items-center hire-btn"> <strong>Hire Us
					Now</strong></a>
			<div class="col-lg-12 btn-br"></div>
			<a href="/hire"
				class="primary-btn btn-sm red text-uppercase d-flex align-items-center m-2 m-sm-0"><strong>FREE
					Gamification Advice</strong></a>
		</div>
	</div>
</section>
<!-- END HIRE AREA -->
@endsection

