 <?php 

$heading = $content['heading'];
$address = $content['address'];
$hours = $content['hours'];
$google_map = $content['google_map'];

$image1 = $content['image1'];
$image2 = $content['image2'];

$note = $content['note'];



$image_id = acfimg_get_image_id($image1);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

$image_id = acfimg_get_image_id($image2);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

 if(!empty($heading)) { ?>
 <!-- Visit Start -->
    <section class="visit-us">
      <div class="row m-0">
        <div class="col-md-5 p-0">
          <div class="visit-us-left">
            <h2 class="white"><?php echo $heading; ?></h2>
            <div class="visit-us-left-row">
              <div class="icon">
                <img src="<?php echo $image1; ?>">
              </div>
              <div class="visit-us-left-info">
                <h5>Address</h5>
                <p><?php echo $address; ?></p>
              </div>
            </div>

            <div class="visit-us-left-row">
              <div class="icon">
                <img src="<?php echo $image2; ?>">
              </div>
              <div class="visit-us-left-info">
                <h5>Hours</h5>
                <p><?php echo $hours; ?></p>
              </div>
            </div>

            <div class="visit-us-left-row">
              <div class="visit-us-left-info">                
                <p><?php echo $note; ?></p>
              </div>
            </div>

          </div>
        </div>
          <div class="visit-us-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6661.162280088311!2d-122.75363935404503!3d45.41591829316772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495732a1c2e0a4f%3A0x343e8bcc2a8d47ad!2s14344%20SW%2072nd%20Ave%2C%20Tigard%2C%20OR%2097224%2C%20USA!5e0!3m2!1sen!2sin!4v1598280713465!5m2!1sen!2sin"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>        
      </div>
    </section>
    <!-- Visit End -->
    <?php } ?>