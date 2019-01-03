<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from 2code.info/demo/html/ask-me-html/orange/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 04:27:15 GMT -->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Solutions</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	<meta name="author" content="2code.info">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="{{ asset('page/style.css') }}">
	
	<!-- Skins -->
	<link rel="stylesheet" href="{{ asset('page/css/skins/orange.css') }}">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="{{ asset('page/css/responsive.css') }}">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('page/images/favicon.png') }}">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
							<form>
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
										<i class="icon-lock"></i>
										<a href="#">Forget</a>
									</p>
								</div>
								<p class="form-submit login-submit">
									<input type="submit" value="Log in" class="button color small login-submit submit">
								</p>
								<div class="rememberme">
									<label><input type="checkbox" checked="checked"> Remember Me</label>
								</div>
							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>Register Now</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
						<a class="button color small signup">Create an account</a>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
						<input type="password" value="">
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input type="password" value="">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>Lost Password<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Reset" class="button color small submit">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
	
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					<li><a href="contact_us.html"><i class="icon-envelope"></i>Contact</a></li>
					<li><a href="#"><i class="icon-headphones"></i>Support</a></li>
					<li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
				</ul>
			</nav>
		</section><!-- End container -->
	</div><!-- End header-top -->
	<header id="header">
		<div class="container">
			<div class="row">
			<div class="col-md-3">
				<div class="logo"><a href="index.html"><img alt="" src="images/logo.png"></a></div>
			</div>
			<div class="col-md-9">
				<div class="searchnav">
				<form>
					<button type="submit"><a href="#" title=""><i class="icon-search"></i></a></button>
				    <input type="search" value="Search here ..." onfocus="if(this.value=='Search here ...')this.value='';" onblur="if(this.value=='')this.value='Search here ...';">
				</form>
				</div>

			</div>
			</div>
		</div>
		
	</header>

	<div class="section-warp ask-me">

	</div><!-- End section-warp -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">

                {{--START CONTENT--}}

                @yield('content')

                {{--END CONTENT--}}

			</div><!-- End main -->
			<aside class="col-md-3 sidebar">
				<div class="widget widget_stats">
					<a href="{{route('getTerms')}}" title=""><i class="icon-plus-sign-alt"></i> Add Question </a>
				</div>

                {{--MENU--}}
                <div class="widget widget_stats">
                    <div class="ul_list ul_list-icon-ok">
                        <ul>
                            <li>
                                <a href="{{route('getHome')}}">Home</a>
                            </li>
                            <li class="ask_question">
                                <a href="{{route('getTerms')}}">Ask Question</a>
                            </li>
                            <li>
                                <a href="{{route('getUser')}}">User</a>
                            </li>

                            <li><a href="{{route('getContact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                {{--END MENU--}}

				<div class="widget widget_stats">
					<h3 class="widget_title">Stats</h3>
					<div class="ul_list ul_list-icon-ok">
                        <a style="color: white; width: 100%; text-align: center" href="#" class="button large lime-green-button">Add Questions</a>
                        <ul>
                            <li><i class="icon-question-sign"></i><a href="#">Total Of Questions<span> ( <span>30</span> ) </span></a></li>
                            <li><i class="icon-comment"></i><a href="#">Answered Questions<span> ( <span>10</span> ) </span></a></li>
                            <li><i class="icon-question"></i><a href="#">Unanswered Questions<span> ( <span>3</span> ) </span></a></li>
                            <li><i class="icon-remove"></i><a href="#">Reported Questions<span> ( <span>2</span> ) </span></a></li>
                        </ul>
					</div>
				</div>

				<div class="widget widget_social">
					<h3 class="widget_title">Find Us</h3>
					<ul>
						<li class="rss-subscribers">
							<a href="#" target="_blank">
							<strong>
								<i class="icon-rss"></i>
								<span>Subscribe</span><br>
								<small>To RSS Feed</small>
							</strong>
							</a>
						</li>
						<li class="facebook-fans">
							<a href="#" target="_blank">
							<strong>
								<i class="social_icon-facebook"></i>
								<span>5,000</span><br>
								<small>People like it</small>
							</strong>
							</a>
						</li>
						<li class="twitter-followers">
							<a href="#" target="_blank">
							<strong>
								<i class="social_icon-twitter"></i>
								<span>3,000</span><br>
								<small>Followers</small>
							</strong>
							</a>
						</li>
						<li class="youtube-subs">
							<a href="#" target="_blank">
							<strong>
								<i class="icon-play"></i>
								<span>1,000</span><br>
								<small>Subscribers</small>
							</strong>
							</a>
						</li>
					</ul>
				</div>

                <div class="widget widget_tag_cloud">
                    <h3 class="widget_title">Tags</h3>
                    <a href="#">projects</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Html</a>
                    <a href="#">Css</a>
                    <a href="#">jQuery</a>
                    <a href="#">2code</a>
                    <a href="#">vbegy</a>
                </div>

				
				
			</aside><!-- End sidebar -->
		</div><!-- End row -->
	</section><!-- End container -->
	
	<footer id="footer">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget widget_contact">
						<h3 class="widget_title">Where We Are ?</h3>
						<p>We from 17IT3 of School of Information and Communication Technology</p>
						<ul>
							<li>
								<span>Address :</span>
								Nam Ky Khoi Nghia Street, Da Nang City.
							</li>
							<li>
								<span>Support :</span>Support Telephone No : (+2)0696969696
							</li>
							<li>Support Email Account : info@gmail.com</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="widget">
						<h3 class="widget_title">Popular Questions</h3>
						<ul class="related-posts">
							<li class="related-item">
								<h3><a href="#">This is my first Question</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
								<div class="clear"></div><span>Feb 22, 2014</span>
							</li>
							<li class="related-item">
								<h3><a href="#">This Is My Second Poll Question</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
								<div class="clear"></div><span>Feb 22, 2014</span>
							</li>
						</ul>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="widget widget_twitter">
						<h3 class="widget_title">Latest Tweets</h3>
						<div class="tweet_1"></div>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</footer><!-- End footer -->
	<footer id="footer-bottom">
		<section class="container">
			<div class="copyrights f_left">Copyright 2014 Ask me | <a href="#">By 2code</a></div>
			<div class="social_icons f_right">
				<ul>
					<li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
					<li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
					<li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
				</ul>
			</div><!-- End social_icons -->
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<script src="{{ asset('page/js/jquery.min.js') }}"></script>
<script src="{{ asset('page/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ asset('page/js/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset('page/js/html5.js') }}"></script>
<script src="{{ asset('page/js/twitter/jquery.tweet.js') }}"></script>
<script src="{{ asset('page/js/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('page/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('page/js/jquery.tipsy.js') }}"></script>
<script src="{{ asset('page/js/tabs.js') }}"></script>
<script src="{{ asset('page/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('page/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('page/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script src="{{ asset('page/js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('page/js/jquery.nav.js') }}"></script>
<script src="{{ asset('page/js/tags.js') }}"></script>
<script src="{{ asset('page/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('page/js/custom.js') }}"></script>
<!-- End js -->

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/orange/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 04:27:15 GMT -->
</html>
