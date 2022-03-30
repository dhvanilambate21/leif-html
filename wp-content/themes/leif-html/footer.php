<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leif-html
 */

?>

	<!-- Footer Start -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="footer-top">
          <div class="row align-items-center">
            <div class="col-md-2">
              <div class="footer-logo">
                <a href="index.html"><img src="<?php the_field('footer_logo','options'); ?>"></a>
              </div>
            </div>
            <div class="col-md-10">
              <div class="footer-navbar">
             <?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'container'       => '',
	                            'menu_class'        => 'site-map',
							)
						);
					?>
               <ul>

                </ul> 
              </div>
            </div>
            
          </div>
        </div>

        <div class="footer-btm">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright text-center">
                <p>© <?php echo date("Y");  ?>, Leif's Auto Centers. All rights reserved. Privacy Policy</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
