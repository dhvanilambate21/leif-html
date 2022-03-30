  <?php 

$heading = $content['heading'];
$guarantee_content = $content['guarantee_content'];
$image = $content['image'];



$image_id = acfimg_get_image_id($image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);



 if(!empty($heading)) { ?>
  <!-- About History Start -->
    <section class="img-with-content">
      <div class="container-fluid pl-0">
        <div class="row">
          <div class="col-md-5">
            <div class="img-content-img">
              <img src="<?php echo $image; ?>" alt="History">
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-content-info">
              <h2 class="blue"><?php echo $heading; ?></h2>
              <div class="content">
                <?php echo $guarantee_content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About History End -->

    <?php } ?>