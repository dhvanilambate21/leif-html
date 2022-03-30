<?php 

$stories = $content['stories'];



 if(!empty($stories)) { ?>
<!-- Written Consumer Stories Start -->
    <section class="written-consumer-stories">
      <div class="container-fluid">
        <div class="written-consumer-stories-row">
<?php foreach ($stories as $story) { ?>
          <h2 class="white text-center"><?php echo $story['heading']; ?></h2> <?php } ?>
          <div class="row">
                    <?php foreach ($stories as $story) { ?>
            <div class="col-md-6">
              <div class="written-consumer-stories-bx">
                <div class="written-consumer-stories-img">
                  <img src="<?php echo $story['image']; ?>">
                </div>
                <div class="written-consumer-stories-bx-info">
                  <h4><?php echo $story['sub_heading']; ?></h4>
                  <p>
                    <?php echo $story['sub_heading']; ?>
                  </p>
                  <a href="#"><?php echo $story['button']; ?></a>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </section>
    <?php }?>
    <!-- Written Consumer Stories End -->