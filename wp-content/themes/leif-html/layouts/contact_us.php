<?php 
$heading = $content['heading'];
$contact_form_code  = $content['contact_form_code'];
$bg_image  = $content['bg_image'];


$image_id = acfimg_get_image_id($bg_image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

 if(!empty($heading)) { ?>

<!-- Schedule Online Start -->
    <section class="schedule-online"  style="background-image: url('<?php echo $bg_image; ?>');">
      <div class="container">
        <h2><?php echo $heading; ?></h2>
        <form class="wpcf7-form">
          <?php echo do_shortcode($contact_form_code); ?>
        </form>
      </div>
    </section>
    <!-- Schedule Online End -->
    <?php } ?>