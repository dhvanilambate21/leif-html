<?php 

$heading = $content['heading'];
$content = $content['content'];






 if(!empty($heading)) { ?>
<!-- About Leif's Start  -->
    <section class="general-content bg-img-content">
      <div class="container text-center">
        <h2 class="yellow"><?php echo $heading; ?></h2>
        <div class="content">
         <?php echo $content; ?>
        </div>
      </div>
    </section>
    <!-- About Leif's End  -->
    <?php } ?>