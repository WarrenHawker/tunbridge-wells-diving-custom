<?php 
if(!defined('ABSPATH') ) EXIT; //Exit if accessed directly
$roots_includes = array(
    '/functions/Alpha-Color_picker/customizer/alpha-color-picker/alpha-color-picker.php',
);

foreach($roots_includes as $file){
if(!$filepath = locate_template($file)) {
trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
}
require_once $filepath;
}
unset($file, $filepath);

// section for colors 
$wp_customize->add_section( 'twdiving_colors', array(
    'title' => __( 'Color Scheme', 'twdiving' ))
);
//primary color
$textcolors[] = array(
    'slug' => 'twdiving_primary_color',
    'default' => '#007F80',
    'label' => __( 'Primary color', 'twdiving' ),
    'description' => __( 'This color applies to headings and important highlighted text.', 'twdiving' ),
);

//contrast color
$textcolors[] = array(
    'slug' => 'twdiving_contrast_color',
    'default' => '#2E5984',
    'label' => __( 'Contrast color', 'twdiving' ),
    'description' => __( 'This color applies to paragraph text and the current page name in the nav bar.', 'twdiving' ),
);

//background color
$textcolors[] = array(
    'slug' => 'twdiving_background_color',
    'default' => '#FFFFFF',
    'label' => __( 'Background color', 'twdiving' ),
    'description' => __( 'Main background color for all pages, nav bar and footer.', 'twdiving' ),
);

//card background color
$textcolors[] = array(
    'slug' => 'twdiving_card_background_color',
    'default' => 'rgba(0,156,157,0.34)',
    'label' => __( 'Card Background Color', 'twdiving' ),
    'description' => __( 'Highlight background color used in the committee and coaches cards.', 'twdiving' ),
);

foreach ( $textcolors as $textcolor ) {

    // settings
    $wp_customize->add_setting(
        $textcolor[ 'slug' ], array (
            'default' => $textcolor[ 'default' ],
            'type' => 'option',
        )
    );
    // controls
    $wp_customize->add_control( new Customize_Alpha_Color_Control(
        $wp_customize,
        $textcolor[ 'slug' ],
        array (
            'label' => $textcolor[ 'label' ],
            'section' => 'twdiving_colors',
            'settings' => $textcolor[ 'slug' ],
            'description' => $textcolor[ 'description' ],
            'show_opacity'  => true, // Optional.
				'palette'	=> array(
					'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
					'rgba(50,50,50,0.8)',
					'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
					'#00CC99' // Mix of color types = no problem
				)
        )
    ));
};

