 <?php 

$services = $content['service'];



 if(!empty($services)) { ?>

 <!-- Services Start -->

    <section class="services">

      <div class="container-fluid">

        <div class="row">
                         <?php foreach ($services as $service) { ?>

          <div class="col-md-4">
            <div class="services-bx">
              <div class="services-bx-top">
                <a href="#"><h4><?php echo $service['service_heading']; ?>
                </h4></a>
                <div class="services-icon">
                  <img src="<?php echo $service['service_icon']; ?>" alt="Icon">
                </div>
              </div>
              <div class="services-bx-img">
                <img src="<?php echo $service['service_image']; ?>" alt="We Fix Bad Repairs">
              </div>
              <div class="services-bx-info">
                <div class="content">
                  <p>
                    <?php echo $service['service_content']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </section>
    <!-- Services End -->
    <?php } ?>