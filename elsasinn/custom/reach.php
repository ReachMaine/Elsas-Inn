<?php /* custom modifications */

// separate sidebar widget area into two s.t. 2nd widget area on mobile will be under the content

	if ( function_exists('register_sidebar') ){
		 register_sidebar(array(
			'name' => 'sidebar under',
			'id' => 'sidebar_under',
			'description' => 'sidebar area under content at mobile.',
			/*'before_widget' => '<li id="%1$s" class="widget-container %2$s clear">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>', */
			'before_widget' => '<aside id="%1$s" class="widget %2$s">', // flatsome 
		    'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
		)); 
	} //function_exists('register_sidebar')	