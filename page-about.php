<?php 

$background_image = get_field('background-image');
$author_image = get_field('author-image');
$subheading = get_field('subheading');
$name_surname = get_field('name-surname');
$description = get_field('description');

//Social links

$facebook_link = get_field('facebook_link');
$instagram_link = get_field('instagram_link');
$linkedin_link = get_field('linkedin_link');
$twitter_link = get_field('twitter_link');


?>
<?php get_header(); ?>
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
		</div><!-- END COLORLIB-MAIN
     -->
	</div><!-- END COLORLIB-PAGE -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php wp_footer(); ?>
  </body>
</html>