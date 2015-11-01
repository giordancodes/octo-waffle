<?php get_header();  ?>

<div class="main container">
  <div class="leftSide">

    <div class="content page">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
    <?php get_sidebar(); ?>
</div> <!-- /.main -->
<div class="latest-single"><?php include('latest.php') ?></div>
<?php get_footer(); ?>