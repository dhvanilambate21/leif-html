<?php 

$claims_image = $content['claims_image'];
$claims_heading = $content['claims_heading'];
$claims_content = $content['claims_content'];
$image1 = $content['image1'];
$image2 = $content['image2'];
$image3 = $content['image3'];
$image4 = $content['image4'];
$service_content1 = $content['service_content1'];
$service_content2 = $content['service_content2'];
$service_content3 = $content['service_content3'];
$service_content4 = $content['service_content4'];


$image_id1 = acfimg_get_image_id($image1);
$image_alt_txt1 = get_post_meta($image_id1, '_wp_attachment_image_alt', true);

$image_id2 = acfimg_get_image_id($image2);
$image_alt_txt2 = get_post_meta($image_id2, '_wp_attachment_image_alt', true);

$image_id3 = acfimg_get_image_id($image3);
$image_alt_txt3 = get_post_meta($image_id3, '_wp_attachment_image_alt', true);

$image_id4 = acfimg_get_image_id($image4);
$image_alt_txt4 = get_post_meta($image_id4, '_wp_attachment_image_alt', true);

$image_id = acfimg_get_image_id($claims_image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

 if(!empty($claims_image)) { ?>
<!-- Claims Advocacy Start -->
    <section class="claims-advocacy">
      <div class="container-fluid pl-0">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="claims-advocacy-img">
              <img src="<?php echo $claims_image; ?>" alt="Claims Advocacy">
            </div>
          </div>
          <div class="col-md-7">
            <div class="claims-advocacy-info">
              <div class="row m-0 align-items-center">
                <div class="col-md-6">
                  <h2><?php echo $claims_heading; ?></h2>
                  <div class="content">
                    <p>
                      <?php echo $claims_content; ?>
                    </p>
                    <div class="btn-custom">
                      <a href="#" class="btn-yellow"><span>READ MORE</span></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="claims-advocacy-right">
                    <div class="claims-advocacy-row align-items-center">
                      <div class="claims-advocacy-icon">
                        <img src="<?php $image1; ?>" alt="Audio">
                      </div>
                      <div class="claims-advocacy-row-info">
                        <span>
                          <?php $service_content1; ?>
                        </span>
                      </div>
                    </div>

                    <div class="claims-advocacy-row align-items-center">
                      <div class="claims-advocacy-icon">
                        <img src="<?php $image2; ?>" alt="Written">
                      </div>
                      <div class="claims-advocacy-row-info">
                        <span>
                          <?php $service_content2; ?>
                        </span>
                      </div>
                    </div>

                    <div class="claims-advocacy-row align-items-center">
                      <div class="claims-advocacy-icon">
                        <img src="<?php $image3; ?>" alt="Video">
                      </div>
                      <div class="claims-advocacy-row-info">
                        <span>
                          <?php $service_content3; ?>
                        </span>
                      </div>
                    </div>

                    <div class="claims-advocacy-row align-items-center">
                      <div class="claims-advocacy-icon">
                        <img src="<?php $image4; ?>" alt="Insurance">
                      </div>
                      <div class="claims-advocacy-row-info">
                        <span>
                          <?php $service_content4; ?>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Claims Advocacy End -->
        <?php } ?>