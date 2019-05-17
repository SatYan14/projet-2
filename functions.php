<?php
function nvstras_scripts() {
	wp_enqueue_style( 'nvstras_custom', get_template_directory_uri() . '/style.css', array(), '1.3.4' , 'all');
  } // fin function nvstras_scrpts

  add_action('wp_enqueue_scripts', 'nvstras_scripts');
  
  register_nav_menus( array( 
  	'menu-principal' => 'Menu principal'
  ) );

	// Register Custom Navigation Walker
  require_once('class-wp-bootstrap-navwalker.php');
// Bootstrap navigation
  function bootstrap_nav()
  {
  	wp_nav_menu( array(
  		'theme_location'    => 'menu-principal',
  		'depth'             => 2,
  		'container'         => 'false',
  		'menu_class'        => 'nav navbar-nav',
  		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
  		'walker'            => new wp_bootstrap_navwalker())
  );
  }
  function awesome_widget_setup() {

  	register_sidebar(
  		array(
  			'name' => 'Sidebar',
  			'id' => 'sidebar-1',
  			'class' => 'custom',
  			'description' => 'Standard Sidebar',
  			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  			'after_widget' => '</aside>',
  			'before_title' => '<h2 class="widget-title">',
  			'after_title' => '</h2>',
  		)
  	);
    register_sidebar(
      array(
        'name' => 'Footer Sidebar left',
        'id' => 'sidebar-2',
        'description' => 'Footer widget area left',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',

      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Sidebar 2 center',
        'id' => 'sidebar-3',
        'description' => 'Footer widget area center',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',

      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Sidebar 3 right',
        'id' => 'sidebar-4',
        'description' => 'Footer widget area right',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',

      )
    );
  }

  add_action('widgets_init','awesome_widget_setup');
?>