<?php
/*
Template Name: Oferta
*/
?>

<?php get_header(); ?>

<div class="row-fluid background background-cover">
  <div class="container offer">
    <!-- offer should have 4 subpages -->
    <?php $args = array( 'post_type' => 'page',
                         'posts_per_page' => -1,
                         'post_parent' => get_the_ID(),
                         'order' => 'ASC' );
          $posts = get_posts( $args );
          $i = 0;
          foreach ( $posts as $post ) {
             $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?> 
             <style>
                .offer .offer-category-<?php echo $i; ?>{
                    background-image: url(<?php echo $attachments[0]; ?>);
                }
             </style>
             <div class="offer-box">
               <a href="<?php echo get_permalink(); ?>">
                 <div class="offer-category offer-category-<?php echo $i; ?> background-cover">
                   <div class="vertical-text"><h2><?php echo the_title(); ?></h2></div>
                 </div> <!-- /.offer-category -->
               </a>
             </div> <!-- /.offer-box -->
           <?php
             $i++;
          }
          wp_reset_query(); ?>
  </div><!-- /.offer -->
</div><!-- /.row-fluid -->

<?php get_footer(); ?>
