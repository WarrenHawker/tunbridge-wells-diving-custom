<?php 
//adds customisation options for website

function twdiving_customize_register( $wp_customize ) { 
    $wp_customize->remove_section( 'static_front_page' );
    
    class twdiving_Customize_Textarea_Control extends WP_Customize_Control { //controls UI for customiser
	
        public $type = 'textarea';
        public function render_content() { 
            echo '<label>';
                echo '<span class="customize-control-title">' . esc_html( $this-> label ) . '</span>';
                echo '<textarea rows="10" style ="width: 100%;"';
                $this->link();
                echo '>' . esc_textarea( $this->value() ) . '</textarea>';
            echo '</label>';
            
       }
    }

    if(!defined('ABSPATH') ) EXIT; //Exit if accessed directly
        $roots_includes = array(
            '/functions/customize-colors.php',
            '/functions/customize-text.php',
            '/functions/customize-fonts.php',
            '/functions/Alpha-Color_picker/customizer/alpha-color-picker/alpha-color-picker.php',
    );

    foreach($roots_includes as $file){
        if(!$filepath = locate_template($file)) {
        trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
    }
        require_once $filepath;
    }
unset($file, $filepath);
}

function twdiving_add_customizer_styles() {
    $primary_color = get_option('twdiving_primary_color');
    $card_background_color = get_option('twdiving_card_background_color');
    $contrast_color = get_option('twdiving_contrast_color');
    $background_color = get_option('twdiving_background_color');
    $custom_font = esc_html(get_theme_mod('twdiving_fonts'));
    $h1_size = get_option('twdiving_header_1');
    $h2_size = get_option('twdiving_header_2');
    $h3_size = get_option('twdiving_header_3');
    $h4_size = get_option('twdiving_header_4');
    $h5_size = get_option('twdiving_header_5');
    $h6_size = get_option('twdiving_header_6');
    $paragraph_size = get_option('twdiving_paragraph');
    ?>
    <style>
        body {
            font-family: <?php echo $custom_font;?> !important; 
        }
        h1 { font-size: <?php echo $h1_size;?>;}
        h2 { font-size: <?php echo $h2_size;?>;}
        h3 { font-size: <?php echo $h3_size;?>;}
        h4 { font-size: <?php echo $h4_size;?>;}
        h5 { font-size: <?php echo $h5_size;?>;}
        h6 { font-size: <?php echo $h6_size;?>;}
        p { font-size: <?php echo $paragraph_size;?>;}

        .primary, .footer-links li a, .nav-bar-links li a, .footer-text p a, .mobile-toggle-button a, h1, h2 {
            color: <?php echo $primary_color;?>;
        }
        .contrast, a.primary-button {
            color: <?php echo $contrast_color;?>;
        }
        body, nav, footer, .nav-bar-links.mobile, .top-nav-dropdown-menu {
            background-color: <?php echo $background_color;?>;
        }
        a.primary-button {
            border:3px solid <?php echo $primary_color;?>;
        }
        .current-menu-item a, .footer-text a.current-menu-item {
            color: <?php echo $contrast_color;?> !important;
        }
        .committee-container, .coaches-container {
            background-image: linear-gradient(180deg, #ffffff 0%, <?php echo $card_background_color?> 100%);
        }
    </style>
<?php }


add_action( 'customize_register', 'twdiving_customize_register' ); 
add_action( 'wp_head', 'twdiving_add_customizer_styles' );




		
