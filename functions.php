<?php
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
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));
if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'login', //Name your sidebar
        'description' => 'Do not add anything in here.',
        'before_widget' => '<div class="widget">', // Displays before widget
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
    ));	
	}
add_action( 'widgets_init', 'arphabet_widgets_init' );
	?>
