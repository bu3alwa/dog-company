<!DOCTYPE html>
<!-- hello moc -->
<html>
<head>
<title>Dog-company</title>
  <meta charset="<?php bloginfo('charset') ?>" />

	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name') ); ?></title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="./wp-content/themes/dog-company/images/apple-icons/apple-touch-icon-precomposed.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="./wp-content/themes/dog-company/images/apple-icons/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="./wp-content/themes/dog-company/images/apple-icons/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="./wp-content/themes/dog-company/images/apple-icons/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="./wp-content/themes/dog-company/images/apple-icons/apple-touch-icon-144x144-precomposed.png" />
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
</head>
<body>
<!-- header starts here -->
	<div id="container">
	<div id="header">
      <div id="logo">
      </div>
      <div id="countdown">
      </div>
      <div id="nav-bar">
        <ul class="left-nav">
          <a href="./">Home</a>
          <a href="./forum">Forum</a>
          <a href="./about-us">About us</a>
          <a href="./contact-us">contact us</a>
        </ul class="right-nav">
        <ul>
          <a>Sign in</a>
          <a>Register</a>
       </ul>
      </div>
    </div>
<!-- end of header -->
<!-- start of horizontal sidebar -->
  <div id="horizontal-sidebar">
  </div>
<!-- end horizontal sidebar -->
<!-- start main content -->
  <div id="content">
    <div id="main">
			   <!-- Start the Loop. -->
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		 <!-- Test if the current post is in category 3. -->
		 <!-- If it is, the div box is given the CSS class "post-cat-three". -->
		 <!-- Otherwise, the div box is given the CSS class "post". -->

		 <?php if ( in_category('3') ) { ?>
				   <div class="post-cat-three">
		 <?php } else { ?>
				   <div class="post">
		 <?php } ?>


		 <!-- Display the Title as a link to the Post's permalink. -->

		 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


		 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

		 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>


		 <!-- Display the Post's content in a div box. -->

		 <div class="entry">
		   <?php the_content(); ?>
		 </div>


		 <!-- Display a comma separated list of the Post's Categories. -->

		 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
		 </div> <!-- closes the first div box -->


		 <!-- Stop The Loop (but note the "else:" - see next line). -->

		 <?php endwhile; else: ?>


		 <!-- The very first "if" tested to see if there were any Posts to -->
		 <!-- display.  This "else" part tells what do if there weren't any. -->
		 <p>Sorry, no posts matched your criteria.</p>


		 <!-- REALLY stop The Loop. -->
		 <?php endif; ?>
    </div>
    <!-- sidebar -->
    <div id="sidebar">
    </div>
    <!-- end sidebar -->
  </div>
  <!-- start footer -->
  <div id="footer">
  </div>
  <!-- end footer -->  
  </div>
  </div>
</body>
</html>
