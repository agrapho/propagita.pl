<?php get_header(); ?>

<div id="content-container" class="container background background-cover">
  <div id="content" class="container">
    <?php $temp_query = $wp_query;
        while ( have_posts() ) { the_post();
            echo the_content(); 
        }
        $wp_query = $temp_query; ?>
  </div><!-- /#content -->
</div><!-- /#content-container -->

<?php get_footer(); ?>
