<?php
/*
Template Name: Oferta szczegółowa
*/
?>

<?php get_header(); ?>

<div class="row-fluid background background-cover">
  <div class="container offer">
    <?php $offer_index = $post->menu_order;
          $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
          $offer_thumbnail = $attachments[0];
          $offer_title = get_the_title();
    ?>
          <style>
             .offer .offer-category {
                 background-image: url(<?php echo $offer_thumbnail; ?>);
             }
          </style>
    <?php $i = 0;
          $offer_category = get_category_by_slug($post->post_name);
          $args = array( 'post_type' => 'post',
                         'posts_per_page' => -1,
                         'category' => $offer_category->term_id,
                         'order' =>'ASC' );
          $posts = get_posts( $args );
          # offer details should have 4 rows
          foreach ( $posts as $post ) {
             if (floor($i / 2) == $offer_index) {
               if (($i % 2) == 0) { ?> 
                 <div class="offer-box">
                   <div class="offer-category active-offer background-cover">
                     <div class="vertical-text"><h2><?php echo $offer_title; ?></h2></div>
                   </div> <!-- /.offer-category -->
                 </div> <!-- /.offer-box -->
         <?php } else { ?>
               <!-- display nothing -->
         <?php }
             }

             if (($i % 2) == 0) { ?>
               <div class="offer-box">
                 <div class="offer-detail-box offer-details-style-<?php echo $offer_index; ?>">
                   <div class="offer-detail offer-detail-top">
                     <?php get_template_part( 'offer-detail', get_post_format($post->ID) ); ?>
                   </div>
       <?php } elseif (($i % 2) == 1) { ?>
                   <div class="offer-detail offer-detail-bottom">
                     <?php get_template_part( 'offer-detail', get_post_format($post->ID) ); ?>
                   </div>
                 </div> <!-- /.offer-detail-box -->
               </div> <!-- /.offer-box -->
       <?php }
             $i++;
          }
        wp_reset_query(); ?>
  </div><!-- /.offer -->
</div><!-- /.row-fluid -->

<?php get_footer(); ?>
