<?php
 
if ( ! isset( $content_width ) ) $content_width = 960;

//Theme setup function 
function theme_setup(){
    register_nav_menus( array(
        'primary' =>  'Top Menu'
    ) );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
 }

//generate thumbnail 
function generate_thumb($post, $size='', $extra = array(), $echo = true){    
    $size = $size?$size:'thumbnail';   
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); 
    $large_image_url = $large_image_url[0];    
    $large_image_url = $large_image_url?$large_image_url:'';
    $class = isset($extra['class'])?$extra['class']:'';
    if($large_image_url!=''&&is_array($size)){
        $path = str_replace(site_url('/'), ABSPATH, $large_image_url);
        $thumb = generate_dynamic_thumb($path, $size);
        $thumb = str_replace(ABSPATH, site_url('/'), $thumb);
        $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
        $img = "<img src='".$thumb."' alt='{$alt}' class='{$class}' />";
        if($echo) { echo $img; return; }
        else
            return $img;
    }
    if($echo&&has_post_thumbnail($post->ID ))
    echo get_the_post_thumbnail($post->ID, $size, $extra );
    else if(!$echo&&has_post_thumbnail($post->ID ))
    return get_the_post_thumbnail($post->ID, $size, $extra );  
    else if($echo)
    echo "";
    else
    return "";
    
} 

//post thumbnail function
function generate_post_thumb($size='', $echo = true, $extra = null){
    global $post;
    $size = $size?$size:'thumbnail';
    $class = isset($extra['class'])?$extra['class']:'';

    if(is_array($size))
    {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
        $large_image_url = $large_image_url[0];
        if($large_image_url!=''&&is_array($size)){
            $path = str_replace(site_url('/'), ABSPATH, $large_image_url);
            $thumb = generate_dynamic_thumb($path, $size);
            $thumb = str_replace(ABSPATH, site_url('/'), $thumb);
            $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
            $img = "<img src='".$thumb."' alt='{$alt}' class='{$class}' />";
            if($echo) { echo $img; return; }
            else
                return $img;
        }
    }
    if($echo&&has_post_thumbnail($post->ID ))
        echo get_the_post_thumbnail($post->ID, $size, $extra );
    else if(!$echo&&has_post_thumbnail($post->ID ))
        return get_the_post_thumbnail($post->ID, $size, $extra );
    else if($echo)
        echo "";
    else
        return "";
}

function generate_dynamic_thumb($path, $size){
    $name_p = explode(".",$path);
    $ext = ".".end($name_p);
    $thumbpath = str_replace($ext, "-".implode("x", $size).$ext, $path);
    if(file_exists($thumbpath)) return $thumbpath;
    $image = wp_get_image_editor( $path );
    if ( ! is_wp_error( $image ) ) {
        $image->resize( $size[0], $size[1], true );
        $image->save( $thumbpath );
    }
    return $thumbpath;
}
 
 function enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/bootstrap/js/bootstrap.min.js',array('jquery'));
    wp_enqueue_script('functions',get_template_directory_uri().'/js/functions.js',array('jquery'), '0.1', true);

    wp_enqueue_style('bootstrap',get_template_directory_uri().'/bootstrap/css/bootstrap.css');
    wp_enqueue_style('main',get_stylesheet_uri());
    if (is_front_page())  {
      wp_enqueue_style('main-hidden', get_template_directory_uri()."/hidden.css");
    }
 }

 // wp_title filter
 function page_title( $old_title){
    $sep = '»';
    $ssep = ' ' . $sep . ' ';

    // get the page number we're on (index)
    if( get_query_var( 'paged' ) )
    $num = $ssep . 'page ' . get_query_var( 'paged' );

    // get the page number we're on (multipage post)
    elseif( get_query_var( 'page' ) )
    $num = $ssep . 'page ' . get_query_var( 'page' );

    // else
    else $num = NULL;

    $site_description = get_bloginfo( 'description', 'display' );
    if ( is_home() && $site_description )
    $old_title .=  $ssep  . $site_description;

    // concoct and return new title
    return get_bloginfo( 'name' ) . $old_title . $num;
 }

 function current_language() {
    $lang = qtrans_getLanguage();
    if ($lang == 'pl')
      return '';
    else
      return $lang . '/';
 }

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');
add_filter( 'wp_title', 'page_title');
add_action( 'after_setup_theme', 'theme_setup' );
