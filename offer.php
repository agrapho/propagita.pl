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
          $i = 0;
          foreach ( $posts as $post ) {
             $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?> 
             <style>
                .offer .offer-category-<?php echo $i; ?>{
                    background-image: url(<?php echo $attachments[0]; ?>);
                }
             </style>
             <div class="span2 offer-category-outer">
               <div class="offer-category offer-category-<?php echo $i; ?> background-cover">
                 <div class="vertical-text"><h2><?php echo the_title(); ?></h2></div>
               </div> <!-- /.offer-category -->
             </div> <!-- /.offer-category-outer -->
           <?php
             $i++;

             # display offer details
#             $temp_query = $wp_query;
#             $offer_category = get_category_by_slug($post->post_name);
#             $args = array( 'post_type' => 'post',
#                            'posts_per_page' => -1,
#                            'category' => $offer_category->term_id,
#                            'order' =>'ASC' );
#             $offer_details = get_posts( $args );
#             $j = 0;
#             foreach ( $offer_details as $offer_detail ) {
#                if (($j % 2) == 0) {
#                    echo '<div class="span2 offer-detail-outer">';
                } ?>
<!--                    <div class="offer-detail">
                        <p><?php echo $offer_detail->post_title; ?></p>
                    </div>
-->
          <?php #if (($j % 2) == 1) {
#                    echo '</div>';
#                }
#                $j++;
#             }
#
#             $wp_query = $temp_query;
#
#             break; -->
#          }
        wp_reset_query(); ?>
    <div class="span2">
    </div>
  </div><!-- /.offer -->
</div><!-- /.row-fluid -->

<?php get_footer(); ?>
