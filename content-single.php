<article id="main" class="five seventh padded">
<div id="category-post-content">
	<!-- Start the Loop. -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Test if the current post is in category 3. -->
	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
	<!-- Otherwise, the div box is given the CSS class "post". -->
	<article class="post">
		<!-- Display the Title as a link to the Post's permalink. -->
		<h2 class="border-title"><a href="" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
		<div class="row pad-bottom">
		<!-- Display a comma separated list of the Post's Categories. -->
		<small class="postmetadata pull-left"><?php the_category(', '); ?></small>
		<small class="date pull-left"> Posted by <?php the_author_posts_link() ?> on <?php the_time('F jS, Y') ?></small>
		
		</div>
		<!-- Display the Post's content in a div box. -->
		<article id="entry">
			<?php the_content('Read More here...'); ?>
			<div id ="tags"><a class="first-tag">Tags:</a>
			<?php
			 echo get_the_tag_list();
			?>
			</div>
		</article>
		
	</article> <!-- closes the first div box -->
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	<!-- The very first "if" tested to see if there were any Posts to -->
	<!-- display.  This "else" part tells what do if there weren't any. -->
	<p>Sorry, no posts matched your criteria.</p>
	<!-- REALLY stop The Loop. -->
	<?php endif; ?>
</div>
	<!-- Content single starts here -->
	<?php comments_template( '', true ); ?>
	<!-- Content single starts here -->
</article>