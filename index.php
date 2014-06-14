<?php get_header(); ?>

<div id="content" class="row-fluid">
  
  <div id="image-carousel" class="carousel slide">
    <div class="carousel-inner">
    <?php $temp_query = $wp_query;
          $args = array( 'post_type' => 'post',
                         'posts_per_page' => -1,
                         'order' => 'ASC' );
          $posts = get_posts( $args );
          $is_first_item = true;
          foreach ( $posts as $post ) {
             $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
             <div class="item <?php if ($is_first_item) { echo active; $is_first_item = false; } ?>">
               <img src="<?php echo $attachments[0]; ?>" alt=""></img>
             </div>
          <?php }
          $wp_query = $temp_query; ?>
    </div> <!-- /.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#image-carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#image-carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div><!-- /#image-carousel -->

  <div class="container">
    <div id="text-carousel-container" class="container">
      <div id="text-carousel" class="container">
        <div class="carousel slide">
          <div class="carousel-inner">
          <?php $args = array( 'post_type' => 'post',
                               'posts_per_page' => -1,
                               'order' => 'ASC' );
                $posts = get_posts( $args );
                $is_first_item = true;
                foreach ( $posts as $post ) { ?>
                   <div class="item <?php if ($is_first_item) { echo active; $is_first_item = false; } ?>">
                     <p><?php echo $post->post_content; ?></p>
                   </div>
                <?php } ?>
          </div> <!-- /.carousel-inner -->
        </div> <!-- /.carousel -->
      </div><!-- /#text-carousel -->
    </div><!-- /#text-carousel-container -->
  </div><!-- /.container -->
</div><!-- /#content -->
 
<?php get_footer(); ?>
