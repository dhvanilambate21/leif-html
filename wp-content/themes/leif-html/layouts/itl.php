 <?php 
$heading = $content['heading'];
$itl_content = $content['itl_content'];
$sub_heading = $content['sub_heading'];


 if(!empty($heading)) {

 ?>
 <!-- Insurance Transparency Legislation Start -->
    <section class="insurance-transparency-legislation">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-7">
            <div class="insurance-transparency-legislation-left">
              <h2 class="yellow"><?php echo $heading; ?></h2>
              <div class="content white">
               		<?php echo $itl_content; ?>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="insurance-transparency-legislation-right">
              <h4 class="yellow"><?php echo $sub_heading; ?></h4>
              <div class="insurance-block">
                <span>Purchasing Insurance (full disclosure)</span>
                <ul>
                  <li>Right to receive a copy of premium before buying.</li>
                  <li>Right to see all contracts written or verbal with third-party vendors.</li>
                  <li>Right to see a list of all policies in policy related to raising premium.</li>
                  <li>Right to see a list of all policies in policy related to canceling premium.</li>
                </ul>
              </div>

              <div class="insurance-block">
                <span>Filing a Claim With an Insurance Company (full disclosure)</span>
                <ul>
                  <li>Right to a insurance-paid neutral consumer board to provide a third party umpire.</li>
                  <li>Right to dispute resolutions within 15 days unless both parties agree to waive this time.</li>
                  <li>Right to read whole or partial claim denials in layman’s language.</li>
                  <li>Right to read all reasons for a claim denial, whole or partial, within 5 days.</li>
                  <li>Right to receive all consumer protection laws/rules as claimant within 48 hours of filing a claim and notify claimant at time of filing that this will be coming.</li>
                </ul>
              </div>

              <div class="insurance-block">
                <span>Insurance Company Raising or Canceling a Policy (full disclosure)</span>
                <ul>
                  <li>Right to a list of all reasons why a policy premium is being raised in layman’s language.</li>
                  <li>Right to a list of all reasons why policy is being canceled in layman’s language.</li>
                  <li>Applicable to all consumer insurance types including Medical, Life, Auto, Home and Casualty.</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Insurance Transparency Legislation End -->
    <?php } ?>