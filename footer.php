<footer>
<div class="footerBtn">
	<button class="mainBtn btn">Contact Form</button>
</div>
  <div class="container row footerFlex">
    <?php 

		$footerQuery = new WP_Query(
				array(
						'posts_per_page' => 1,
						'post_type' => 'footer',
						'post_not_in' => array( $post->ID )
					)
			);

	 ?>

	 <?php 

	 	if ($footerQuery->have_posts()) : 

	  ?>

			<?php while ($footerQuery->have_posts()) : $footerQuery->the_post(); ?>
			<div class="leftThird">
				<h1><?php the_field('footer-logo')?></h1>
				<p><?php the_field('tag-copy')?></p>
			</div>
			<div class="centerThird">
				<p class='titles'><?php the_field('contact-title')?></p>
				<p><?php the_field('contact-email')?></p>
				<p><?php the_field('address-phone')?></p>
			</div>
			<div class="rightThird">
				<p class='titles'><?php the_field('subscribe-title')?></p>
				<p><?php the_field('subscribe-info')?></p>
			</div>
			<?php endwhile; ?>

		<?php endif; ?>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>	