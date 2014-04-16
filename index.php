<?php get_header(); ?>

<div class="container">

<?php if(is_front_page()): ?>
    <div class="row">
      <?php for($i=1;$i<=4;$i++){ ?>
        <div class="span3">
        <?php $tpid = (int)$i; $intropage = get_page($tpid); $introcontent = strip_tags(strip_shortcodes($intropage->post_content),"p,br"); if (preg_match('/^.{1,80}\b/s', $introcontent, $match)) $introcontent = $match[0]; else $introcontent = substr($introcontent,0,80);  ?>
        <div class="about well">
          <a href="<?php echo get_permalink($intropage->ID); ?>"><?php generate_thumb($intropage,array(500,300), array('class'=>'img')); ?></a>
          <div class="entry-content">
          <h2><?php echo $intropage->post_title; ?></h2>
          <p><?php echo $introcontent; ?></p>
          </div>
          <a href="<?php echo get_permalink($intropage->ID); ?>" class="btn btn-info btn-block">View details</a>
        </div>  
        </div>
        <?php } ?>
       
        <!-- /.span4 -->
 
<div class="clear"></div>
<div>
</div>          

</div><!-- /.span4 -->
         
    </div>
<?php endif; ?> 
 
<?php get_footer(); ?>