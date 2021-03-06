<?php
// register a 'Primary' and a 'Secondary' menu
function my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Primary Menu' ),
      'footer-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'my_menus' );

// register a main sidebar area
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

// remove autogenerated paragraph tags
remove_filter( 'the_content', 'wpautop' );