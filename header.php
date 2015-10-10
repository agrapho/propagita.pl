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
  <div class="language-selector">
    <?php $current_language = qtrans_getLanguage();
          if ($current_language == 'pl') {
            $languages = array('', '/en');
            $flags = array('pl', 'en');
          }
          elseif ($current_language == 'en') {
            $languages = array('/en', '');
            $flags = array('en', 'pl');
          }
          if ($pagename == '')
            $current_page_name = '';
          else
            $current_page_name = $pagename . '/';
          ?>
    <a href="<?php echo esc_url(home_url($languages[0] . '/' . $current_page_name)); ?>"><img src="<?php echo get_stylesheet_directory_uri()."/images/flags/" . $flags[0] . ".png"; ?>" alt=""></img></a>
    <a href="<?php echo esc_url(home_url($languages[1] . '/' . $current_page_name)); ?>"><img src="<?php echo get_stylesheet_directory_uri()."/images/flags/" . $flags[1] . ".png"; ?>" alt=""></img></a>
  </div><!-- /.language-selector -->

  <div class="facebook-link">
    <a target="_blank" href="http://www.facebook.com/pages/Propagita/298051673621723"><img src="<?php echo get_stylesheet_directory_uri()."/images/facebook_logo.png"; ?>" alt=""></img></a>
  </div><!-- /.facebook-link -->

  <div class="header navbar-wrapper row-fluid" id="main-menu">
    <div class="container">
      <a href="<?php echo esc_url(home_url('/')); echo current_language(); ?>" id="home_link"><img src="<?php echo get_stylesheet_directory_uri()."/images/propagita_logo_white.png"; ?>" alt=""></img></a>
      <div class="navbar">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <ul class="nav navbar-nav main-menu-nav">
            <?php $temp_query = $wp_query;
                  query_posts(array('post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'asc'));
                  while (have_posts()) { the_post(); ?>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); echo current_language(); echo $post->post_name . '/'; ?>"><?php the_title(); ?></a>
                        <div class="link-image-container">
                            <a href="<?php echo esc_url(home_url('/')); echo current_language(); echo $post->post_name . '/'; ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                        </div>
                    </li>
                  <?php }
                  $wp_query = $temp_query; ?>
          </ul>
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div> <!-- /.container -->
  </div><!-- /.header -->
