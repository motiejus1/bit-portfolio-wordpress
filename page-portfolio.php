<?php get_header(); ?>
    <div id="colorlib-main">
		
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
		
    <?php get_footer();?>
        </div><!-- END COLORLIB-MAIN
     -->
	</div><!-- END COLORLIB-PAGE -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php wp_footer(); ?>
  </body>
</html>