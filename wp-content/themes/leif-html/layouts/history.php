  <?php 

$h_heading = $content['h_heading'];
$h_content = $content['h_content'];
$h_author = $content['h_author'];
$h_image = $content['h_image'];



$image_id = acfimg_get_image_id($h_image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);



 if(!empty($h_heading)) { ?>
  <!-- About History Start -->
    <section class="img-with-content">
      <div class="container-fluid pl-0">
        <div class="row">
          <div class="col-md-5">
            <div class="img-content-img">
              <img src="<?php echo $h_image; ?>" alt="History">
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-content-info">
              <h2 class="blue"><?php echo $h_heading; ?></h2>
              <div class="content">
                <?php echo $h_content; ?>
                <span><?php echo $h_author; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About History End -->

    <?php } ?>