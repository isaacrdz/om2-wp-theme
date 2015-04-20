<?php get_header()?>
<!--GRID SECTION START-->
<section id="blog" >
	<div class="container">
		<div class="row text-center header animate-in" data-anim-type="fade-in-up">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Blog </h3>
				<hr />
			</div>
		</div>
		<div class="row animate-in" data-anim-type="fade-in-up">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive img-round')); } ?>
	
	<h2> <?php the_title() ?> </h2>
	<p> <?php the_content() ?> </p>

	<br>
	<br>
	<br>
	<br>
</div>
<br>
<hr>


<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
			</div>
<?php get_sidebar()?>
		</div>
	</div>
</section>
<!--GRID SECTION END-->
<?php get_footer()?>