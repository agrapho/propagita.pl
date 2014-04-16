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
<?php get_template_part('customizer'); ?>
<div class="wide">
     
<!-- NAVBAR
  ================================================== -->
  <div class="navbar-wrapper">
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container" id="topmenu">

      <div class="navbar">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('sitename'); ?></a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse pull-right">
            <?php   
                        $args = array(
                        'theme_location' => 'primary',
                        'depth' => 3,
                        'container' => false,
                        'menu_class' => 'nav',
                        'fallback_cb' => false
                        );

                         
                        wp_nav_menu($args);

                         
                        ?>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div> <!-- /.container -->
      
    <?php if(is_front_page()): ?>

      <div class="container">
        <div class="row-fluid">
          <div class="span7">
            <img class="gray aligncenter" src="<?php echo get_stylesheet_directory_uri()."/images/banner.png"; ?>" />
          </div>

          <div class="span5">
            <h2>Sensitive</h2>
            <p>Sensitive, Fully Responsive WordPress Theme using Bootstrap</p><br>
            <center>
              <a href="#" class="btn btn-large btn-info><i class="icon-fire icon-white"></i>Get It Now!</a>
            </center>
          </div> <!-- /.span5 -->
        </div> <!-- /.row-fluid -->
      </div> <!-- /.container -->

    <?php endif; ?>

  </div><!-- /.navbar-wrapper -->