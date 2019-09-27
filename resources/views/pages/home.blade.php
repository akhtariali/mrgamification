@php
    use App\Post;
@endphp

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
				<a href="/contactus"
					class="primary-btn red text-uppercase mb-3">FREE Gamification Advice</a>
				<div class="col-lg-12"></div>
				<a href="/contactus"
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
							<a href="/contactus"
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
							<a href="/contactus"
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
							<a href="/contactus"
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
			<a href="/categories/workplace_gamification" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Workplace Gamification</h2>
				</div>

				<img src="https://images.unsplash.com/photo-1516681859000-292df1ed3e83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/ux_design" class="col-lg-4 type">
				<div class="overlay-effect red-overlay">
					<h2>User Experience</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1460066122679-741dd6c4ad37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/gamified_apps" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Gamified Apps</h2>
				</div>
				<img src="https://cdn.thewirecutter.com/wp-content/uploads/2019/07/500-laptops-2019-lowres-6391-570x380.jpg"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/gamification_in_education" class="col-lg-4 type">
				<div class="overlay-effect">
					<h2>Gamification in Education</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1504169448388-60f322bebb2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/lifestyle_gamification" class="col-lg-4 type">
				<div class="overlay-effect red-overlay">
					<h2>Lifestyle Gamification</h2>
				</div>
				<img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
					alt="" class="img img-fluid">
			</a>
			<a href="/categories/marketing_campaigns" class="col-lg-4 type">
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
				<h2>Mr. Gamification Has Worked With</h2>
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
					<img src="http://matris.ir/en/wp-content/uploads/2016/01/401-1024x722.png"
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
				<div class="col-4 col-md-2">
					<img src="http://webs.ce.sharif.edu/~eetesami/wp-content/uploads/cropped-sharif-logo.png" class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-lg-12 text-center" style='margin-top: 150px;'>
					<h2>Mr. Gamification Has Speaked At</h2>
				</div>
				<div class="col-4 col-md-2">
					<img src="https://www.irangi.org/uploads/images/4_1560089256_1291127534.png"
						class="client-logo img-responsive img-fluid" style='width: 80%;'>
				</div>
				<div class="col-4 col-md-2">
					<img src="https://www.iau-hesd.net/sites/default/files/styles/univ_205/public/universites/tums_signature_variation_1_blue.png?itok=lkP9rmMC"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/2a/Imam_Sadiq_University.svg/1200px-Imam_Sadiq_University.svg.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://pgc2019.shahroodut.ac.ir/files_site/sponsorfn_pic/r_29_180615142152.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://ut.ac.ir/images/www/en/website/site-logo/2018/1518613180-ut-en.png"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://mgou.ru/wp-content/uploads/2018/03/1.jpg-347x350.png"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://www.tt.th-koeln.de/cnrd-network/files/2017/12/uni.png"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://i1.rgstatic.net/ii/institution.image/AS%3A267466503065610%401440780391994_l"
						class="client-logo img-responsive img-fluid">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://nopahub.com/storage/cache/Fit_200_auto/ecosystem/axell1.png"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="https://photos.prnewswire.com/prnfull/20160428/361090LOGO"
						class="client-logo img-responsive img-fluid" style="width: 80%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://en.um.ac.ir/content/themes/EngNewTheme/images/footer-logo.png"
						class="client-logo img-responsive img-fluid" style="width: 95%;">
				</div>
				<div class="col-4 col-md-2">
					<img src="http://skstp.ir/files/centers/cn25/skstp_enlogo129.png"
						class="client-logo img-responsive img-fluid" style="width: 85%;">
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
<section class="blog-area pt-80 pb-80">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-40 col-lg-8">
				<div class="title text-center">
					<h2 class="mb-10">Mr. Gamification Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@php
					$blogLatestPosts = Post::all()->take(4);
			@endphp
			@foreach ($blogLatestPosts as $post)
				<div class="col-lg-3 col-6 single-blog">
					<div class="thumb">
						<img class="img-fluid"
							src="{{'/storage/images/'.$post->cover_image}}"
							alt="">
					</div>
					<p class="date">{{date('Y M d', strtotime($post->created_at))}}</p>
					<a href="{{'blog/'.$post->url}}">
						<h4>{{$post->title}}</h4>
					</a>
				</div>
			@endforeach
			<div class="col-lg-12 d-flex justify-content-center mt-4">
				<a href="/blog" class="primary-btn btn-sm read-more text-uppercase"><strong>Read More</strong></a>
			</div>
		</div>
	</div>
</section>
<!-- END BLOG AREA -->

<!-- START HIRE AREA -->
<section class="hire-area pt-50 pb-50">
	<div class="overlay-effect"></div>
	<div class="container">
		<div class="row d-flex justify-content-center flex-wrap">
			<h2 class="text-center">"Games Help us do Serious Things Better."</h2>
			<div class="col-lg-12"></div>
			<p id="quote-auth" class="mt-2">-Daniel Debow</p>
			<div class="col-lg-12"></div>
			<h2 class="better mt-3 mb-3">Do Better.</h2>
			<div class="col-lg-12"></div>
			<a href="/contactus"
				class="primary-btn btn-sm text-uppercase d-flex align-items-center hire-btn"> <strong>Hire Us
					Now</strong></a>
			<div class="col-lg-12 btn-br"></div>
			<a href="/contactus"
				class="primary-btn btn-sm red text-uppercase d-flex align-items-center m-2 m-sm-0"><strong>FREE
					Gamification Advice</strong></a>
		</div>
	</div>
</section>
<!-- END HIRE AREA -->
@endsection

