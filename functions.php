<?php

//Add scripts needed for the theme

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
/*add_action( 'wp_enqueue_scripts', 'c3m_enqueue_scripts' );
function c3m_enqueue_scripts() {
    wp_register_script( 'countdown', TEMPLATEPATH .'/js/jquery.hoverIntent.js', array( 'jquery' ) TRUE);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'countdown' );
}*/
   wp_deregister_script('jquery');

function dogcompany_setup(){

// Adds RSS feed links to <head> for posts and comments.
add_theme_support( 'automatic-feed-links' );
	
load_theme_textdomain( 'dog-company', get_template_directory() . '/languages' );

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'dogcompany' ) );
	
		// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop

}
add_action( 'after_setup_theme', 'dogcompany_setup' );

function dogcompany_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
		$protocol = is_ssl() ? 'https' : 'http';
		
		wp_enqueue_style( 'dogcompany-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'dogcompany_scripts_styles' );
/*remove admin bar */
show_admin_bar(false);


/* register sidebar*/
function arphabet_widgets_init() {




if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'sidebar', //Name your sidebar
        'description' => 'These widgets will appear in the Right sidebar.',
        'before_widget' => '<div class="sidebar">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<div class="side-title"><h3>', //Displays before title, after widget start
        'after_title' => '</h3></div>' //Displays after title
    ));
	/*
if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'login', //Name your sidebar
        'description' => 'Do not add anything in here.',
        'before_widget' => '<div class="login-widget">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));
	//endif;
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'slider', //Name your sidebar
        'description' => 'Slider goes here',
        'before_widget' => '<div class="pull-left">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));	*/
	}
