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
		<?php 
      $args = array('post_type'=> 'works');
      $query = new WP_Query( $args ); // SELECT * FROM posts WHERE post_type='works'
      //ar uzklausa grazino irasu
      //turime praeiti pro kiekviena irasa(ciklu)
      
      if ($query->have_posts()) {
        while($query->have_posts()) {
          $query->the_post(); //pasiima visa informacija apie viena irasa
          $work_id = get_the_ID();
          echo $work_id;

          $work_image = get_field('work_image', $work_id);
          $work_category = get_field('work_category', $work_id);
          $work_link = get_field('work_link', $work_id);
          $work_title = get_field('work_title', $work_id);



          echo $work_image;
          echo $work_category;
          echo $work_link;
          echo $work_title;

          the_title();
          the_content();
        }
        wp_reset_postdata();
      } else {
        echo "There is no works";
      }


    ?>	
		
    <?php get_footer();?>
        </div><!-- END COLORLIB-MAIN
     -->
	</div><!-- END COLORLIB-PAGE -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php wp_footer(); ?>
  </body>
</html>