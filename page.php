<?php get_header(); ?>

<div id="content" class="container">
  <?php $temp_query = $wp_query;
        while ( have_posts() ) { the_post();
            echo the_content(); 
        }
        $wp_query = $temp_query; ?>
</div><!-- /#content -->

<?php get_footer(); ?>
