<?php get_header(); ?>

<div class="row-fluid">
  <div id="header-background" class="background background-cover">
    <span class="centerer"></span>
    <div class="centered">
      <img src="<?php echo get_stylesheet_directory_uri()."/images/propagita_logo_black.png"; ?>" alt=""></img>
      <h2><?php echo bloginfo('description'); ?></h2>
    </div>
  </div>

  <div id="image-carousel" class="carousel slide">
    <div class="carousel-inner">
    <?php $offer_page = get_page_by_path('oferta');
          $args = array( 'post_type' => 'page',
                         'posts_per_page' => -1,
                         'post_parent' => $offer_page->ID,
                         'order' => 'ASC' );
          $offers = get_posts( $args );
          $is_first_item = true;
          foreach ( $offers as $offer ) { ?>
             <div class="item <?php if ($is_first_item) { echo active; $is_first_item = false; } ?>">
               <img src="<?php echo get_stylesheet_directory_uri()?>/images/bg_<?php echo $offer->post_name; ?>.jpg" alt=""></img>
             </div>
          <?php } wp_reset_query(); ?>
    </div> <!-- /.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#image-carousel" data-slide="prev">
      &lsaquo;
    </a>
    <a class="right carousel-control" href="#image-carousel" data-slide="next">
      &rsaquo;
    </a>
  </div><!-- /#image-carousel -->

  <div class="container">
    <div id="text-carousel-container" class="container">
      <div id="text-carousel" class="container">
        <div class="carousel slide">
          <div class="carousel-inner">
          <?php $args = array( 'post_type' => 'page',
                               'posts_per_page' => -1,
                               'post_parent' => $offer_page->ID,
                               'order' => 'ASC' );
                $offers = get_posts( $args );
                $is_first_item = true;
                foreach ( $offers as $offer ) { ?>
                   <div class="item <?php if ($is_first_item) { echo active; $is_first_item = false; } ?>">
                     <p>
                     <?php $current_language = qtrans_getLanguage();
                           echo qtrans_use($current_language, $offer->post_content);
                      ?>
                     </p>
                   </div>
                <?php } wp_reset_query(); ?>
          </div> <!-- /.carousel-inner -->
        </div> <!-- /.carousel -->
      </div><!-- /#text-carousel -->
    </div><!-- /#text-carousel-container -->
  </div><!-- /.container -->
</div>
 
<?php get_footer(); ?>
