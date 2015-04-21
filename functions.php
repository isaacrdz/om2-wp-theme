<?php require_once('wp_bootstrap_navwalker.php'); ?>
<?php 
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));

	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img',750, 300, true);

	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">',
		'after_widget' => '</section">',
		'before_title' => '<h2">',
		'after_title' => '</div">',
		));
	

?>
<?php
	function create_post_types() {
        
    register_post_type( 'contacto',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' ),
            ),
            'supports' => array('title','editor','thumbnail', 'author', 'comments'),
            'public' => true,
            'has_archive' => true,
        )
    );
   
}

add_action( 'init', 'create_post_types' );