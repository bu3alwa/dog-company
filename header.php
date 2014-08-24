<html>
	<head>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name') ); ?></title>
		<meta charset="<?php bloginfo('charset') ?>" />
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/images/dcicon.ico" type="image/x-icon"/>
		<link rel="apple-touch-icon" href="/images/icon.png" sizes="128x128" type="image/x-icon"/>
		<!-- Modernizr -->
		<script src="./wp-content/themes/dog-company/js/libs/modernizr-2.6.2.min.js"></script>
		<!-- Googel Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41892420-1', 'dog-company.com');
		ga('send', 'pageview');
		</script>
		<!-- jQuery -->
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
		<script type="text/javascript" src="./wp-content/themes/dog-company/js/libs/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="./wp-content/themes/dog-company/js/jquery.hoverIntent.js"></script>
		<script type="text/javascript" src="./wp-content/themes/dog-company/js/jquery.dropdown.js"></script>
		<!-- GroundworkCSS -->
		<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/groundwork.css">
		<script language="Javascript" type="text/javascript" src="./wp-content/themes/dog-company/js/jquery.lwtCountdown-1.0.js"></script>
		<script language="Javascript" type="text/javascript" src="./wp-content/themes/dog-company/js/misc.js"></script>
		<script language="Javascript" type="text/javascript" src="./wp-content/themes/dog-company/js/page-load.js"></script>
		<link rel="Stylesheet" type="text/css" href="./wp-content/themes/dog-company/css/dark.css"></link>
		<!--[if IE]>
		<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/groundwork-ie.css">
		<![endif]-->
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="./wp-content/themes/dog-company/js/libs/html5shiv.min.js"></script>
		<![endif]-->
		<!--[if IE 7]>
		<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/font-awesome-ie7.min.css">
		<![endif]-->
		<script type="text/javascript">
			function openLog(){
				jQuery('#info-dropdown').hide();
				jQuery('#login-dropdown').toggle();
				return false;
			}
			function openMenu(){
				jQuery('#login-dropdown').hide();
				jQuery('#info-dropdown').toggle();
				return false;
			}
			jQuery('document').ready(function($) {
				//center top nav
				function fix_top_bar(){
					var barWidth = $('.nav-fixed').width();
					$('.nav-fixed').css({ 'left' : '50%', 'margin-left' : '-' + (barWidth/2) + 'px' });
					}
				function centerNav(){
					var barWidth = $('nav').width();
					$('nav').css({ 'left' : '50%', 'margin-left' : '-' + (barWidth/2) + 'px' });
				}
				function counterHide(){
					var browserWidth = $(window).width();
					if (browserWidth < 743){
						$('#counter').hide();
					}else {
						$('#counter').show();
					};
				}
				//center nav
				$(window).load('',centerNav());
				$(window).resize(function(){
					var barWidth = $('nav').width();
					$('nav').css({ 'left' : '50%', 'margin-left' : '-' + (barWidth/2) + 'px' });
				});
				//fix navbar to top when scroll
				$(window).scroll(function() {
						var scrollTop = Math.max($('body').scrollTop(), $('html').scrollTop());
						if (scrollTop > 92) {
						$('nav').addClass('nav-fixed');
						fix_top_bar();								
						}else{
						$('.nav-fixed').css({ 'left' : '', 'margin-left' : ''});
						$('nav').removeClass('nav-fixed');
						centerNav();
						}
						});
				//run function to resize top bar
				fix_top_bar();
					$(window).resize(function(){
						  fix_top_bar();  
				});
				//menu drop-down
				function openInfo() {
						$('#login-dropdown').hide();
						$('#info-dropdown').show();
				}
				function openLogin() {
						$('#info-dropdown').hide();
						$('#login-dropdown').show();
				}
				function closeInfo() {
						$('#info-dropdown').hide();
				}
				function closeLogin() {
						$('#login-dropdown').hide();
				}
				//show and hide counter on certain width
				$('#countdown').load('',counterHide());
				//$('#countdown').on('load',counterHide());
				$(window).resize(function(){
					var browserWidth = $(window).width();
					if (browserWidth < 743){
						$('#counter').hide();
					}else {
						$('#counter').show();
					};
				});
			});//end document ready function
			//Navbar +/- changer
			var dropIcon = false;
			function dropDownIcon() {
				if(dropIcon) {
					var str = document.getElementById("info-navbar").innerHTML; 
					var res = str.replace("-", "+");
					document.getElementById("info-navbar").innerHTML = res;
					dropIcon = false;
				}else {
					var str = document.getElementById("info-navbar").innerHTML; 
					var res = str.replace("+", "-");
					document.getElementById("info-navbar").innerHTML = res;
					dropIcon = true;
				}
			}
	</script>
	</head>
	<body>
		<!-- header starts here -->
		<div id="container">
			<header>
				<div id="head" class="container centered double padded ">
					<img class="pull-left" src="/images/header.png" alt="dog company head img" width="400" />
					<div id="counter" class="pull-right">
						<div id="countdown_dashboard">
							<div class="dash days_dash">
								<span class="dash_title">days</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>

							<div class="dash hours_dash">
								<span class="dash_title">hours</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>

							<div class="dash minutes_dash">
								<span class="dash_title">minutes</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>

							<div class="dash seconds_dash">
								<span class="dash_title">seconds</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
						</div>
						<h3>Next Operation</h3>
				</div>
						<script language="javascript" type="text/javascript">
							jQuery(document).ready(function($){
							var today = new Date();
							var currDay = today.getUTCDay();
							var saturdayTest = currDay - 6;
							var wednesdayTest = currDay - 3;
							var currHour = today.getUTCHours();
							if (wednesdayTest > saturdayTest && wednesdayTest <= 0)
							{
								if(wednesdayTest == 0 && currHour >= 21)
								{
									//run saturday script
									var thisSat = -(saturdayTest) + today.getUTCDate();
									var thisYear = today.getUTCFullYear();
									var thisMonth = today.getUTCMonth() + 1;
									$('#countdown_dashboard').countDown({
									targetDate: {
									'day': thisSat,
									'month': thisMonth,
									'year': thisYear,
									'hour': 21,
									'min': 0,
									'sec': 0,
									'utc': true
									},
									omitWeeks: true
									}); 
								}
								else
								{
									//run wednesday script
									var thisWed = -(wednesdayTest) + today.getUTCDate();
									var thisYear = today.getUTCFullYear();
									var thisMonth = today.getUTCMonth() + 1;
									$('#countdown_dashboard').countDown({
									targetDate: {
									'day': thisWed,
									'month': thisMonth,
									'year': thisYear,
									'hour': 21,
									'min': 0,
									'sec': 0,
									'utc': true
									},
									omitWeeks: true
									});
								}
							} 
							else
							{
								if((saturdayTest == 0 && currHour >= 21) || (saturdayTest > 0))
								{
									//run next wednesday script
									var nextWed = -(wednesdayTest) + today.getUTCDate() + 7;
									var thisYear = today.getUTCFullYear();
									var thisMonth = today.getUTCMonth() + 1;
									$('#countdown_dashboard').countDown({
									targetDate: {
									'day': nextWed,
									'month': thisMonth,
									'year': thisYear,
									'hour': 21,
									'min': 0,
									'sec': 0,
									'utc': true
									},
									omitWeeks: true
									});
								}
								else
								{
									//run saturday script
									var thisSat = -(saturdayTest) + today.getUTCDate();
									var thisYear = today.getUTCFullYear();
									var thisMonth = today.getUTCMonth() + 1;
									$('#countdown_dashboard').countDown({
									targetDate: {
									'day': thisSat,
									'month': thisMonth,
									'year': thisYear,
									'hour': 21,
									'min': 0,
									'sec': 0,
									'utc': true
									},
									omitWeeks: true
									});
								}
							};
							});
						</script>
				
				</div>
				<nav id="main-nav" class="row container" >
					<ul id="nav-left" class="pull-left double pad-left" style="height: 33px">
						<li class="nav-li"><a href="./" rel="load">HOME</a></li>
						<li class="nav-li"><a href="./forum" >FORUMS</a></li>
						<li title="click to go 'About Us'"><a href="/?page_id=4">About Us</a></li>
						<li class="nav-li" id="info-navbar"><a href="javascript:void(0)" onclick="openMenu();dropDownIcon();">INFO+</a>
							<ul id="info-dropdown" class="container">
								<li title="click to go 'Organisation & Roster'"><a href="/?page_id=11">Organisation</a></li>
								<li title="click to go 'Training & Doctrine'"><a href="/?page_id=471">Doctrine</a></li>
								<li title="click to go 'Arma XML'"><a href="/squad/squadXML.php">Arma XML</a></li>
								<li title="click to go 'FAQ'"><a href="/?page_id=7">FAQ</a></li>
							</ul>
						</li>
						<li class="nav-li" title="click to go 'Media'"><a href="/?page_id=9">Media</a></li>
					</ul>
					<ul id="nav-right" class="pull-right double pad-right" style="height: 33px; position:relative;">
						<?php global $phpbbForum; if ($phpbbForum->user_logged_in()): ?> 
							<?php admin_button(); ?>
								<li id="login-navbar"><a href=<?php echo wpu_phpbb_profile_link(); ?> >PROFILE</a></li>
								<li><?php integ_logout_uri();?></li>
						<?php else: ?>
								<li id="login-navbar"><a href="javascript:void(0)" onclick="openLog()">LOGIN</a>
								<ul id="login-dropdown" class="align-center" >
								<li>
									<?php include(TEMPLATEPATH.'/login.php'); ?>
								</li>
								</ul>
								</li>
								<li><a href=<?php call_register();?>>REGISTER</a></li>
						<?php endif; ?>
					</ul>
				</nav>
	<!-- resize menu text -->
 	<script src="./wp-content/themes/dog-company/fit-text/jquery.fittext.js"></script>
	<script type="text/javascript">
		$('nav').fitText(4,{ minFontSize: '10px', maxFontSize: '18px' });
		$('.event-title h3').fitText(4,{ minFontSize: '16px', maxFontSize: '26px' });
	</script>

			</header>
			<!-- end of header -->
