<!-- sidebar -->
<section id="sidebar" class="two seventh padded">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
<!-- static content goes here if sidebar is inactive -->
<?php endif; ?>
</section>
<!-- end sidebar -->