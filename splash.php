<?php

/*
	Template Name: Pure Life Splash
*/

include('headerSplash.php');  ?>

<!-- Header Section -->
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

		<div class="heroTop" style="background-image: url('<?php echo $image[0]; ?>')">
			<div class="topNav wrapper">
				<div class="hamburger"><a href="#"><i class="fa fa-bars"></i></a></div>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="hero container">
				<div class="heroTitle">
					<h3><?php echo get_bloginfo( 'description' )?></h3>
					<h1>PureLife</h1>
					<button class="mainBtn btn">Work with us</button>
				</div>
			</div>
		</div>


  </div> 
</div> <!-- /.main -->

<section class="body">
	<div class="container row serviceSection">
			<?php 
		
				$serviceQuery = new WP_Query(
						array(
								'posts_per_page' => 3,
								'post_type' => 'service',
								'post_not_in' => array( $post->ID )
							)
					);
		
			 ?>
		
			 <?php 
		
			 	if ($serviceQuery->have_posts()) : 
		
			  ?>
		
					<?php while ($serviceQuery->have_posts()) : $serviceQuery->the_post(); ?>
				<div class="descItem">
						<div class="descImg">
							<img src="<?php the_field('desc-image') ?>" alt="">
						</div>
					<h2><?php the_title() ?></h2>
					<p class="desc-summary"><?php the_field('desc-summary') ?></p>
				</div>
					<?php endwhile; ?>
		
				<?php endif; ?></div>

</section>

<section class="feature">
	<div class="featureDiv container column">
		<h4>Don't wait! Get started on your path to wellness today.</h4>
		<h2>Featured Plans</h2>
		
		<!-- shows 3 featured plans -->
		
		<?php 
		
			$featureQuery = new WP_Query(
					array(
							'posts_per_page' => 3,
							'post_type' => 'feature',
							'post_not_in' => array( $post->ID )
						)
				);
		
		 ?>
		
		 <div class="featureFlex row"><?php 
		 	
		 		if ($featureQuery->have_posts()) : 
		 	
		 	 ?>
		 				<?php while ($featureQuery->have_posts()) : $featureQuery->the_post(); ?>
		 				<article class="featureStyles column">
		 				<img src="<?php the_field('image') ?>" alt="">
		 				<h2><?php the_title() ?></h2>
		 				<p><?php the_field('description') ?></p>
		 				</article>
		 				<?php endwhile; ?>
		 	
		 			<?php endif; ?></div>
	</div>
	
</section>

<section class="book">
	
	<form class="container" action="">
		<h2>Request a Booking</h2>
		<form action="">
			<input type="text" placeholder="dd/mm/yy" id="bookDate">
			<select name='bookTime' placeholder="Select Time" id='bookTime'>
				<option value="morning" selected>Morning</option>
				<option value="afternoon">Afternoon</option>
				<option value="evening">Evening</option>
			</select>
			<button class="goBtn">Go</button>
		</form>

	</form>

</section>
	
	<?php include('latest.php') ?>

<section class="testimonials" style="background: 
<?php  ?>
">
	
	<div class='testimonialGallery js-flickity' data-flickity-options='{ "cellAlign": "left", "contain": false, "wrapAround": true, "autoPlay": 7000}'><?php 
		
			$testimonialQuery = new WP_Query(
					array(
							'posts_per_page' => -1,
							'post_type' => 'testimonial',
							'post_not_in' => array( $post->ID )
						)
				);
		
		 ?>
		
		 <?php 
		
		 	if ($testimonialQuery->have_posts()) : 
		
		  ?>
		
				
				<?php while ($testimonialQuery->have_posts()) : $testimonialQuery->the_post(); ?>
				<div class="gallery-cell">
					<img src="<?php the_field('testimonialImage') ?>" alt="">
					<h2><?php the_title() ?></h2>
					<p><?php the_field('testimonialQuote') ?></p>
				</div>
				<?php endwhile; ?>
		
			<?php endif; ?></div>

</section>

<section class="closing container">

	<?php 

		$closingQuery = new WP_Query(
					array(
							'posts_per_page' => 1,
							'post_type' => 'closing',
							'post_not_in' => array( $post->ID )
						)
				);
		
		 ?>
		
		 <?php 
		
		 	if ($closingQuery->have_posts()) : 
		
		  ?>
		
				
				<?php while ($closingQuery->have_posts()) : $closingQuery->the_post(); ?>
				<div class="closingFlex">
					<div class="closingLeft">
						<img src="<?php the_field('closing-image') ?>" alt="">
					</div>
					<div class="closingRight column">
						<h5><?php the_field('closing-description') ?></h5>
						<button class="btn secondBtn"><?php the_field('closing-button') ?></button>
					</div>
				</div>
				<?php endwhile; ?>
		
			<?php endif; ?>

	 ?>
<!-- 

	<h5>Start working on your body today; with our individual fitness program, in less than 90 days you will see a completely different person in the mirror!</h5>

 -->
</section>

<?php get_footer(); ?>