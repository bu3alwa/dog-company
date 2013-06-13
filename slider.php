  		<!-- start of horizontal sidebar -->
			<section id="slider" class="pad-bottom">
			<div class="container">
			<article class="two third">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slider') ) : ?>
						<!-- static content goes here if sidebar is inactive -->
			<?php endif; ?>
			</article>
			<?php include(TEMPLATEPATH.'/smallSidebar.php'); ?>
			</div>
			</section>

			<!-- end horizontal sidebar -->
