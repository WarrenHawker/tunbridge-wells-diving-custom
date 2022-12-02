<?php
$font_choices = array(
	'Source Sans Pro' => 'Source Sans Pro',
	'Open Sans' => 'Open Sans',
	'Oswald' => 'Oswald',
	'Playfair Display' => 'Playfair Display',
	'Montserrat' => 'Montserrat',
	'Raleway' => 'Raleway',
	'Droid Sans' => 'Droid Sans',
	'Lato' => 'Lato',
	'Arvo' => 'Arvo',
	'Lora' => 'Lora',
	'Merriweather' => 'Merriweather',
	'Oxygen' => 'Oxygen',
	'PT Serif' => 'PT Serif',
	'PT Sans' => 'PT Sans',
	'PT Sans Narrow' => 'PT Sans Narrow',
	'Cabin' => 'Cabin',
	'Fjalla One' => 'Fjalla One',
	'Francois One' => 'Francois One',
	'Josefin Sans' => 'Josefin Sans',
	'Libre Baskerville' => 'Libre Baskerville',
	'Arimo' => 'Arimo',
	'Ubuntu' => 'Ubuntu',
	'Bitter' => 'Bitter',
	'Droid Serif' => 'Droid Serif',
	'Roboto' => 'Roboto',
	'Open Sans Condensed' => 'Open Sans Condensed',
	'Roboto Condensed' => 'Roboto Condensed',
	'Roboto Slab' => 'Roboto Slab',
	'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
	'Rokkitt' => 'Rokkitt',
	'Helvetica' => 'Helvetica',
);

//Sanitizes Fonts
function twdiving_sanitize_fonts( $input ) {
	$valid = array(
		'Source Sans Pro' => 'Source Sans Pro',
		'Open Sans' => 'Open Sans',
		'Oswald' => 'Oswald',
		'Playfair Display' => 'Playfair Display',
		'Montserrat' => 'Montserrat',
		'Raleway' => 'Raleway',
		'Droid Sans' => 'Droid Sans',
		'Lato' => 'Lato',
		'Arvo' => 'Arvo',
		'Lora' => 'Lora',
		'Merriweather' => 'Merriweather',
		'Oxygen' => 'Oxygen',
		'PT Serif' => 'PT Serif',
		'PT Sans' => 'PT Sans',
		'PT Sans Narrow' => 'PT Sans Narrow',
		'Cabin' => 'Cabin',
		'Fjalla One' => 'Fjalla One',
		'Francois One' => 'Francois One',
		'Josefin Sans' => 'Josefin Sans',
		'Libre Baskerville' => 'Libre Baskerville',
		'Arimo' => 'Arimo',
		'Ubuntu' => 'Ubuntu',
		'Bitter' => 'Bitter',
		'Droid Serif' => 'Droid Serif',
		'Roboto' => 'Roboto',
		'Open Sans Condensed' => 'Open Sans Condensed',
		'Roboto Condensed' => 'Roboto Condensed',
		'Roboto Slab' => 'Roboto Slab',
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
		'Rokkitt' => 'Rokkitt',
		'Helvetica' => 'Helvetica',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

//google fonts customizer section
$wp_customize->add_section( 'twdiving_google_fonts', array(
	'title' => __( 'Website Fonts', 'twdiving' ))
);

// google fonts settings
$wp_customize->add_setting('twdiving_fonts', array(
	'sanitize_callback' => 'twdiving_sanitize_fonts',
	'default' => 'Montserrat',
));

// google fronts controls
$wp_customize->add_control( 'twdiving_fonts', array (
	'label' => 'Font',
	'section' => 'twdiving_google_fonts',
	'settings' => 'twdiving_fonts',
	'type' => 'select',
	'description' => __( 'This font will be applied to all website text.', 'twdiving' ),
	'choices' => $font_choices
));

////////////////text size variables///////////////////////
//heading 1 size
$text_sizes[] = array(
	'slug' => 'twdiving_header_1',
	'default' => '50px',
	'label' => __('Heading 1 Size', 'twdiving' )
);
//heading 2 size
$text_sizes[] = array(
	'slug' => 'twdiving_header_2',
	'default' => '40px',
	'label' => __('Heading 2 Size', 'twdiving' )
);
//heading 3 size
$text_sizes[] = array(
	'slug' => 'twdiving_header_3',
	'default' => '30px',
	'label' => __('Heading 3 Size', 'twdiving' )
);
//heading 4 size
$text_sizes[] = array(
	'slug' => 'twdiving_header_4',
	'default' => '30px',
	'label' => __('Heading 4 Size', 'twdiving' )
);
//heading 5 size
$text_sizes[] = array(
	'slug' => 'twdiving_header_5',
	'default' => '30px',
	'label' => __('Heading 5 Size', 'twdiving' )
);
//heading 6 size
$text_sizes[] = array(
	'slug' => 'twdiving_header_6',
	'default' => '30px',
	'label' => __('Heading 6 Size', 'twdiving' )
);
//paragraph size
$text_sizes[] = array(
	'slug' => 'twdiving_paragraph',
	'default' => '20px',
	'label' => __('Paragraph Size', 'twdiving' )
);

foreach($text_sizes as $text_size) {
	//text size settings
	$wp_customize->add_setting(
		$text_size[ 'slug' ], array (
			'default' => $text_size[ 'default' ],
			'type' => 'option',
		));
	//text size controls
	$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        $text_size[ 'slug' ],
        array (
        'label' => $text_size[ 'label' ],
        'section' => 'twdiving_google_fonts',
        'settings' => $text_size[ 'slug' ]
    )));
}
