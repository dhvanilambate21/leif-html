<?php 
$heading = $content['heading'];
$image = $content['image'];
$ir_heading = $content['ir_heading'];
$ir_sub_heading = $content['ir_sub_heading'];
$arrow_image = $content['arrow_image'];
$image_id = acfimg_get_image_id($image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

 if(!empty($heading)) {

?>
<!-- Testimonials Start -->
    <section class="testimonials">      
      <div class="row m-0 row-eq-height h-100">
        <div class="col-md-8 p-0">
          <div class="testimonials-slide">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="content">
                    <p>
                      My husband and I had great services at Leifs. They were clear about the process and even offered a program to reduce our deductible by several hundred dollars. Everyone was really friendly and knowledgeable and the work done on the...
                    </p>
                    <span>Emilee W</span>
                </div>
              </div>

              <div class="item">
                <div class="content">
                    <p>
                      My husband and I had great services at Leifs. They were clear about the process and even offered a program to reduce our deductible by several hundred dollars. Everyone was really friendly and knowledgeable and the work done on the...
                    </p>
                    <span>Emilee W</span>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 p-0">
          <div class="testimonials-rating">
            <h3><?php echo $heading; ?></h3>
            <div class="rating-star">
              <ul>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
              </ul>
            </div>
            <p><?php echo $note; ?></p>
          </div>
        </div>
        <div class="insurance-rating">
          <h5><?php echo $ir_heading; ?></h5>
          <span><?php echo $ir_sub_heading; ?></span>
          <div class="insurance-arrow">
            <a href="#"><img src="<?php echo $arrow_image; ?>"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials End -->
    <?php } ?>