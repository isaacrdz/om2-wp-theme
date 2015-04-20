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
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive img-round')); } ?>
					
						<h2>Full Section</h2>
						<p>Morbi mollis lectus et ipsum sollicitudin varius. Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa animi laborum esse inventore accusantium omnis itaque. Repellat eveniet dolorem, autem animi aperiam soluta id possimus maiores sit error laboriosam! Natus!</p>
						<a class="btn btn-primary" href="blog-single.php">Leer más</a>
						<br>
						<br>
						<br>
						<br>
				</div>
				<br>
				<hr>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="http://lorempixel.com/750/300/" class="img-responsive img-rounded" alt="">
						<h2>Full Section</h2>
						<p>Morbi mollis lectus et ipsum sollicitudin varius. Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa animi laborum esse inventore accusantium omnis itaque. Repellat eveniet dolorem, autem animi aperiam soluta id possimus maiores sit error laboriosam! Natus!</p>
						<a class="btn btn-primary" href="#">Leer más</a>
						<button class="btn btn-primary">Leer Más</button>
				</div>
				<hr>
			</div>
			<? include('aside.php') ?>
		</div>
	</div>
</section>
<!--GRID SECTION END-->