<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shohanur Rahman Sohan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('public/assets/')}}/img/icon.png">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300i,400,400i,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('public/assets/')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('public/assets/')}}/css/slicknav.min.css">
		<link rel="stylesheet" href="{{asset('public/assets/')}}/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/magnific-popup.css">
		
		<!-- Xman CSS -->
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/normalize.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/style.css">
        <link rel="stylesheet" href="{{asset('public/assets/')}}/css/responsive.css">
    </head>
    <body>
		
		<!-- Social -->
		<div class="social-body">
			<ul>
				<li class="facebook"><a href="https://www.facebook.com/en.sohan.12"><i class="fa fa-facebook"></i></a></li>
				<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div>
		<!--/ End Social -->
		
		<!-- Header Area -->
		<header id="header" class="header">
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-12">
							<div class="logo">
								<!-- <a href="index.html"><img src="img/nnn.png" alt="logo.png"></a> -->
							</div>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-12">
							<div class="mobile-menu"></div>
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse">
									<ul id="nav" class="nav navbar-nav">
										<li class="current"><a href="#slider">Welcome</a></li>
										<li><a href="#about">About Me</a></li>
										<li><a href="#service">My Service</a></li>
										<li><a href="#skill">Skill</a></li>
										<li><a href="#story">Story</a></li>
										<li><a href="#latest-works">Portfolio</a></li>
										<li><a href="#blog">Blog</a></li>
										<li><a href="#contact">Contact</a></li>
										<li><a href="#contact">Chat</a></li>
									</ul>
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section id="slider" class="slider" style="background-image:url('{{asset('public/assets/')}}/img/sss.png')">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="text">
							<h1>Hi,my name is Shohanur Rahman Sohan </h1>
							<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Hic Laboriosam Ipsa Sequi? Laudantium Aspernatur Iusto Blanditiis, Totam Perferendis Dicta Magni. tincidunt dui. Vestibulum sodales posuere ullamcorper. Proin convallis neque pulvinar mauris vehicula, quis dictum diam ullamcorper</p>
							<div class="button">
								<a href="#" class="btn primary "><i class="fa fa-briefcase"></i>view work</a>
								<a href="#" class="btn"><i class="fa fa-phone"></i>Contact me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start about -->
		<section id="about" class="about">
			<div class="container">
				 <?php 
                $all_publish_about = DB::table('tbl_about')
                                     ->where('publication_status',1)
                                     ->limit(1)
                                     ->get();

                ?>
				<div class="row">
					<div class="about-content">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="section-title">
								<h2>About <span>Me</span></h2>
							</div>
						</div>
						<div class="col-md-6  col-sm-6 col-xs-12">
							 @foreach($all_publish_about as $v_about)
							<div class="single-about">
								<p class="bolt">{{$v_about->about_short_description}}.</p>
								<p>{{$v_about->about_long_description}}</p>
								
								<div class="cv">
									<a href="{{$v_about->cv}}" download="{{$v_about->cv}}" >download cv</a>
								</div>
								<div class="social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="image">
								<img src="{{asset('public/assets/')}}/img/ss.jpg" alt="#">
								<a href="https://www.youtube.com/watch?v=45ETZ1xvHS0" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End about -->	
		
		<!-- Start service -->
		<section id="service" class="service section">
			<div class="container">
				 <?php 
                $all_publish_service = DB::table('tbl_service')
                                    ->orderBy('service_id','desc')
                                     ->where('publication_status',1)
                                     ->get();

                ?>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="section-title">
							<h2>My <span>Service</span></h2>
						</div> 
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="row">
							 @foreach($all_publish_service as $v_service)
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
								<!-- single-service -->
								 

								<div class="single-service">
									<i class="fa fa-laptop"></i>
									<h5>{{$v_service->service_name}}</h5>
									<p>{{$v_service->service_description}}</p>
								</div>
								
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->	
		
		<!-- Start skill -->
		<section id="skill" class="skill section">
			<div class="container">
				 <?php 
                $all_publish_skill = DB::table('tbl_skill')
                                     ->where('publication_status',1)
                                     ->get();

                ?>
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<div class="section-title">
							<h2>My <span>Skill</span></h2>
						</div>
					</div>
					<div class="col-md-10 col-sm-12 col-xs-12">
						<div class="skill-head">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									 @foreach($all_publish_skill as $v_skill)
									<div class="skill-content">
										<h3>{{$v_skill->skill_title}}</h3>
										
										<p>{{$v_skill->skill_description}}</p>
										
									</div>
									@endforeach
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="skill-main">
										<div class="single-skill">
											<div class="skill-title">
												<h4>PHP</h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="95">
													<span>95%</span>
												</div>
											</div>
										</div>
										<div class="single-skill">
											<div class="skill-title">
												<h4>Laravel</h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="90">
													<span>90%</span>
												</div>
											</div>
										</div>
										<div class="single-skill">
											<div class="skill-title">
												<h4>CodeIgniter</h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="90">
													<span>90%</span>
												</div>
											</div>
										</div>
										<div class="single-skill">
											<div class="skill-title">
												<h4>HTML & CSS</h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="80">
													<span>80%</span>
												</div>
											</div>
										</div>
										<div class="single-skill">
											<div class="skill-title">
												<h4>Bootstrap</h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="70">
													<span>70%</span>
												</div>
											</div>
										</div>
										<div class="single-skill">
											<div class="skill-title">
												<h4>JavaScript</h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="70">
													<span>60%</span>
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
		</section>
		<!--/ End skill -->	
		
		<!-- Start Story -->
		<section id="story" class="story section">
			<div class="container">
				<?php 
                $all_publish_story = DB::table('tbl_story')
                                      ->orderBy('story_id','desc')
                                     ->where('publication_status',1)
                                     ->get();

                ?>
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>my <span>Story</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="story-content">
							<!-- single-story -->
							 @foreach($all_publish_story as $v_story)
							<div class="single-story">
								
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">{{$v_story->year}}</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h3>{{$v_story->story_title}}</h3>
									<p>{{$v_story->story_short_description}}</p>
									<p class="p2">{{$v_story->story_long_description}}.</p>
								</div>
								
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End story -->	
		
		<!-- Latest Works -->
		<section id="latest-works" class="latest-works section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>My <span>Portfolio</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- Project Nav -->
						 <div class="works-menu wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
							  <?php 
						            $all_publish_category = DB::table('tbl_category')
						                                 ->where('publication_status',1)
						                                 ->get();

						        ?>
						        
							<ul>
								<li class="active" data-filter="*"><i class="fa fa-tasks"></i>All Works</li>
								  @foreach($all_publish_category as $v_category)
								  <li data-filter=".print" class="active"><i class="fa fa-laptop"></i><a href="{{URL::to('category',$v_category->category_id)}}">{{$v_category->category_name}}</a></li>
								  @endforeach

							</ul>

						</div> 
						<!--/ End Project Nav -->
					</div>
				</div>

				<div class="row">
					<div class="isotop-active">
						 <?php 
						            $all_publish_portfolio = DB::table('tbl_portfolio')
						                                 ->where('publication_status',1)
						                                 ->get();

						            

						        ?>
						         @foreach($all_publish_portfolio as $v_portfolio)
						        
						<div class="col-md-4 col-sm-4 col-xs-12 print identity ">
							<!-- single-work -->
							
							<div class="single-work">
								<a href=""><img src="{{asset($v_portfolio->img)}}" alt="#" width="50" height="400" ></a>
								
								<div class="works-hover">
									<h4><a href="">{{$v_portfolio->portfolio_title}}</a></h4>
									
									<div style="margin-top: 200px" class="link"><h3><a href="{{URL::to('portfolio-details/'.$v_portfolio->portfolio_id)}} ">VISIT PORTFOLIO</a></h3></div>
								</div>

							</div>
							

							 
						</div>
						
						 @endforeach
						
					</div>
				</div>
			</div>
		</section>
		<!--/ End Works -->
		
		<!-- Testimonials -->
		<section id="testimonials" class="testimonials section">
			<div class="container">
				 <?php 
			            $all_publish_peoplesay = DB::table('tbl_peoplesay')
			                                 ->where('publication_status',1)
			                                 ->get();

				?>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="testi-content">
							<h2>What People Says</h2>
							<div class="owl-carousel testimonial-slider">
								<!--Start single-testimonial -->
								  @foreach($all_publish_peoplesay as $v_peoplesay)
								<div class="single-testimonial">
									<img src="{{asset($v_peoplesay->img)}}" alt="#">
									<p><i class="fa fa-quote-left"></i><i>{{$v_peoplesay->people_say}}. </i></p>
									<div class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
									</div>
									<span class="name">{{$v_peoplesay->people_name}}</span>
								</div>
								@endforeach
								
								<!--End single-testimonial -->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End testimonial -->
		
		<!-- Blog -->
	<!-- 	<section id="blog" class="blog section">
			<div class="container">
				  <?php 
                $populer_portfolio = DB::table('tbl_portfolio')
                                    ->orderBy('hit_counter','desc')
                                    ->limit(3)
                                     ->where('publication_status',1)
                                     ->get();

                ?>

				<div class="row">
					<div class="col-md-12 col-sm-4 col-xs-12">
						<div class="section-title">
							<h2>Latest <span>Posts</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($populer_portfolio as $v_popular)
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- single-news -->
						
						<!-- <div class="single-news">
							<div class="news-head">
								<div class="news-date">
									<span>03</span> 
									<span>Mar</span> 
									<span>2018</span> 
								</div>
								<img src="{{asset($v_portfolio->img)}}" alt="#" >
								<div class="news-view"> 
									<span><i class="fa fa-comments"></i>25 comments</span>
									<span><i class="fa fa-eye"></i>{{$v_popular->hit_counter}}views</span>
								</div>
							</div>
							<div class="news-body">
								<h2><a href="#">{{$v_popular->portfolio_title}}</a></h2>
								<p>Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et incididunt ut labore et. Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,</p>
								<a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
						
					</div>
					@endforeach
					
			</div>
		</section>  -->
		<!--/ End blog -->
		
		<!-- Newslatter -->
		<section id="newslatter" class="newslatter section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="news-text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
							<h4>don't miss out</h4>
							<h2>sign up for updates</h2>
							<p>Get all latest news and our exclusive content straight to your email inbox</p>
						</div>
						<h3 style="color: green">
                                     <?php
                                     $message=Session::get('message');
                                     if ($message)
                                      {
                                        echo $message;
                                        Session::put('message','');
                                     }



                                     ?>
                                     </h3>
							 {!! Form::open(['url' => '/save-collectemail','class'=>'form','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                       @csrf
						<div class="form wow shake" data-wow-duration="0.8s" data-wow-delay="0.5s">
							<input type="email" placeholder="Enter your email" name="email">
							<button type="text" value="send">Signup</button>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
		<!--/ End Newslatter -->
	
		<!-- Contact -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="contact-info">
							<h4>Contact info</h4>
							
							<p></p>
							<span><i class="fa fa-phone-square"></i>+8801768284056</span>
							<span><i class="fa fa-map-marker"></i>Uttara, Dhaka</span>
							<span><i class="fa fa-envelope"></i><a href="#">shohansorkar20@gmail.com</a></span>
							<span><i class="fa fa-globe"></i><a href="#">www.shohanurrahmansohan.com</a></span>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12 ">
						<div class="form-head">
							<h3 style="color: green">
                                     <?php
                                     $message=Session::get('message');
                                     if ($message)
                                      {
                                        echo $message;
                                        Session::put('message','');
                                     }



                                     ?>
                                     </h3>
							 {!! Form::open(['url' => '/save-message','class'=>'form','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                       @csrf
							
								<div class="form-group">
									<input name="name" type="text" placeholder="enter name">
								</div>
								<div class="form-group">
									<input name="email" type="email" placeholder="enter email">
								</div>
								<div class="form-group">
									<textarea name="message" placeholder="enter message"></textarea>
								</div>
								<div class="form-group">
									<div class="button">
										<button type="submit" class="btn primary">Submit</button>
									</div>
								</div>
							 {!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact -->
		
		<!-- Clients -->
		<div id="clients" class="clients section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-6.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('public/assets/')}}/img/brand-1.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Clients -->
		
		<!-- Footer -->
		<footer id="footer" class="footer section">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo">
								<img src="{{asset('public/assets/')}}/img/nnn.png" alt="#">
							</div>
							<!-- Social -->
							<ul class="social">
								<li><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
								<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
							</ul>
							<!-- End Social -->
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>© 2018 Copyright web_bean</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--/ End Footer -->
		
        <script src="{{asset('public/assets/')}}/js/jquery.min.js">  </script>
        <script src="{{asset('public/assets/')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('public/assets/')}}/js/jquery.nav.js"></script>
        <script src="{{asset('public/assets/')}}/js/jquery.slicknav.min.js"></script>
        <script src="{{asset('public/assets/')}}/js/easing.min.js"></script>
		<script src="{{asset('public/assets/')}}/js/jquery-appear.js"></script>
        <script src="{{asset('public/assets/')}}/js/jquery.scrollUp.min.js"></script>
        <script src="{{asset('public/assets/')}}/js/owl.carousel.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="{{asset('public/assets/')}}/js/jquery.counterup.min.js"></script>
		<script src="{{asset('public/assets/')}}/js/isotope.pkgd.min.js"></script>
		<script src="{{asset('public/assets/')}}/js/wow.min.js"></script>
		<script src="{{asset('public/assets/')}}/js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script type="text/javascript" src="{{asset('public/assets/')}}/js/gmaps.min.js"></script>
        <script src="{{asset('public/assets/')}}/js/main.js"></script>
    </body>
</html>