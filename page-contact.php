<!DOCTYPE html>
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
    <?php get_header(); ?>
    <?php get_footer(); ?>
    </div>

</body>
</html>