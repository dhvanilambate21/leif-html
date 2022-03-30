<?php
$heading = $content['heading'];
$image1 = $content['image1'];
$image2 = $content['image2'];
$image3 = $content['image3'];
$image4 = $content['image4'];
$image5 = $content['image5'];
$image6 = $content['image6'];
$acs_content1 = $content['acs_content1'];
$acs_content2 = $content['acs_content2'];
$acs_content3 = $content['acs_content3'];
$acs_content4 = $content['acs_content4'];
$acs_content5 = $content['acs_content5'];
$acs_content6 = $content['acs_content6'];

$image_id1 = acfimg_get_image_id($image1);
$image_alt_txt1 = get_post_meta($image_id1, '_wp_attachment_image_alt', true);

$image_id2 = acfimg_get_image_id($image2);
$image_alt_txt2 = get_post_meta($image_id2, '_wp_attachment_image_alt', true);

$image_id3 = acfimg_get_image_id($image3);
$image_alt_txt3 = get_post_meta($image_id3, '_wp_attachment_image_alt', true);

$image_id4 = acfimg_get_image_id($image4);
$image_alt_txt4 = get_post_meta($image_id4, '_wp_attachment_image_alt', true);

$image_id5 = acfimg_get_image_id($image5);
$image_alt_txt5 = get_post_meta($image_id5, '_wp_attachment_image_alt', true);

$image_id6 = acfimg_get_image_id($image6);
$image_alt_txt6 = get_post_meta($image_id6, '_wp_attachment_image_alt', true);

if(!empty($heading)) {
?>
<!-- Audio Consumer Stories Start -->
    <section class="audio-consumer-stories">
      <div class="row m-0">
        <div class="col-md-4 p-0">
          <div class="audio-consumer-stories-left">
            <h2 class="white"><?php echo $heading; ?></h2>
          </div>
        </div>
        <div class="col-md-8 p-0">
          <div class="audio-consumer-stories-right">
            <div class="row m-0">
              <div class="col-md-6">
                <div class="audio-consumer-stories-right-info">
                  <div class="icon">
                    <img src="<?php echo $image1; ?>">
                  </div>
                  <div class="audio-consumer-stories-right-info-text">
                    <p>
                      <?php echo $acs_content1; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="audio-consumer-stories-right-info">
                  <div class="icon">
                    <img src="<?php echo $image2; ?>">
                  </div>
                  <div class="audio-consumer-stories-right-info-text">
                    <p>
                      <?php echo $acs_content2; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="audio-consumer-stories-right-info">
                  <div class="icon">
                    <img src="<?php echo $image3; ?>">
                  </div>
                  <div class="audio-consumer-stories-right-info-text">
                    <p>
                      <?php echo $acs_content3; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="audio-consumer-stories-right-info">
                  <div class="icon">
                    <img src="<?php echo $image4; ?>">
                  </div>
                  <div class="audio-consumer-stories-right-info-text">
                    <p>
                      <?php echo $acs_content4; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="audio-consumer-stories-right-info">
                  <div class="icon">
                    <img src="<?php echo $image5; ?>">
                  </div>
                  <div class="audio-consumer-stories-right-info-text">
                    <p>
                      <?php echo $acs_content5; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="audio-consumer-stories-right-info">
                  <div class="icon">
                    <img src="<?php echo $image6; ?>">
                  </div>
                  <div class="audio-consumer-stories-right-info-text">
                    <p>
                      <?php echo $acs_content6; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Audio Consumer Stories End -->
    <?php } ?>