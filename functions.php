<?php 

function bit_portfolio_enqueue() {

//Style

wp_enqueue_style( 'bit-portfolio-iconic', get_template_directory_uri() . "/css/open-iconic-bootstrap.min.css" );
wp_enqueue_style( 'bit-portfolio-animate', get_template_directory_uri() . "/css/animate.css" );
wp_enqueue_style( 'bit-portfolio-carousel', get_template_directory_uri() . "/css/owl.carousel.min.css" );
wp_enqueue_style( 'bit-portfolio-theme-default', get_template_directory_uri() . "/css/owl.theme.default.min.css" );
wp_enqueue_style( 'bit-portfolio-magnific-popup', get_template_directory_uri() . "/css/magnific-popup.css" );
wp_enqueue_style( 'bit-portfolio-aos', get_template_directory_uri() . "/css/aos.css" );
wp_enqueue_style( 'bit-portfolio-ionicons', get_template_directory_uri() . "/css/ionicons.min.css" );
wp_enqueue_style( 'bit-portfolio-datepicker', get_template_directory_uri() . "/css/bootstrap-datepicker.css" );
wp_enqueue_style( 'bit-portfolio-timepicker', get_template_directory_uri() . "/css/jquery.timepicker.css" );
wp_enqueue_style( 'bit-portfolio-flaticon', get_template_directory_uri() . "/css/flaticon.css" );
wp_enqueue_style( 'bit-portfolio-icomoon', get_template_directory_uri() . "/css/icomoon.css" );
wp_enqueue_style( 'bit-portfolio-style', get_template_directory_uri() . "/css/style.css" );


//Script

wp_enqueue_script('bit-portfolio-jquery', get_template_directory_uri() . "/js/jquery.min.js" );
wp_enqueue_script('bit-portfolio-jquery-migrate', get_template_directory_uri() . "/js/jquery-migrate-3.0.1.min.js" );
wp_enqueue_script('bit-portfolio-popper', get_template_directory_uri() . "/js/popper.min.js" );
wp_enqueue_script('bit-portfolio-bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js" );
wp_enqueue_script('bit-portfolio-easing', get_template_directory_uri() . "/js/jquery.easing.1.3.js" );

wp_enqueue_script('bit-portfolio-waypoints', get_template_directory_uri() . "/js/jquery.waypoints.min.js" );

wp_enqueue_script('bit-portfolio-stellar', get_template_directory_uri() . "/js/jquery.stellar.min.js" );
wp_enqueue_script('bit-portfolio-carousel', get_template_directory_uri() . "/js/owl.carousel.min.js" );
wp_enqueue_script('bit-portfolio-magnific', get_template_directory_uri() . "/js/jquery.magnific-popup.min.js" );

wp_enqueue_script('bit-portfolio-aos', get_template_directory_uri() . "/js/aos.js" );
wp_enqueue_script('bit-portfolio-animateNumber', get_template_directory_uri() . "/js/jquery.animateNumber.min.js" );
wp_enqueue_script('bit-portfolio-datepicker', get_template_directory_uri() . "/js/bootstrap-datepicker.js" );
// wp_enqueue_script('bit-portfolio-timepicker', get_template_directory_uri() . "/js/jquery.timepicker.min.js" );

wp_enqueue_script('bit-portfolio-scrollax', get_template_directory_uri() . "/js/scrollax.min.js" );
// wp_enqueue_script('bit-portfolio-google-maps', get_template_directory_uri() . "/js/google-map.js" );
wp_enqueue_script('bit-portfolio-main', get_template_directory_uri() . "/js/main.js" );


}

add_action("wp_enqueue_scripts", "bit_portfolio_enqueue");

register_nav_menus(array(
    "menu-1" => __('Primary Header Menu', 'bit-portfolio'),
    "menu-2" => __('Secondary Footer Menu', 'bit-portfolio'),
    "menu-3" => __('Archive Footer Menu', 'bit-portfolio'),
));

function bit_portfolio_customizer_header_section($wp_customize) {

    $wp_customize->add_section('bit_portfolio_header_settings', array(
        'title' => __('Header settings', 'bit-portfolio'),
        'priority' => 101
    ));

    //Logo 

    $wp_customize->add_setting('bit_portfolio_logo_text', array(
        'default' => 'Logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_logo_text', array(
        'label' => 'Logo text',
        'description' => 'Change default logo',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 10,
    )));

    //Header copyright text before

    $wp_customize->add_setting('bit_portfolio_copyright_text_before_date', array(
        'default' => 'Copyright',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_copyright_text_before_date', array(
        'label' => 'Copyright text before date',
        'description' => 'Change copyright text',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 11,
    )));

    //Header copyright text after

    $wp_customize->add_setting('bit_portfolio_copyright_text_after_date', array(
        'default' => 'All rights reserved | This template is made with ',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_copyright_text_after_date', array(
        'label' => 'Copyright text',
        'description' => 'Change copyright text after date',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 12,
    )));

    //Link target

    $wp_customize->add_setting('bit_portfolio_header_links_target', array(
        'default' => true,
        'sanitize_callback' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_header_links_target', array(
        'label' => 'Open in the new tab?',
        'description' => 'Choose how social links open same page/new page',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'checkbox',
        'priority' => 12,
    )));


    //Facebook

    $wp_customize->add_setting('bit_portfolio_item_facebook', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_item_facebook', array(
        'label' => 'Facebook url',
        'description' => 'Facebook url',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 12,
    )));

    //Twitter

    $wp_customize->add_setting('bit_portfolio_item_twitter', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_item_twitter', array(
        'label' => 'Twitter url',
        'description' => 'Twitter url',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 12,
    )));

    //Instagram

    $wp_customize->add_setting('bit_portfolio_item_instagram', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_item_instagram', array(
        'label' => 'Instagram url',
        'description' => 'Instagram url',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 12,
    )));
    //Linkedin

    $wp_customize->add_setting('bit_portfolio_item_linkedin', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_item_linkedin', array(
        'label' => 'Linkedin url',
        'description' => 'Linkedin url',
        'section' => 'bit_portfolio_header_settings',
        'type' => 'text',
        'priority' => 12,
    )));

}


