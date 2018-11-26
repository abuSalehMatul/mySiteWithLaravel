<!DOCTYPE html>

<html lang="en-US"  class="loading-site no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	
	<script>
		document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
	</script>
	<script>
			(function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement);
	</script>
	<link rel="icon" type="image/ico" href="img/logo.png" />
	<title> Abu Saleh Matul </title>
	
    <!-- CSS links -->
    <link rel="stylesheet" href="{{asset('css/allFromOther.css')}}" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" />
	<link rel="stylesheet" href="{{asset('css/atvImg.css')}}" />
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" />
	<link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" />
	<link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('css/loading-bar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/colors/color-ctrl.css')}}" />
    <link rel="stylesheet" href="{{asset('css/mainFromOther.css')}}" />
    <link rel="stylesheet" href="{{asset('css/darkFromOther.css')}}" />
    <link rel="stylesheet" href="{{asset('css/themeFromOther.css')}}" />
        
	
	<link id="color" rel="stylesheet" href="{{asset('css/colors/original-red.css')}}">
	<script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

</head>


<body class="overhide">
	
	 


	<!-- ===== Start Navigation Bar ===== -->
	<nav id="nav" class="navbar custom-navbar navbar-fixed-top">
		<div class="container">
	<?php
	    $name=Session::get('name');
	    $ip=Session::get('ip');
	    $account=Session::get('email');
	    if($account!=null){ ?>
      <div >
		<h4 style="color:rgb(35, 200, 17)"><b>Your message has been sent.</b></h4>
	    <h6 style="color:rgb(242, 7, 77)">Dear <strong style="color:rgb(8, 216, 60)">{{$name}}</strong> <br>
	    ip:<i style="color:whitesmoke">{{$ip}}</i> <br>
		We have received your message with attention. You will get an automatted reply message on the account <i>{{$account}}</i><br></h6>
		<h4>Thank you for being with us.</h4>
			 
	  </div>
	   <?php  Session::flush(); }
      
	 else if($errors->any()) {
		 ?>
	  <div>
		<h3 class="text-danger ">Error!!!!</h3><br>
		<h2 class="text-info">It seems you didnot fill up the form correctly, Please give valid information..</h2>
	  </div>
     
		
		 
	 <?php } 
	 
	?>

			<!-- NAVBAR HEADER -->
			<div class="navbar-header">
				
				<!-- lOGO TEXT HERE -->
				<a href="{{URL::to('/')}}" class="navbar-brand"><span class="pirana-p">M</span>tech</a>
			</div>
			<!-- NAVIGATION LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="active smoothScroll">Home</a></li>
					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="#services" class="smoothScroll">Services</a></li>
					<li><a href="#portfolio" class="smoothScroll">Protfolio</a></li>
					<li><a href="#testimonials" class="smoothScroll">Projects</a></li>
					<li><a href="#blog" class="smoothScroll">Blog</a></li>
					<li><a href="#contact" class="smoothScroll">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- ===== End Navigation Bar ===== -->

	<!-- ===== Start Main Section ===== -->
<section id="home" class="jarallax" style="background-image:url('img/desk-1220052_1920.jpg')">
		<div class="overlay">
			<div class="container">
				<div class="table">
					<div class="table-cell">
						<div class="container">
							<h3 class="no-margin-top">Hello there. I'm <strong> Abu Saleh Matul</strong></h3>
							<h4 class="subtitle inline-block margin-right">Computer and Telecommunication Engineer. Also a professional WEB Developer/Designer/Consultant </h4>
						</div>
						<div class="container">
							<a href="#contact" class="simple-button smoothScroll"><span class="fa fa-envelope">&nbsp;</span> Contact Me </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===== End Main Section ===== -->

	<!-- ===== Start About Section ===== -->
