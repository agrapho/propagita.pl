<?php get_header(); ?>

<div id="content" class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php echo the_content(); ?>
  <?php endwhile; ?>
</div><!-- /#content -->

<?php get_footer(); ?>
