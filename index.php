<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main container">
  <div class="leftSide">

    <div class="content column">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
    <?php get_sidebar(); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>