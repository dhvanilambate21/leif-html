<?php 

$heading = $content['heading'];
$image1 = $content['image1'];
$image2 = $content['image2'];
$image = $content['image'];

$sub_heading1 = $content['sub_heading1'];
$sub_heading2 = $content['sub_heading2'];
$sub_content1 = $content['sub_content1'];
$sub_content2 = $content['sub_content2'];

$lt_content = $content['lt_content'];

$image_id = acfimg_get_image_id($image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

$image_id1 = acfimg_get_image_id($image1);
$image_alt_txt1 = get_post_meta($image_id1, '_wp_attachment_image_alt', true);

$image_id2 = acfimg_get_image_id($image2);
$image_alt_txt1 = get_post_meta($image_id2, '_wp_attachment_image_alt', true);



 if(!empty($heading)) { ?>
 <!-- Loaners & Towing Start -->    
    <section class="loaners-towing">
      <div class="container-fluid pl-0">
        <div class="row">
          <div class="col-md-6">
            <div class="loaners-towing-img">
              <img src="<?php echo $image; ?>" alt="Loaners & Towing">
            </div>
          </div>
          <div class="col-md-6">
            <div class="loaners-towing-info">
              <h2 class="black"><?php echo $heading; ?></h2>
              <div class="loaners-towing-info-icon">
                <div class="icon">
                  <img src="<?php echo $image1; ?>">
                </div>
                <div class="loaners-towing-info-right">
                  <h5 class="blue"><?php echo $sub_heading1; ?>*</h5>
                  <p>
                   <?php echo $sub_content1; ?>
                  </p>
                </div>
              </div>
              <div class="loaners-towing-info-icon">
                <div class="icon">
                  <img src="<?php echo $image2; ?>">
                </div>
                <div class="loaners-towing-info-right">
                  <h5 class="blue"><?php echo $sub_heading2; ?>*</h5>
                  <p>
                    <?php echo $sub_content2; ?>
                  </p>
                </div>
              </div>
              <div class="content">
                <p> <?php echo $lt_content; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Loaners & Towing End --> 
    <?php } ?>