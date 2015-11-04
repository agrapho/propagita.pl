<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/layout-grid/dist/css/layout-grid.min.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/propagita.pl/wp-content/plugins/lightbox-gallery/lightbox-gallery.css">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/layout-grid/dist/js/layout-grid.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/propagita.pl/wp-content/plugins/lightbox-gallery/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="http://127.0.0.1/propagita.pl/wp-content/plugins/lightbox-gallery/js/jquery.tooltip.js"></script>
<script type="text/javascript" src="http://127.0.0.1/propagita.pl/wp-content/plugins/lightbox-gallery/lightbox-gallery.js"></script>

<div class="row-fluid background background-cover">
  <div class="container gallery">

    <div class="lt-container lt-lg-h-10">
      <div class="lt
                  lt-lg-x-0 lt-lg-y-0 lt-lg-w-2 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/budynek_strona_glowna_11-1024x512.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-2 lt-lg-y-0 lt-lg-w-1 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-3 lt-lg-y-0 lt-lg-w-1 lt-lg-h-2">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-0 lt-lg-y-1 lt-lg-w-1 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-1 lt-lg-y-1 lt-lg-w-2 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-0 lt-lg-y-2 lt-lg-w-1 lt-lg-h-2">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-1 lt-lg-y-2 lt-lg-w-1 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-2 lt-lg-y-2 lt-lg-w-2 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-1 lt-lg-y-3 lt-lg-w-2 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
      <div class="lt
                  lt-lg-x-3 lt-lg-y-3 lt-lg-w-1 lt-lg-h-1">
        <?php display_gallery_item("wp-content/uploads/2014/06/ship-316557_640.jpg"); ?>
      </div>
    </div><!-- /.lt-container -->

  </div><!-- /.gallery -->
</div><!-- /.row-fluid -->

<?php get_footer(); ?>
