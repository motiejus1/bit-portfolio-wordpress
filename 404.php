
<?php 

$page_title_404 = get_theme_mod( 'bit_portfolio_404_page_title' );
$page_description_404 = get_theme_mod( 'bit_portfolio_404_page_description' );
$page_link_text_404 = get_theme_mod( 'bit_portfolio_404_page_link_text' );
$page_background_image_404 = get_theme_mod( 'bit_portfolio_404_background_image' );

?>

<?php get_header(); ?>

<div id="colorlib-main">

<!-- <h1> Page not found </h1> -->

<?php


?>

<?php if (!empty($page_background_image_404)) : ?>
<div class="hero-wrap js-fullheight" style="background-image: url(<?php echo $page_background_image_404?> );" data-stellar-background-ratio="0.5">
<?php else: ?>
    <div class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5">

<?php endif;?>
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="col-md-8 text text-center">
                <div class="desc">
                    <h1 class="mb-4"><?php echo $page_title_404; ?></h1>
                    <p class="mb-4"><?php echo $page_description_404; ?></p>
                    <p><a href="<?php echo get_home_url(); ?>" class="btn-custom"><?php echo $page_link_text_404; ?> <span class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
 
 <?php wp_footer(); ?>
    
  </body>
</html>