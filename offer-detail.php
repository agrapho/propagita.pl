<?php $attachments = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<div class="offer-detail-img background-cover" style="background-image: url(<?php echo $attachments[0]; ?>)">
    <div class="offer-detail-text">
        <h4><?php $title = get_the_title(); display_offer_detail_name($title); ?></h4>
        <p><?php echo $post->post_content; ?></p>
    </div>
</div>
