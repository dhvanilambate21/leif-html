  <?php 

$heading = $content['heading'];
$latest_claims_news_content = $content['latest_claims_news_content'];
$image = $content['image'];


$image_id = acfimg_get_image_id($image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);



 if(!empty($heading)) { ?>
  <!-- Breadcrumb Start -->
    <section class="breadcrumbs">
      <img src="<?php echo $image; ?>" alt="About">
      <div class="breadcrumb-info">
        <h1><?php echo $heading; ?></h1>
        <p>
          <?php echo $latest_claims_news_content; ?>
        </p>
      </div>
    </section>
    <!-- Breadcrumb End -->
    <?php } ?>