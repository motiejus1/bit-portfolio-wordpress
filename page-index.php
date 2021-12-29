<?php 

$background_image = get_field('background-image', 28);
$author_image = get_field('author-image',28);
$subheading = get_field('subheading',28);
$name_surname = get_field('name-surname',28);
$description = get_field('description',28);

//Social links

$facebook_link = get_field('facebook_link',28);
$instagram_link = get_field('instagram_link',28);
$linkedin_link = get_field('linkedin_link',28);
$twitter_link = get_field('twitter_link',28);


$contact_form_shortcode = get_field('contact_form_shortcode',34);

$contact_title = get_field('contact_title',34);
$contact_address = get_field('contact_address',34);
$contact_phone = get_field('contact_phone',34);
$contact_email = get_field('contact_email',34);

?>


<?php get_header();?> 
		<!-- funkcija get header ji visur atvaizduoja headeri -->
		<div id="colorlib-main">
			<div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?php echo $background_image; ?>);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
						<div class="img mb-4" style="background-image: url(<?php echo $author_image; ?>);"></div>
						<div class="desc">
							<h2 class="subheading"><?php echo $subheading; ?></h2>
							<h1 class="mb-4"><?php echo $name_surname; ?></h1>
							<p class="mb-4"><?php echo $description; ?></p>
                            <?php if(!empty($twitter_link) || !empty($facebook_link) || !empty($instagram_link) || !empty($linkedin_link) ): ?>
							<ul class="ftco-social mt-3">
                                <?php if(!empty($twitter_link )):?> 
                                    <li class="ftco-animate"><a href="<?php echo $twitter_link; ?>" target="_blank"><span class="icon-twitter"></span></a></li>
                                <?php endif; ?>
                                <?php if(!empty($facebook_link )): ?>
                                    <li class="ftco-animate"><a href="<?php echo $facebook_link; ?>" target="_blank"><span class="icon-facebook"></span></a></li>
                                <?php endif; ?>
                                <?php if(!empty($instagram_link )): ?>
                                    <li class="ftco-animate"><a href="<?php echo $instagram_link ?>" target="_blank"><span class="icon-instagram"></span></a></li>
                                <?php endif; ?>
                                <?php if(!empty($linkedin_link )): ?>
                                    <li class="ftco-animate"><a href="<?php echo $linkedin_link; ?>" target="_blank"><span class="icon-linkedin"></span></a></li>
                                <?php endif; ?>

                            </ul>
                            <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<section class="ftco-section-2">
      <div class="photograhy">
					<div class="row no-gutters">
            <?php 
              $args = array('post_type'=> 'works');
              $query = new WP_Query( $args ); // SELECT * FROM posts WHERE post_type='works'
              //ar uzklausa grazino irasu
              //turime praeiti pro kiekviena irasa(ciklu)
              
              if ($query->have_posts()) : ?>

              <?php while($query->have_posts()) : ?>
              
                <?php $query->the_post(); //pasiima visa informacija apie viena irasa
                  $work_id = get_the_ID();
                  // echo $work_id;

                  $work_image = get_field('work_image', $work_id);
                  
                  $work_category = get_field('work_category', $work_id);
                  $work_link = get_field('work_link', $work_id);
                  ?>

                  <div class="col-md-3">
                  <?php if(!empty($work_image)): ?>
							      <a href="<?php echo $work_link; ?>" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $work_image ?>);">
                  <?php else: ?>
                    <a href="<?php echo $work_link; ?>" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri().'/images/placeholder.jpg'  ?>);">
                  <?php endif; ?>    
								  
                  <div class="overlay"></div>
								  <div class="text text-center">
									  <h3><?php the_title(); ?></h3>
                    <?php if(!empty($work_category)): ?>
									      <span><?php echo $work_category; ?> </span>
                      <?php endif; ?>
								  </div>
							    </a>
						    </div>


                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <?php echo "There is no works"; ?>
              <?php endif;?>
          </div>
        </div>
			  </section>
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

			
    <?php 
    
    get_footer();

    ?>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
 
 <?php wp_footer(); ?>
    
  </body>
</html>