<!DOCTYPE html>
<html>
	<head>
	<title>Dog-company</title>
	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name') ); ?></title>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!-- Modernizr -->
	<script src="./wp-content/themes/dog-company/js/libs/modernizr-2.6.2.min.js"></script>
	<!-- jQuery -->
	<script type="text/javascript" src="./wp-content/themes/dog-company/js/libs/jquery-1.9.1.min.js"></script>
	<!-- GroundworkCSS -->
	<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/groundwork.css">
	<!--[if IE]>
	<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/groundwork-ie.css">
	<![endif]-->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="./wp-content/themes/dog-company/js/libs/html5shiv.min.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="./wp-content/themes/dog-company/style.css" />
	<script type="text/javascript">
	$('document').ready(function() {
		$(window).scroll(function() {
			if ($(window).scrollTop() > 140) {

				$('nav').addClass('nav-fixed');
													
				}else{
				$('nav').removeClass('nav-fixed');
			}
	})});
	</script>
</head>
	<body>
		<!-- header starts here -->
		<div id="container">
			<header>
				<article id="logo" class="container centered padded double gap-bottom">
					<img src="./images/DC_white.png" width="400"></img>
				</article>
				<article id="countdown"  class="container centered">
				</article>
				<nav class="row container double pad-right pad-left">
					<ul class="pull-left">
					<a href="./">Home</a>
					<a href="./forum">Forum</a>
					<a href="./about-us">About us</a>
					<a href="./contact-us">contact us</a>
					</ul>
					<ul class="pull-right">
					<a>Sign in</a>
					<a>Register</a>
					</ul>
				</nav>
			</header>
			<!-- end of header -->
			<!-- start of horizontal sidebar -->
			<section id="horizontal-sidebar" class="pad-bottom">

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
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-sidebar') ) : ?>
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
