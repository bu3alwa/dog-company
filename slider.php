<!-- start of horizontal sidebar -->
<section id="slider-wrapper" >
	<div class="container">
		<article id="madmans-slider" class="whole">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slider') ) : ?>
			<!-- static content goes here if sidebar is inactive -->
			<?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>
			<?php endif; ?>
		</article>
	</div>
</section>
<!-- end horizontal sidebar -->
