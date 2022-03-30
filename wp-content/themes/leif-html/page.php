<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
$page_content = get_field('page_builder');
	if($page_content) {
	    foreach ($page_content as $content) 
	    {
	      	if($content['acf_fc_layout'] == 'banner') { 
	      		include( 'layouts/banner.php');
	      	}
	      	if($content['acf_fc_layout'] == 'service') { 
	      		include( 'layouts/service.php');
	      	}
	      	if($content['acf_fc_layout'] == 'testimonials_rating') { 
	      		include( 'layouts/testimonials_rating.php');
	      	}
	      	if($content['acf_fc_layout'] == 'contact_us') { 
	      		include( 'layouts/contact_us.php');
	      	}
	      	if($content['acf_fc_layout'] == 'claims_advocacy') { 
	      		include( 'layouts/claims_advocacy.php');
	      	}
	      	if($content['acf_fc_layout'] == 'breadcrumb') { 
	      		include( 'layouts/breadcrumb.php');
	      	}
	      	if($content['acf_fc_layout'] == 'visit_us') { 
	      		include( 'layouts/visit_us.php');
	      	}
	      	if($content['acf_fc_layout'] == 'history') { 
	      		include( 'layouts/history.php');
	      	}
	      	if($content['acf_fc_layout'] == 'leif') { 
	      		include( 'layouts/leif.php');
	      	}
	      	if($content['acf_fc_layout'] == 'collison_repair') { 
	      		include( 'layouts/collison_repair.php');
	      	}
	      	if($content['acf_fc_layout'] == 'guarantee') { 
	      		include( 'layouts/guarantee.php');
	      	}
	      	if($content['acf_fc_layout'] == 'collison_service') { 
	      		include( 'layouts/collison_service.php');
	      	}
	      	if($content['acf_fc_layout'] == 'lt') { 
	      		include( 'layouts/lt.php');
	      	}
	      	if($content['acf_fc_layout'] == 'compare') { 
	      		include( 'layouts/compare.php');
	      	}

			if($content['acf_fc_layout'] == 'latest_claims_news') { 
	      		include( 'layouts/latest_claims_news.php');
	      	}	      
	      	if($content['acf_fc_layout'] == 'leif_start') { 
	      		include( 'layouts/leif_start.php');
	      	}
	      	if($content['acf_fc_layout'] == 'video_consumer_stories') { 
	      		include( 'layouts/video_consumer_stories.php');
	      	}
	      	if($content['acf_fc_layout'] == 'audio_consumer_stories') { 
	      		include( 'layouts/audio_consumer_stories.php');
	      	}
	      	if($content['acf_fc_layout'] == 'stories') { 
	      		include( 'layouts/stories.php');
	      	}

	      	if($content['acf_fc_layout'] == 'ibef') { 
	      		include( 'layouts/ibef.php');
	      	}
	      	if($content['acf_fc_layout'] == 'itl') { 
	      		include( 'layouts/itl.php');
	      	}
	      	if($content['acf_fc_layout'] == 'training') { 
	      		include( 'layouts/training.php');
	      	}
		}
	}
	else{
	  	include( 'layouts/no_data.php');
	} 
get_footer();
