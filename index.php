<!DOCTYPE html>
<html>
	<head>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name') ); ?></title>
		<meta charset="<?php bloginfo('charset') ?>" />
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<!-- Modernizr -->
		<script src="./wp-content/themes/dog-company/js/libs/modernizr-2.6.2.min.js"></script>
		<!-- jQuery -->
		<script type="text/javascript" src="./wp-content/themes/dog-company/js/libs/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="./wp-content/themes/dog-company/js/jquery.hoverIntent.js"></script>
		<!-- DC Style -->
		<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/style.css">
		<!-- GroundworkCSS -->
		<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/groundwork.css">
		<script language="Javascript" type="text/javascript" src="./wp-content/themes/dog-company/js/jquery.lwtCountdown-1.0.js"></script>
		<script language="Javascript" type="text/javascript" src="./wp-content/themes/dog-company/js/misc.js"></script>
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
			//center top nav
			function fix_top_bar(){
				var barWidth = $('.nav-fixed').width();
				$('.nav-fixed').css({ 'left' : '50%', 'margin-left' : '-' + (barWidth/2 + 20) + 'px' });
				}
			function openLog(){
				$('#info-dropdown').hide();
				$('#login-dropdown').toggle();
				return false;
			}
			function openMenu(){
				$('#login-dropdown').hide();
				$('#info-dropdown').toggle();
				return false;
			}

			$('document').ready(function() {
				//fix navbar to top when scroll
				$(window).scroll(function() {
						var scrollTop = Math.max($('body').scrollTop(), $('html').scrollTop());
						if (scrollTop > 112) {
						$('nav').addClass('nav-fixed');
						fix_top_bar();								
						}else{
						$('.nav-fixed').css({ 'left' : '', 'margin-left' : ''});
						$('nav').removeClass('nav-fixed');
						}
						});
				//run function to resize
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
				var configInfo = {
					interval:100,
					over: openInfo,
					timeout: 500,
					out:closeInfo
					
				}
				var configLogin = {
					interval:100,
					over: openLogin,
					timeout: 500,
					out:closeLogin
				}
				$('#info-navbar').hoverIntent(configInfo);
				$('#login-navbar').hoverIntent(configLogin);
				$(window).resize(function(){
				var browserWidth = $(window).width();
				if (browserWidth < 743){
					$('#counter').hide();
				}else {
					$('#counter').show();
				};});
			});//end document ready function
	</script>
	</head>
	<body>
		<!-- header starts here -->
		<div id="container">
			<header>
				<div id="head" class="container centered double padded double gap-bottom">
					<img class =" pull-left" src="./wp-content/themes/dog-company/images/DC_white.png" width="400"></img>
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
				</div>
				
					<script language="javascript" type="text/javascript">
							jQuery(document).ready(function(){
							var today = new Date();
							var currDay = today.getUTCDay();
							var saturdayTest = currDay - 6;
							var wednesdayTest = currDay - 3;
							var currHour = today.getUTCHours();
							if (wednesdayTest > saturdayTest && wednesdayTest <= 0 && currHour < 22){
							//run wednesday script
							var thisWed = -(wednesdayTest) + today.getUTCDate();
							var thisYear = today.getUTCFullYear();
							var thisMonth = today.getUTCMonth() + 1;
							$('#countdown_dashboard').countDown({
									targetDate: {
										'day': 		thisWed,
										'month': 	thisMonth,
										'year': 	thisYear,
										'hour': 	10,
										'min': 		0,
										'sec': 		0,
										'utc':      true
									},
									omitWeeks: true
								});
							} else {
							//run saturday script
							var thisWed = -(saturdayTest) + today.getUTCDate();
							var thisYear = today.getUTCFullYear();
							var thisMonth = today.getUTCMonth() + 1;
							$('#countdown_dashboard').countDown({
									targetDate: {
										'day': 		thisSat,
										'month': 	thisMonth,
										'year': 	thisYear,
										'hour': 	10,
										'min': 		0,
										'sec': 		0,
										'utc':      true
									},
									omitWeeks: true
								});
							};

							
							});
					</script>
				
				</div>
				<nav class="row container double pad-right pad-left" >
					<ul class="pull-left">
						<li><a href="./">hoMe</a></li>
						<li><a href="#">Forums</a></li>
						<li id="info-navbar"><a href="javascript:void(0)" onclick="openMenu()">Info</a>
							<ul id="info-dropdown" >
								<li><a>Test 1</a></li>
								<li><a>Test 2</a></li>
								<li><a>Test 3</a></li>
								<li><a>Test 4</a></li>
								<li><a>Test 5</a></li>
							</ul>
						</li>
						<li><a href="#">Media</a></li>
						</ul>
					<ul class="pull-right">
						<li id="login-navbar"><a href="javascript:void(0)" onclick="openLog()">Sign in</a>
							<ul id="login-dropdown" >
							<li><a>Test 1</a></li>
							<li><a>Test 2</a></li>
							<li><a>Test 3</a></li>
							<li><a>Test 4</a></li>
							<li><a>Test 5</a></li>
							</ul>
						</li>
						<li><a href="#">Register</a></li>
					</ul>
				</nav>
					<!-- resize menu text -->
 	<script src="./wp-content/themes/dog-company/fit-text/jquery.fittext.js"></script>
	<script type="text/javascript">
		$('nav').fitText(3.0,{ minFontSize: '12px', maxFontSize: '18px' });
	</script>
			</header>
			<!-- end of header -->
			<!-- start of horizontal sidebar -->
			<section id="slider" class="pad-bottom">
			<div class="container">
			<article class="two third">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slider') ) : ?>
						<!-- static content goes here if sidebar is inactive -->
			<?php endif; ?>
			</article>
			<article class="one third">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('smallsidebar') ) : ?>
						<!-- static content goes here if sidebar is inactive -->
			<?php endif; ?>
			</article>
			<div>
			</section>

			<!-- end horizontal sidebar -->
			<!-- start main content -->
			<section id="content"  class="container centered whole padded">
				<article id="main" class="two third padded">
					<!-- Start the Loop. -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- Test if the current post is in category 3. -->
					<!-- If it is, the div box is given the CSS class "post-cat-three". -->
					<!-- Otherwise, the div box is given the CSS class "post". -->

					<?php if ( in_category('3') ) { ?>
					<article class="post-cat-three">
						<?php } else { ?>
						<article class="post">
							<?php } ?>
							<!-- Display the Title as a link to the Post's permalink. -->
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
							<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

							<!-- Display the Post's content in a div box. -->
							<article class="entry">
								<?php the_content(); ?>
							</article>

							<!-- Display a comma separated list of the Post's Categories. -->
							<p class="postmetadata">Posted in <?php the_category(', '); ?></p>
						</article> <!-- closes the first div box -->


						<!-- Stop The Loop (but note the "else:" - see next line). -->

						<?php endwhile; else: ?>


						<!-- The very first "if" tested to see if there were any Posts to -->
						<!-- display.  This "else" part tells what do if there weren't any. -->
						<p>Sorry, no posts matched your criteria.</p>


						<!-- REALLY stop The Loop. -->
						<?php endif; ?>
					</article>
					<!-- sidebar -->
					<section id="sidebar" class="one third padded">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
						<!-- static content goes here if sidebar is inactive -->
						<?php endif; ?>
					</section>
					<!-- end sidebar -->
				</article>
			</section>  
			<!-- start footer -->
			<footer class="row padded">
				<article id="footer-content" class="container">
				<ul>
				<li>test 1</li>
				<li>test 1</li>
				<li>test 1</li>
				</ul>
				</article>
			</footer>
			<!-- end footer -->  
		</div>
	</body>
</html>
