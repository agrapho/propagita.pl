<?php get_header(); ?>

<div class="row-fluid">

    <div id="header-carousel" class="carousel slide">
    <div class="carousel-inner">
    <?php $args = array( 'post_type' => 'post',
                         'posts_per_page' => -1,
                         'order' => 'ASC' );
          $posts = get_posts( $args );
          $is_first_item = true;
          foreach ( $posts as $post ) {
             $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
             <div class="item <?php if ($is_first_item) { echo active; $is_first_item = false; } ?>">
               <img src="<?php echo $attachments[0]; ?>" alt=""></img>
             </div>
          <?php } ?>
    </div> <!-- /.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#header-carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#header-carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>

</div><!-- /.row-fluid -->
 
<?php get_footer(); ?>
