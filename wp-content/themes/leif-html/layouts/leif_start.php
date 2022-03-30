<?php
$description = $content['description'];
if(!empty($description)) {
?>
<section class="general-content">
      <div class="container text-center">        
        <div class="content">
          <p>
            <?php echo $description; ?>
          </p> 
        </div>
      </div>
    </section>
    <?php
  }
?>