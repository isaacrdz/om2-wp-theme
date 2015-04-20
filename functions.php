<?php require_once('wp_bootstrap_navwalker.php'); ?>
<?php 
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));

	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img',750, 300, true);
	

?>