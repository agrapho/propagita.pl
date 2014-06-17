<?php get_header(); ?>

<div id="content" class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>
</div><!-- /#content -->

<?php get_footer(); ?>
