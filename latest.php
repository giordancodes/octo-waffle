<section class="latest container">
	<h2>Latest from the blog</h2>
	
	<ul class="blogLatest row">

	<?php $latestQuery = new WP_Query(array(
		'posts_per_page' => 3
	)); ?>

	<?php if ( $latestQuery->have_posts() ) : ?>
		<?php while ( $latestQuery->have_posts() ) : $latestQuery->the_post(); ?>
			
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php echo the_post_thumbnail('medium'); ?>
					<p class="blogTitle"><?php the_title(); ?></p>
					<p><?php the_excerpt(); ?></p>
				</a>
			</li>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else:  ?>
	<?php endif; ?>

</ul>
</section>