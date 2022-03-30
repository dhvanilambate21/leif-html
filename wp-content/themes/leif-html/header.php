<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leif-html
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Header Start -->
    <header class="header">
        <div class="container-fluid pr-0">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand text-white" href="index.html">
                  <!-- <img src="<?php the_field('logo'); ?>" alt="Logo"> -->
                  <img src="<?php the_field('logo','options'); ?>">
              

              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              	<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'items_wrap' => '<ul class="navbar-nav m-auto" id="menu"><li class="nav-item"><a class="nav-link">%3$s</a></li></ul>'
						)
					);

              	?>
                <ul class="navbar-nav m-auto">
                  <!-- <li class="nav-item"><a class="nav-link" href="collison-repair.php">Collision Repair</a></li>
                  <li class="nav-item"><a class="nav-link" href="latest-claims-news.php">Latest Claims News</a></li>
                  <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>      -->
                  <li class="online-btn"><a href="#" class="btn-yellow-b"><span><?php the_field('button','options'); ?></span></a></li>             
                </ul>
                <div class="phoneno my-2 my-lg-0">
                    <a href="tel:(503) 620-5343"><span><?php the_field('contact_no','options'); ?></span></a>
                </div>                
              </div>
            </nav>
        </div>
    </header>
