<?php 

$heading = $content['heading'];
$compare_content = $content['compare_content'];
 if(!empty($heading)) { ?>
 <!-- Compare Leif’s Start -->
    <section class="compare-leif">
      <div class="container-fluid">
        <div class="compare-leif-row">
          <h2 class="white text-center"><?php echo $heading ?></h2>
          <div class="content">
            <p>
                  <?php echo $compare_content; ?>
            </p>
            

          </div>
        </div>
      </div>
    </section>
    <!-- Compare Leif’s End -->
    <?php } ?>