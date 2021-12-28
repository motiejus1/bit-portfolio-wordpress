<?php 
$logo_text = get_theme_mod('bit_portfolio_logo_text');
$copyright_text_before_date = get_theme_mod('bit_portfolio_copyright_text_before_date');
$copyright_text_after_date = get_theme_mod('bit_portfolio_copyright_text_after_date');


//Open in the new tab

$links_target = get_theme_mod( 'bit_portfolio_header_links_target');

//Social links

$facebook_url = get_theme_mod('bit_portfolio_item_facebook');
$twitter_url = get_theme_mod('bit_portfolio_item_twitter');
$instagram_url = get_theme_mod('bit_portfolio_item_instagram');
$linkedin_url = get_theme_mod('bit_portfolio_item_linkedin');
?>

<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo">
                <a href="<?php echo esc_url(get_home_url()); ?>"><?php echo esc_html($logo_text); ?><span>.</span></a>
            </h1>
			<!-- <nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.html">Home</a></li>
					<li><a href="photography.html">Photography</a></li>
					<li><a href="travel.html">Travel</a></li>
					<li><a href="fashion.html">Fashion</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav> -->
            <nav id="colorlib-main-menu" role="navigation">
                <?php 
                
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1'
                    ));
                ?>
            </nav>

			<div class="colorlib-footer">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			  <?php echo esc_html($copyright_text_before_date); ?> &copy;<script>document.write(new Date().getFullYear());</script> 
              <?php echo esc_html($copyright_text_after_date); ?> 
              <!-- nekeiciama -->
              <a href="https://colorlib.com" target="_blank">Colorlib</a>
				
              
                    <!-- Mes galim sukurti bendra nustatyma, kuris arba visas nuorodas atidaro tame paciame lange
                    ar visas nuorodas atidaro naujame
                -->
              <?php if(!empty($facebook_url) || !empty($twitter_url) || !empty($instagram_url) || !empty($linkedin_url)) : ?>
                <ul>    

                        <?php
                            $target_attribute = '';
                            if($links_target) {
                                $target_attribute = ' target="_blank" ';
                            }
                        ?>

                        <?php if(!empty($facebook_url)) : ?>
                            <li><a href="<?php echo esc_url($facebook_url) ?>" <?php echo $target_attribute ?>><i class="icon-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($twitter_url)) : ?>
                            <li><a href="<?php echo esc_url($twitter_url) ?>" <?php echo $target_attribute ?>><i class="icon-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($instagram_url)) : ?>
                            <li><a href="<?php echo esc_url($instagram_url) ?>" <?php echo $target_attribute ?>><i class="icon-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($linkedin_url)) : ?>
                            <li><a href="<?php echo esc_url($linkedin_url) ?>" <?php echo $target_attribute ?>><i class="icon-linkedin"></i></a></li>
                        <?php endif; ?>
                    </ul>
               <?php endif; ?>
			</div>
		</aside>