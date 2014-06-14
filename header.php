<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">      
 
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="header navbar-wrapper row-fluid" id="main-menu">
    <div class="container">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri()."/images/propagita_logo_white.png"; ?>" alt=""></img></a>
      <div class="navbar">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <ul class="nav navbar-nav main-menu-nav">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Strona główna</a></li>
            <?php query_posts(array('post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'asc')); while (have_posts()) { the_post(); ?>
            <li><a href="<?php echo esc_url(home_url('/')); echo $post->post_name; ?>"><?php the_title(); ?></a></li>
            <?php } ?>
          </ul>
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div> <!-- /.container -->
  </div><!-- /.header -->
