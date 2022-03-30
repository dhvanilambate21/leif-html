 <?php 

$service_details = $content['service_details'];



 if(!empty($service_details)) { ?>

<!-- Claims Advocacy Start -->
    <section class="claims-advocacy">
      <div class="container-fluid pl-0">
      	<?php foreach ($service_details as $details) { ?>
        <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="claims-advocacy-right">
                    <div class="claims-advocacy-row align-items-center">
                      <div class="claims-advocacy-icon">
                        <img src="<?php echo $details['service_icon']; ?>" alt="Audio">
                      </div>
                      <div class="claims-advocacy-row-info">
                        <span>
                          <?php echo $details['service_text']; ?>
                        </span>
                      </div>
                    </div>

                    

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
      </div>
    </section>
    <!-- Claims Advocacy End -->
     <?php } ?>