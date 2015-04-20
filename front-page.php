<?php 

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
}
get_header();
?>

	<?php include (TEMPLATEPATH. '/partials//slider.php') ?>	
	<?php include (TEMPLATEPATH. '/partials/services.php') ?>
	<?php include (TEMPLATEPATH. '/partials/pricing.php') ?>    
	<?php include (TEMPLATEPATH. '/partials/work.php') ?>
	





<?php


get_footer()
?>