function bit_portfolio_customizer_footer_section($wp_customize) {

    $wp_customize->add_section('bit_portfolio_footer_settings', array(
        'title' => __('Footer settings', 'bit-portfolio'),
        'priority' => 102
    ));

 //Menu #1 title 

        $wp_customize->add_setting('bit_portfolio_footer_menu_first_title', array(
            'default' => 'Category',
            'sanitize_callback' => ''
        ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_menu_first_title', array(
        'label' => 'Menu #1 title',
        'description' => 'Menu #1 title',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));

 //Menu #2 title 

    $wp_customize->add_setting('bit_portfolio_footer_menu_second_title', array(
        'default' => 'Archives',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_menu_second_title', array(
        'label' => 'Menu #2 title',
        'description' => 'Menu #2 title',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));

// Contact title

    $wp_customize->add_setting('bit_portfolio_footer_contact_title', array(
        'default' => 'Have a question?',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_contact_title', array(
        'label' => 'Contact title',
        'description' => 'Contact title',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));



    //Contact address

    $wp_customize->add_setting('bit_portfolio_footer_contact_address', array(
        'default' => 'Have a question?',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_contact_address', array(
        'label' => 'Contact address',
        'description' => 'Contact address',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));

    //Contact phone
    $wp_customize->add_setting('bit_portfolio_footer_contact_phone', array(
        'default' => 'Have a question?',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_contact_phone', array(
        'label' => 'Contact phone',
        'description' => 'Contact phone',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));
    //Contact email

    $wp_customize->add_setting('bit_portfolio_footer_contact_email', array(
        'default' => 'Have a question?',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_contact_email', array(
        'label' => 'Contact email',
        'description' => 'Contact email',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));


    //Copyright text before date
    $wp_customize->add_setting('bit_portfolio_footer_copyright_before', array(
        'default' => 'Have a question?',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_copyright_before', array(
        'label' => 'Copyright before',
        'description' => 'Copyright before',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));



    //Copyright text after date

    //Copyright text before date
    $wp_customize->add_setting('bit_portfolio_footer_copyright_after', array(
        'default' => 'Have a question?',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_footer_copyright_after', array(
        'label' => 'Copyright after',
        'description' => 'Copyright after',
        'section' => 'bit_portfolio_footer_settings',
        'type' => 'text',
        'priority' => 10,
    )));
}

function bit_portfolio_customizer_404_section($wp_customize) {
    $wp_customize->add_section('bit_portfolio_404_settings', array(
        'title' => __('404 settings', 'bit-portfolio'),
        'priority' => 102
    ));

    //404 Page title
     

    $wp_customize->add_setting('bit_portfolio_404_page_title', array(
        'default' => '404',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_404_page_title', array(
        'label' => '404 page title',
        'description' => 'Change 404 page title',
        'section' => 'bit_portfolio_404_settings',
        'type' => 'text',
        'priority' => 10,
    )));

    //404 Page Description
    $wp_customize->add_setting('bit_portfolio_404_page_description', array(
        'default' => 'Something went wrong, page not found',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_404_page_description', array(
        'label' => '404 page description',
        'description' => 'Change 404 page description',
        'section' => 'bit_portfolio_404_settings',
        'type' => 'text',
        'priority' => 10,
    )));

    //404 Page Link Text
    $wp_customize->add_setting('bit_portfolio_404_page_link_text', array(
        'default' => 'Go back to Home',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portfolio_404_page_link_text', array(
        'label' => '404 page link text',
        'description' => 'Change 404 page link text',
        'section' => 'bit_portfolio_404_settings',
        'type' => 'text',
        'priority' => 10,
    )));

    //404 Page background image

    $wp_customize->add_setting('bit_portfolio_404_background_image', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bit_portfolio_404_background_image', array(
        'label' => 'Backround Image',
        'description' => 'Choose 404 background image',
        'section' => 'bit_portfolio_404_settings'
    )));

}



add_action('customize_register', 'bit_portfolio_customizer_header_section');
add_action('customize_register', 'bit_portfolio_customizer_footer_section');
add_action('customize_register', 'bit_portfolio_customizer_404_section');

function bit_portfolio_move_to_footer_scripts() {
    remove_action('wp_head', 'wp_print_scripts'); //nespausdink man scriptu head'e
    remove_action('wp_head', 'wp_print_head_scripts', 9 );
    remove_action('wp_head', 'wp_enqueue_scripts', 1); //scriptai yra nespausdinami apskirtai

    //script atspausdinimo reikia footeryje

    add_action('wp_footer','wp_print_scripts', 5);
    add_action('wp_footer','wp_enqueue_scripts', 5);
    add_action('wp_footer','wp_print_head_scripts', 5);
}

add_action('wp_enqueue_scripts', 'bit_portfolio_move_to_footer_scripts');