<?php
/*
Template Name: Oferta
*/
?>

<?php get_header(); ?>

<div class="row-fluid background background-cover">
  <div class="row offer">
    <div class="span2">
    </div>
    <!-- offer should have 4 subpages -->
    <?php $args = array( 'post_type' => 'page',
                         'posts_per_page' => -1,
                         'post_parent' => get_the_ID(),
                         'order' => 'ASC' );
          $posts = get_posts( $args );
          $index = 0;
          foreach ( $posts as $post ) {
             $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?> 
             <style>
                .offer .offer-category-<?php echo $index; ?>{
                    background-image: url(<?php echo $attachments[0]; ?>);
                }
             </style>
             <div class="span2 offer-category-outer">
               <div class="offer-category offer-category-<?php echo $index; ?> background-cover">
                 <div class="vertical-text"><h2><?php echo the_title(); ?></h2></div>
               </div> <!-- /.offer-category -->
             </div> <!-- /.offer-category-outer -->
          <?php
             $index++;
          } wp_reset_query(); ?>
    <div class="span2">
    </div>
  </div><!-- /.offer -->
</div><!-- /.row-fluid -->

<?php get_footer(); ?>
