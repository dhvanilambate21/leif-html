<?php 

$heading = $content['heading'];
$collison_content = $content['collison_content'];
$image1 = $content['image1'];
$image2 = $content['image2'];
$image3 = $content['image3'];
$heading1 = $content['heading1'];
$heading2 = $content['heading2'];
$heading3 = $content['heading3'];
$cs_content1 = $content['cs_content1'];
$cs_content2 = $content['cs_content2'];
$cs_content3 = $content['cs_content3'];
$note1 = $content['note1'];
$note2 = $content['note2'];
$link = $content['link'];

$image_id1 = acfimg_get_image_id($image1);
$image_alt_txt1 = get_post_meta($image_id1, '_wp_attachment_image_alt', true);

$image_id2 = acfimg_get_image_id($image2);
$image_alt_txt1 = get_post_meta($image_id2, '_wp_attachment_image_alt', true);

$image_id3 = acfimg_get_image_id($image3);
$image_alt_txt2 = get_post_meta($image_id3, '_wp_attachment_image_alt', true);


 if(!empty($heading)) { ?>

<!-- About Leif's Start  -->
    <section class="general-content bg-blue">
      <div class="container text-center">
        <h2 class="white"><?php echo $heading; ?></h2>
        <div class="content white">
          <p>
            <?php echo $collison_content; ?>
          </p> 
          <div class="howwedoiticon">
            <div class="row">

              <div class="col-md-4">
                <div class="icon">
                  <img src="<?php echo $image1; ?>" alt="Centralized quality control">
                </div>
                <div class="howwedoiticon-info">
                  <h5><?php echo $heading1; ?></h5>
                  <p>
                   <?php echo $cs_content1; ?>
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="icon">
                  <img src="<?php echo $image2; ?>" alt="Centralized quality control">
                </div>
                <div class="howwedoiticon-info">
                  <h5><?php echo $heading2; ?></h5>
                  <p>
                    <?php echo $cs_content2; ?>
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="icon">
                  <img src="<?php echo $image3; ?>" alt="Centralized quality control">
                </div>
                <div class="howwedoiticon-info">
                  <h5><?php echo $heading3; ?></h5>
                  <p>
                    <?php echo $cs_content3; ?>
                  </p>
                </div>
              </div>

            </div>
          </div> 
          <p>
            <?php echo $note1; ?>
          </p>        
          <p>
            <?php echo $note2; ?>, <a href="#"><?php echo $link; ?></a>
          </p>
        </div>
      </div>
    </section>
    <!-- About Leif's End -->
    <?php } ?>