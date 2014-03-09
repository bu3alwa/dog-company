
<article id="main" class="five seventh padded">
<?php

$categories = get_categories(); ?>

<ul id="category-menu">
	<li id="filter"><a href="#">Filter: </a></li>
	<li id="cat-0"><a class="all ajax" onclick="cat_ajax_get('0');return false;" href="#">All</a></li>
    <?php foreach ( $categories as $cat ) { ?>
    <li id="cat-<?php echo $cat->term_id; ?>"><a class="<?php echo $cat->slug; ?> ajax" onclick="cat_ajax_get('<?php echo $cat->term_id; ?>');return false;" href="#"><?php echo $cat->name; ?></a></li>

    <?php } ?>
</ul>
<div id="loading-animation" style="display: none;"><img style="width: 75px;" src="<?php echo get_template_directory_uri(); ?>/images/loading.gif"/></div>
<div id="category-post-content">
	<!-- Start the Loop. -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Test if the current post is in category 3. -->
	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
	<!-- Otherwise, the div box is given the CSS class "post". -->
	<article class="post">
		<!-- Display the Title as a link to the Post's permalink. -->
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
		<div class="row pad-bottom">
		<!-- Display a comma separated list of the Post's Categories. -->
		<small class="postmetadata pull-left"><?php the_category(', '); ?></small>
		<small class="date pull-left"> Posted by <?php the_author_posts_link() ?> on <?php the_time('F jS, Y') ?></small>
		
		</div>
		<!-- Display the Post's content in a div box. -->
		<article id="entry">
			<?php the_content('Read More here...'); ?>
		</article>
	</article> <!-- closes the first div box -->
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; ?>
	<p><?php next_posts_link(); ?></p>
	<p><?php previous_posts_link(); ?></p>
	<?php else: ?>
	<!-- The very first "if" tested to see if there were any Posts to -->
	<!-- display.  This "else" part tells what do if there weren't any. -->
	<p>Sorry, no posts matched your criteria.</p>
	<!-- REALLY stop The Loop. -->
	<?php endif; ?>

</div>
<script>
function cat_ajax_get(catID) {
    jQuery("a.ajax").removeClass("current");
    jQuery("a.ajax").addClass("current");
 //adds class current to the category menu item being displayed so you can style it with css
    jQuery("#category-post-content").fadeOut(400);
	jQuery("#loading-animation").delay(400).fadeIn(200);
    var ajaxurl = 'http://dev.dog-company.com/wp-admin/admin-ajax.php';
    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "load-filter", cat: catID },
        success: function(response) {
            jQuery("#category-post-content").html(response);
            jQuery("#loading-animation").delay(200).fadeOut(200);
			jQuery("#category-post-content").delay(400).fadeIn(400);
            return false;
        }
    });
}
</script>


</article>