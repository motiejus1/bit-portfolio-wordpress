<?php 

$contact_form_shortcode = get_field('contact_form_shortcode');

$contact_title = get_field('contact_title');
$contact_address = get_field('contact_address');
$contact_phone = get_field('contact_phone');
$contact_email = get_field('contact_email');

?>
<html lang="en">
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <?php wp_head();?>
    
  </head>

  <body <?php body_class(); ?>>
  <div id="colorlib-page">
  <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <?php get_header(); ?>
    <div id="colorlib-main">
    <section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h4 font-weight-bold"><?php echo $contact_title; ?></h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-md-3">
	            <p><?php echo $contact_address; ?></p>
	          </div>
	          <div class="col-md-3">
	            <p><?php echo $contact_phone; ?></p>
	          </div>
	          <div class="col-md-3">
	            <p><?php echo $contact_email; ?></p>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-md-6 order-md-last pr-md-5">

                <?php if(!empty($contact_form_shortcode)) : ?>
                    <?php echo do_shortcode( $contact_form_shortcode ); ?>
                <?php endif;?>    
            </div>

	          <div class="col-md-6">
	          	<div id="map"></div>
	          </div>
	        </div>
	      </div>
	    </section>

    <?php get_footer();?>
		</div><!-- END COLORLIB-MAIN
     -->
	</div><!-- END COLORLIB-PAGE -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php wp_footer(); ?>
  </body>
</html>