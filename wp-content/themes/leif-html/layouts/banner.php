<?php 
$banners = $content['head'];
$banner_head = $content['sub-head'];
$banner_content = $content['content'];
$banner_benefit = $content['benefit'];
$banner_add_benefit = $content['add_benefit'];
$banner_image = $content['banner_image'];




$image_id = acfimg_get_image_id($banner_image);
$image_alt_txt = get_post_meta($image_id, '_wp_attachment_image_alt', true);



if(!empty($banners)) { ?>
 <!-- Banner Start -->
    <section class="hero" style="background: url('<?php echo $banner_image; ?>');">
      <?php 
$image = get_field('banner_image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
        <div class="container-fluid">
            <div class="hero-info">
                <h1><span><?php echo $banners; ?></span> </br><?php echo $banner_head; ?></h1>
                <p>
                   <?php echo $banner_content; ?>
                </p>

                <div id="banner-block">
                  <div class="ui-slide-in">
                    <div class="text-wrapper">
                      <div class="line"><span><?php echo $banner_benefit; ?></span></div>
              <?php foreach ($banner_add_benefit as $benefit) { ?>

                          <ul>
                                <li><?php echo $benefit['benefit_name']; ?></li>
                            </ul>
                            <?php }?>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Banner End -->
<?php } ?>