add_action( 'widgets_init', 'arphabet_widgets_init' );
	
	/*comment system */
	if ( ! function_exists( 'dogcompany_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function dogcompany_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'dogcompany' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'dogcompany' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'dogcompany' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;

if ( ! function_exists( 'dogcompany_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own dogcompany_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function dogcompany_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'dogcompany' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'dogcompany' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="avatar-wrap">
				<?php	echo get_avatar( $comment, 100 );?>
			</div>
			<div class="comment-wrap">
				<div class="comment-meta comment-author vcard">
					<?php
						printf( '<cite class="fn">%1$s %2$s</cite>',
							get_comment_author_link(),
							// If current post author is also comment author, make it known visually.
							( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'dogcompany' ) . '</span>' : ''
						);
						printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
							esc_url( get_comment_link( $comment->comment_ID ) ),
							get_comment_time( 'c' ),
							/* translators: 1: date, 2: time */
							sprintf( __( '%1$s at %2$s', 'dogcompany' ), get_comment_date(), get_comment_time() )
						);
					?>
				</div><!-- .comment-meta -->

				<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'dogcompany' ); ?></p>
				<?php endif; ?>

				
					<section class="comment-content comment">
						<?php comment_text(); ?>
					</section><!-- .comment-content -->

						<?php edit_comment_link( __( 'Edit', 'dogcompany' ), '<div class="edit-wrap"><a class="edit-link">', '</a></div>' ); ?>
					<div class="reply">
						<?php
							global $phpbbForum;
							if($phpbbForum->user_logged_in()) :
								comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'dogcompany' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
							else: ?>
							<a onclick="openLog()" class="reply-login" href="#">Log in</a>
						<?php
							endif;
						?>
					</div><!-- .reply -->
			</div>
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

if ( ! function_exists( 'dogcompany_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own dogcompany_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function dogcompany_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'dogcompany' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'dogcompany' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'dogcompany' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'dogcompany' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'dogcompany' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'dogcompany' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;
function get_comment_form_wpu(){
global $phpbbForum;
		if (!$phpbbForum->user_logged_in()):
		echo '<a>You must be </a><a href='. login_redirect() .'>Logged in </a><a>to post a comment</a>';
		else:
		$current_user = wp_get_current_user();
		$comment_args = array(
		'logged_in_as' => '<p class="logged-in-as">' .
    sprintf('Logged in as <a href="%1$s">%2$s</a>',call_profile(),$current_user->user_login
    ) . '</p>',);
		comment_form($comment_args); 
		endif;
}
function admin_button(){

	if(current_user_can('remove_users')):
		echo '<li><a href="/wp-admin">Admin</a></li>';
	elseif(current_user_can('publish_posts')):
		echo '<li><a href="wp-admin/post-new.php">Post</a></li>';
	else:
	return null;
	endif;

}
function integ_logout_uri(){
	global $user_ID, $db, $auth, $phpbbForum, $wpUnited, $phpEx, $config;
	//$logouturl = $phpbbForum->get_board_url() . append_sid('ucp.' . $phpEx .'?mode=logout') . '&amp;redirect=';
	//echo $logouturl;
	 
	$loginLang = ($phpbbForum->user_logged_in()) ? sprintf($phpbbForum->lang['LOGOUT_USER'], $phpbbForum->get_username()) : $phpbbForum->lang['LOGIN'];
	$loginAction = ($phpbbForum->user_logged_in()) ? '?mode=logout' : '?mode=login';
    ?>	
	<li class="icon-logout"><a href="<?php echo $phpbbForum->append_sid($phpbbForum->get_board_url() . 'ucp.' . $phpEx . $loginAction); ?>" title="<?php echo $loginLang; ?>" accesskey="x">Logout</a></li>
	<?php
}
function integ_login_uri(){
	global $wpUnited, $phpEx, $phpbbForum;
	$logouturl = $phpbbForum->get_board_url() . append_sid('ucp.' . $phpEx .'?mode=login') . '&amp;redirect=';
	echo $loginurl;
}
function call_profile(){
	global $phpbbForum, $phpEx, $auth;
	$profileurl = $phpbbForum->append_sid($phpbbForum->get_board_url() . 'ucp.' . $phpEx) . $adj . $phpbbForum->lang['PROFILE'];
	return $profileurl;
}
function call_register(){
	global $wpUnited, $phpEx, $phpbbForum;
	$registerurl = $phpbbForum->get_board_url() . append_sid('ucp.' . $phpEx .'?mode=register') . '&amp;redirect=';
	echo $registerurl;
}
function login_form(){
	echo get_login_form();
}
function login_redirect(){
	global $phpbbForum, $phpEx, $auth, $user_ID, $db, $auth, $wpUnited, $config;
	$redir = wpu_get_redirect_link_pages();
	$login_link = $phpbbForum->get_board_url() .append_sid('ucp.'.$phpEx.'?mode=login') . '&amp;redirect=' . $redir;
	return $login_link;
}
function wpu_get_redirect_link_pages() {
	global $phpbbForum;
	if(!empty( $_SERVER['REQUEST_URI'])) {
		$protocol = empty($_SERVER['HTTPS']) ? 'http:' : ((strtolower($_SERVER["HTTPS"]) == 'on') ? 'https:' : 'http:');
		$protocol = ($_SERVER['SERVER_PORT'] == '80') ? $protocol : $protocol . $_SERVER['SERVER_PORT'];
		$link = $protocol . '//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	} else {
		$link = get_option('home');
	}
	$fStateChanged = $phpbbForum->foreground();
	$phpbbForum->restore_state($fStateChanged);
	return urlencode(esc_attr($link));
}
function get_login_form(){
	global $user_ID, $db, $auth, $phpbbForum, $wpUnited, $phpEx, $config;
	
	$defaults = array('before' => '<li>', 'after' => '</li>', 'showPMs' => 1, 'showLoginForm' => 1, 'showRankBlock' => 1, 'showNewPosts' => 1, 'showWriteLink' => 1, 'showAdminLinks' => 1, 'autoLogin' => 1);
	extract(_wpu_process_args($args, $defaults));
	if ( $showLoginForm ) {
		$ret = '';
		$redir = wpu_get_redirect_link();
		$login_link = $phpbbForum->append_sid('ucp.'.$phpEx.'?mode=login') . '&amp;redirect=' . $redir;
		$ret .= '<form class="wpuloginform" method="post" action="' . $phpbbForum->get_board_url() . $login_link . '">';
		$ret .= $before . '<label for="phpbb_username">' . $phpbbForum->lang['USERNAME'] . '</label> <input tabindex="1" class="inputbox autowidth" type="text" name="username" id="phpbb_username"/>' . $after;
		$ret .= $before . '<label for="phpbb_password">' . $phpbbForum->lang['PASSWORD'] . '</label> <input tabindex="2" class="inputbox autowidth" type="password" name="password" id="phpbb_password" maxlength="32" />' . $after;
		/*if ( $autoLogin ) {
			$ret .= $before . '<input tabindex="3" type="checkbox" id="phpbb_autologin" name="autologin" /><label for="phpbb_autologin"> ' . __('Remember me', 'wp-united') . '</label>' . $after;
		}*/
		$ret .= $before . '<a href="' . $phpbbForum->append_sid($phpbbForum->get_board_url()."ucp.php?mode=register") . '">' . __('Register', 'wp-united') . '</a>' . $after;
		$ret .= $before . '<a href="'. $phpbbForum->append_sid($phpbbForum->get_board_url().'ucp.php?mode=sendpassword') . '">' . __('Forgot Password?', 'wp-united') . '</a>' . $after;
		$ret .= $before . '<input type="submit" name="login" class="wpuloginsubmit" value="' . __('Login') . '" />' . $after;
		$ret .= '</form>';
	} else {
		$ret .= $before . '<a href="' . $phpbbForum->append_sid($phpbbForum->get_board_url() . 'ucp.' . $phpEx . $loginAction) . '" title="' . $loginLang .  '</a>';
	}
	return $ret;
}

add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );
function prefix_load_cat_posts () {
	$cat_id = $_POST[ 'cat' ];
		 $args = array (
		'cat' => $cat_id,
		'posts_per_page' => 5,
		'order' => 'DESC'

	);
	global $post;
	$posts = get_posts( $args );

	ob_start ();

	foreach ( $posts as $post ):
	setup_postdata( $post ); ?>


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
<?php endforeach;  
wp_reset_postdata();
wp_reset_query(); 
   $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
}

/*
add_action( 'wp_ajax_nopriv_load-filter', 'AJAX_get_page');
add_action( 'wp_ajax_load-filter', 'AJAX_get_page');
function AJAX_get_page(){
	global  $response;
	$link = $_POST['linkURL'];
	ob_start();
	$response = file_get_contents($link);
	ob_end_clean();
	echo $response;
	die();
}*/
   
   
   
   
   
?>