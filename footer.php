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
				<input type="text" placeholder="Email">
			</div>
			<?php endwhile; ?>

		<?php endif; ?>
  </div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68381185-3', 'auto');
  ga('send', 'pageview');

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>	