<!-- ===== Start About Section ===== -->
	<section id="about">
		<div class="container wow fadeInUp" data-wow-delay="0.4s">
			<div class="row">
				<div class="col-md-4">
					<div class="profile-img">
						<img class="img-responsive" alt="profile-img" src="img/me.jpg" />
						<!-- Profile Image -->
					</div>
				</div>
				<div class="col-md-8">
					<div class="about-info">
						<h2><span>Hello I'm </span><strong class="pirana-p">Abu Saleh Matul</strong></h2>
						<!-- Edit -->
						<h4 class="about-subtitle">Computer and Telecommunication Engineer</h4>
						<p>
                            I'm Abu Saleh Matul.An Engineer and students of computer science and Telecommunication.It's always been a fantasy to me to play with my computer keyboard.
                             I can be handy for creative 
							<!-- Edit -->
                            web Design And web Development With having 3 Years of Experience.I also give technical support to various
                            computer and IT(Information and technology) related problem. I can help to Design and build Your Website with multidisciplinary intellectual feature.
						    Web security and Database maintainage was my academic subject and a point of curiosity since a long time. These days the world is running in online . This internet era could be better for you with me .. 
						</p>
						<div class="info">
							<div class="col-md-6 no-padding-left">
								<ul>
									<li>
										<p class="info-title">Age </p>
										<span class="info-details"> 24</span>
										<!-- Edit -->
									</li>
									<li>
										<p class="info-title">Address </p>
										<span class="info-details"> Dhaka , Bangladesh</span>
										<!-- Edit -->
									</li>
									<li>
										<p class="info-title">Email </p>
										<span class="info-details"> salehmatul@gmail.com</span>
										<!-- Edit -->
									</li>
								</ul>
							</div>
							<div class="col-md-6 no-padding-left">
								<ul>
									<li>
										<p class="info-title">Phone </p>
										<span class="info-details"> +8801688733087,+8801768042764</span>
										<!-- Editr -->
									</li>
									<li>
										<p class="info-title">Website </p>
										<span class="info-details"><a href="http://salehmatul.com/" target="_blank"> www.salehmatul.com</a></span>
										<!-- Edit -->
									</li>
									<li>
										<p class="info-title">Country </p>
										<span class="info-details"> Bangladesh</span>
										<!-- Edit -->
									</li>
								</ul>
							</div>
							<div class="col-md-12 no-padding-left">
								<ul>
									<li class="social-media">
										<p class="info-title">Social Links</p>
									</li>
									<li class="social-media icons">
										<a href="https://www.facebook.com/abusaleh.matul22" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://facebook.com/yourname" -->
									<li class="social-media icons">
										<a href="https://twitter.com/matulsaleh" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://twitter.com/yourname" -->
									<li class="social-media icons">
										<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://google.com/yourname" -->
									<li class="social-media icons">
										<a href="https://www.linkedin.com/in/abu-saleh-matul-64628a176/" target="_blank"><i class="fa fa-linkedin"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://flinkedin.com/yourname" -->
									<li class="social-media icons">
										<a href="https://www.instagram.com/salehmatul/" target="_blank"><i class="fa fa-instagram"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://instagram.com/yourname" -->
									
									<li class="social-media icons">
										<a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
									</li>
									<li class="social-media icons reversed">
										<a href="downloads/cv.html"><i class="fa fa-download"></i> Download CV</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===== End About Section ===== -->
	<!-- ===== Start Services section ===== -->
    
            <!--start section skills-->
        <section id="services" class="skills text-center ">
            <!--start container-->
            <div class="container text-success">
                <span class="h-span"><span class="pirana-p">What I Know</span></span>
                <h2 class="h1 "  style="color:rgb(133,202,133)">
                    My skills
                    <span class="underline">
                        <span class="r-square"></span>
                        <span class="l-square"></span>
                    </span>
                </h2>
                <span class="sk-header">Main Skills</span>
                <!--start row-->
                <div class="row">
                    <!--start col(1)-->
                    <div class="col-lg-6 text-left">
                        <!--start progress-->
                        <div class="bar margin-sp " data-value="0.65" id="container0"><span style="color:rgb(133,22,133)" >HTML</span></div>
                        <div class="bar margin-sp" data-value="0.7" id="container1"><span  style="color:rgb(133,22,133)">CSS</span></div>
                        <div class="bar margin-sp" data-value="0.9" id="container2"><span  style="color:rgb(133,22,133)">Javascript</span></div>
                        <!--end progress-->
                    </div>
                    <!--end col(1)-->
                    
                    <!--start col(2)-->
                    <div class="col-lg-6 text-left">
                        <!--start progress-->
                        <div class="bar margin-sp" data-value="0.85" id="container3"><span  style="color:rgb(133,22,133)">Jquery</span></div>
                        <div class="bar margin-sp" data-value="0.69" id="container4"><span  style="color:rgb(133,22,133)">Bootstrap</span></div>
                        <div class="bar margin-sp" data-value="0.75" id="container5"><span  style="color:rgb(133,22,133)">PHP</span></div>
                        <!--end progress-->
                    </div>
                    <!--end col(2)-->
                    
                </div>
                <!--end row-->
               
               
               
            </div>
            <!--end container-->
        </section>
        <!--end section skills-->
        
    

	<!-- ===== End Services Section ===== -->


	<!-- ===== Start Portfolio Section ===== -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<h3 class="dark text-center">My <strong class="pirana-p">Awesome</strong> Work</h3>
				<p class="text-center subtitle">
					Some of my previous Awesome work.
					<!-- Edit -->
				</p>
			</div>
			<!-- Filter -->
			<div class="folio-filter text-center">
				<!-- category of work reserved for future work -->
			</div>
			<div class="row margin-top wow fadeInUp" data-wow-delay=".5s">
				<!-- Begin Gallery -->
				<ul class="folio-list folio-items">
					<!-- Project 1 -->
					<li class="col-md-4 col-sm-6 col-xs-12 item apps">
						<h4 style="color:rgb(12, 146, 173)">E-commerce Development</h4>
						<a class="lightbox" href="img/portfolio/ecommerce2.png">
							<div class="atvImg">
								<img src="img/portfolio/ecommerce2.png" class="img-responsive" alt="portfolio">

								<div class="atvImg-layer" data-img="img/portfolio/ecommerce2.png"></div>
							</div>
						</a>
						<a href="https://github.com/abuSalehMatul/laravel-ecommerce" target="_blank" class="btn btn-default">Github Link</a>
					</li>

					<!-- Project 2 -->
					<li class="col-md-4 col-sm-6 col-xs-12 item design development">
						<h4 style="color:rgb(12, 146, 173)">Blog site Development</h4>
						<a class="lightbox" href="img/portfolio/Blogs-creation2.jpg">
							<div class="atvImg">
								<img src="img/portfolio/Blogs-creation2.jpg" class="img-responsive" alt="portfolio">
								<div class="atvImg-layer" data-img="img/portfolio/Blogs-creation2.jpg"></div>
							</div>
						</a>
						<a href="https://github.com/abuSalehMatul/scratch_laravel" target="_blank" class="btn btn-default">Github Link</a>
					</li>

					<!-- Project 3 -->
					<li class="col-md-4 col-sm-6 col-xs-12 item design">
						<h4 style="color:rgb(12, 146, 173)">Responsive Web design</h4>
						<a class="lightbox" href="img/portfolio/Responsive-Web-Design2.png">
							<div class="atvImg">
								<img src="img/portfolio/Responsive-Web-Design2.png" class="img-responsive" alt="portfolio">
								<div class="atvImg-layer" data-img="img/portfolio/Responsive-Web-Design2.png"></div>
							</div>
						</a>
						<a href="https://github.com/abuSalehMatul/AS-matul.github.io" target="_blank" class="btn btn-default">Github Link</a>
					</li>

					<!-- Project 4 -->
					<li class="col-md-4 col-sm-6 col-xs-12 item development apps design">
						<h4 style="color:rgb(12, 146, 173)">Full website Development</h4>
						<a class="lightbox" href="img/portfolio/mySiteCode.png">
							<div class="atvImg">
								<img src="img/portfolio/mySiteCode.png" class="img-responsive" alt="portfolio">
								<div class="atvImg-layer" data-img="img/portfolio/mySiteCode.png"></div>
							</div>
						</a>
						<a href="https://github.com/abuSalehMatul/mySiteWithLaravel" target="_blank" class="btn btn-default">Github Link</a>
					</li>

					<!-- Project 5 -->
					<li class="col-md-4 col-sm-6 col-xs-12 item development">
						<h4 style="color:rgb(12, 146, 173)">Raw Programming</h4>
						<a class="lightbox" href="img/portfolio/programminpic.jpg">
							<div class="atvImg">
								<img src="img/portfolio/programminpic.jpg" class="img-responsive" alt="portfolio">
								<div class="atvImg-layer" data-img="img/portfolio/programminpic.jpg"></div>
							</div>
						</a>
						
						<a href="https://github.com/abuSalehMatul/mycode" target="_blank" class="btn btn-default">Github Link</a>
					</li>

					<!-- Project 6 -->
					<li class="col-md-4 col-sm-6 col-xs-12 item development design apps">
						<h4 style="color:rgb(178, 12, 12)">My Channel on YouTube</h4>
						<iframe  src="https://www.youtube.com/embed/Vj3tJm7a808" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<a href="https://www.youtube.com/channel/UC7RnWmKaqXaxrZIX1VBXfOw" class="btn btn-default">Subscribe my Channel</a>
					</li>
				</ul>
				<!-- END Gallery -->
			</div>
		</div>
	</section>
	<!-- ===== End Portfolio ===== -->

	<!-- ===== Start Testimonials Section ===== -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<h3 class="dark text-center"><strong class="pirana-p">My</strong> Clients</h3>
						<p class="subtitle">This property is private and not visible for unregister viwer .</p>
					</div>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-sm-12">
					<div id="owl-demo" class="owl-carousel">
						<div class="text-center testi_boxes mx-auto">
							<div style="margin-top:.5rem !important">
								<div>
									<img src="img/testi-1.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block img-circle">
								</div>
								<p class="client_review font-italic mt-4 text-center text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
									'Content here."</p>
								<p class="client_name text-center">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
							</div>
						</div>
						<div class="text-center testi_boxes mx-auto">
							<div style="margin-top:.5rem !important">
								<div>
									<img src="img/testi-2.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block img-circle">
								</div>
								<p class="client_review font-italic mt-4 text-center text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
									'Content here."</p>
								<p class="client_name text-center">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
							</div>
						</div>
						<div class="text-center testi_boxes mx-auto">
							<div style="margin-top:.5rem !important">
								<div>
									<img src="img/testi-3.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block img-circle">
								</div>
								<p class="client_review font-italic text-center text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
									'Content here."</p>
								<p class="client_name text-center">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===== End Testimonials Section ===== -->

	<!-- ===== Hire Me Section ===== -->
	<div id="workwithus" class="jarallax" style="background-color:#111">
		<div class="overlay">
			<div class="container text-center">
				<div class="row">
					<div class="content-wrapper">
						<p>I'm avaiable for freelance hire</p>
						<h3> <strong>Let's</strong> Work <strong>Together</strong> </h3>
						<a class="simple-button smoothScroll" href="#contact"><i class="fa fa-envelop"></i> Hire Me</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ===== End Hire Me ===== -->

	<!-- ===== Start Portfolio Section ===== -->
	<section id="blog">
		<!-- Content -->
		<div class="container">
			<div class="row">
				<h3 class="dark text-center"><strong class="pirana-p">Latest</strong> News</h3>
				<p class="text-center subtitle">
					Blog Posts and Latest news.
					<!-- Edit -->
				</p>
			</div>

			<div class="row margin-top">
				<!-- Post -->
				<article class="post post-item col-lg-4 col-sm-6 col-xs-12">
					<div class="post-photo">
						<img src="img/post01.jpg" alt="...">
					</div>
					<div class="post-content wow fadeInUp" data-wow-delay=".4s">
						<div class="meta">
							<span><i class="fa fa-comment"></i><a href="#">4</a></span>
							<span><i class="fa fa-user"></i><a href="#">Matul</a></span>
							<span><i class="fa fa-tag"></i><a href="#">Webdevelopment</a></span>
						</div>
						<div class="date">31 Aug, 2018</div>
						<h2><a href="#">Awesome Seattle Cycle Trip</a></h2>
						<p>This section is under construction process</p>
						<a href="#" class="simple-button"><span>Read More</span></a>
					</div>
				</article>
				<!-- Post -->
				<article class="post post-item col-lg-4 col-sm-6 col-xs-12">
					<div class="post-photo">
						<img src="img/post02.jpg" alt="...">
					</div>
					<div class="post-content wow fadeInUp" data-wow-delay=".6s">
						<div class="meta">
							<span><i class="fa fa-comment"></i><a href="#">4</a></span>
							<span><i class="fa fa-user"></i><a href="#">Abu Saleh Matul</a></span>
							<span><i class="fa fa-tag"></i><a href="#">technology</a></span>
						</div>
						<div class="date">1 Sep, 2018</div>
						<h2><a href="#">Awesome Seattle Cycle Trip</a></h2>
						<p>This section is under development.</p>
						<a href="#" class="simple-button"><span>Read More</span></a>
					</div>
				</article>
				<!-- Post -->
				<article class="post post-item col-lg-4 col-sm-6 col-xs-12">
					<div class="post-photo">
						<img src="img/post03.jpg" alt="...">
					</div>
					<div class="post-content wow fadeInUp" data-wow-delay=".8s">
						<div class="meta">
							<span><i class="fa fa-comment"></i><a href="#">4</a></span>
							<span><i class="fa fa-user"></i><a href="#">Abu Saleh Matul</a></span>
							<span><i class="fa fa-tag"></i><a href="#">Programming</a></span>
						</div>
						<div class="date">1 Sep, 2018</div>
						<h2><a href="#">Awesome Seattle Cycle Trip</a></h2>
						<p>This section is under development. </p>
						<a href="#" class="simple-button"><span>Read More</span></a>
					</div>
				</article>
			</div>
		</div>
	</section>
	<!-- Section - Latest Posts / End -->
	<!-- ===== End Portfolio ===== -->

	<!-- ===== Start Contact Section ===== -->
	<section id="contact" style="background-image:url('img/contact.jpg')">
		<div class="container">
			<div class="row margin-top">
				<h3><strong>Get</strong> in touch</h3>
				<div class="contact-form col-md-6 no-padding">
				<form method="POST" action="{{URL::to('/contact')}}">
					{{ csrf_field() }}
						<div class="no-padding">
							<div class="col-md-6 no-padding">
								<input id="fullname" type="text" name="fullname" autocomplete="name" placeholder="Name" />
							</div>
							<div class="col-md-6 no-padding">
								<input id="email" type="email" name="email" autocomplete="email" placeholder="Email" />
							</div>
							<textarea id="message" placeholder="Message" name="message"></textarea>
							
								<input type="submit"<span><i class="fa fa-location-arrow"></i> Send Message</span>>
							
						</div>
					</form>
					<div id="response_brought"></div>
				</div>
				<div class="col-md-6 no-padding">
					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="support-box">
								<strong> Email:</strong> <a href="http://salehmatul.com/">matul@salehmatul.com</a>
								<!-- Edit -->
							</div>
						</div>
					</div>

					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box">
								<i class="fa fa-phone"></i>
							</div>
							<div class="phone-box">
								<strong> Phone:</strong> <a>+8801688733087</a>
								<!-- Edit -->
							</div>
						</div>
					</div>

					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box location">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="location-box">
								<strong> Location:</strong> <h5><a>Noakhali,Chittagong,Bangladesh</a></h5>
								<!-- Edit -->
							</div>
						</div>
					</div>

					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box location">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="location-box">
								<strong> Location:</strong> <a>Noakhali,Chittagong,Bangladesh</a>
								<!-- Edit -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===== End Contact Section ===== -->

	<!-- ===== Start Footer ===== -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="copyrights">
						Copyrights &copy; <a>Mtech</a> 2018 Made by <a href="#">Abu Saleh Matul</a>
					</p>
				</div>
				<div class="col-md-4">
					<ul class="social-media">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="footer-links">
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- ===== End Footer ===== -->

	<!-- ===== Javascript ===== -->
	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/pace.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/SmoothScrollm.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script src="{{asset('js/jquery.ripples-min.js')}}"></script>
	<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('js/jarallax.js')}}"></script>
	<script src="{{asset('js/atvImg-min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
    <!-- ==javascript from ohter == -->
    
        <script src="{{asset('jsFromOther/owl/owl.carousel.min.js')}}"></script>
        <script src="{{asset('jsFromOther/smooth/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('jsFromOther/progress/progressbar.min.js')}}"></script>
        <script src="{{asset('jsFromOther/modernizr/modernizr.min.js')}}"></script>
        <script src="{{asset('jsFromOther/hoverdir/jquery.hoverdir.js')}}"></script>
        <script src="{{asset('jsFromOther/count/jquery.countTo.js')}}"></script>
        <script src="{{asset('jsFromOther/plugin/plugin.js')}}"></script>
</body>


</html>