<!-- start of horizontal sidebar -->
<section id="slider-wrapper" class="pad-bottom">
	<div class="container">
		<article id="madmans-slider" class="two third">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slider') ) : ?>
			<!-- static content goes here if sidebar is inactive -->
			<?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>
			<?php endif; ?>
		</article>
		<?php include(TEMPLATEPATH.'/smallSidebar.php'); ?>
	</div>
</section>
<!-- end horizontal sidebar -->
