
<?php 

$menu_first_title = get_theme_mod('bit_portfolio_footer_menu_first_title');
$menu_second_title = get_theme_mod('bit_portfolio_footer_menu_second_title');
$contact_title = get_theme_mod('bit_portfolio_footer_contact_title');
$contact_address =  get_theme_mod('bit_portfolio_footer_contact_address');
$contact_phone =  get_theme_mod('bit_portfolio_footer_contact_phone');
$contact_email =  get_theme_mod('bit_portfolio_footer_contact_email');

$copyright_text_before_date = get_theme_mod('bit_portfolio_footer_copyright_before');
$copyright_text_after_date = get_theme_mod('bit_portfolio_footer_copyright_after');
?>


<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
                <?php if(!empty($menu_first_title)): ?>
                    <h2 class="ftco-heading-2"><?php echo $menu_first_title; ?></h2>
                <?php endif;?>
              <?php 
            
                wp_nav_menu( array(
                    'theme_location' => 'menu-2',
                    'menu_class' => 'list-unstyled categories'
                ));
            ?>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
             <?php if(!empty($menu_second_title)): ?>
                <h2 class="ftco-heading-2"><?php echo $menu_second_title; ?></h2>
            <?php endif;?>

              <?php 
            
                wp_nav_menu( array(
                    'theme_location' => 'menu-3',
                    'menu_class' => 'list-unstyled categories'
                ));
            ?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2"><?php echo $contact_title; ?></h2>
            	<div class="block-23 mb-3">
                <?php if(!empty($contact_address) || !empty($contact_phone) || !empty($contact_email) ) : ?>
	              <ul>
                    <?php if(!empty($contact_address)) :?>
	                    <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $contact_address; ?></span></li>
	                <?php endif;?>
                    <?php if(!empty($contact_phone)) :?>
                        <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $contact_phone; ?></span></a></li>
                    <?php endif;?>
                    <?php if(!empty($contact_email)) :?>
	                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $contact_email; ?></span></a></li>
                    <?php endif;?>
	              </ul>
                  <?php endif; ?>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <?php echo $copyright_text_before_date; ?>&copy;<script>document.write(new Date().getFullYear());</script><?php echo $copyright_text_after_date; ?>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>