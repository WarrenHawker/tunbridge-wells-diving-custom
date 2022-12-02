<?php
//section for front page text
    $wp_customize->add_section( 'twdiving_front_page_text', array(
        'title' => __( 'Front Page Text', 'twdiving' ))
    );

    //default front page header text
    ob_start(); ?> 
    <h1 class="primary">Welcome to <span class="secondary">Tunbridge Wells</span> Diving Club</h1>
    <h2 class="contrast">home of <span class="primary">competitive springboard <br />diving</span> in Kent</h2>
    <?php $header_default_text = ob_get_clean();

    //front page header text
    $front_page_text[] = array(
        'slug' => 'twdiving_header_text',
        'default' => $header_default_text,
        'label' => __( 'Header Text', 'twdiving' )
    );

    //default front page banner text
    ob_start(); ?> 
        <p class="contrast"> Providing <span class="primary">quality diving coaching</span> for everyone who has a passion for diving as a sport.
        </p>
        <a class="primary-button" href="/about-us">Learn more</a>
        <h1 class="primary">New to diving?</h1>
        <p class="contrast">We offer regular <span class="primary">free taster sessions</span> in our beginner's classes on Wednesdays and Fridays.</p>
        <a class="primary-button" href="/contact-us">Book a taster session</a> 
    <?php $banner_default_text = ob_get_clean();

    //front page banner text
    $front_page_text[] = array(
        'slug' => 'twdiving_banner_text',
        'default' => $banner_default_text,
        'label' => __( 'Banner Text', 'twdiving' )
    );

    foreach ( $front_page_text as $page_text ) {
	
        // settings
        $wp_customize->add_setting(
            $page_text[ 'slug' ], array (
                'default' => $page_text[ 'default' ],
                'type' => 'theme_mod',
                'transport' => 'postMessage',
                'sanitize_callback' => 'twdiving_sanitize_text',
                'priority' => 20,
            )
        );
        // controls
        $wp_customize->add_control( new twdiving_Customize_Textarea_Control(
            $wp_customize,
            $page_text[ 'slug' ],
            array (
                'label' => $page_text[ 'label' ],
                'section' => 'twdiving_front_page_text',
                'settings' => $page_text[ 'slug' ]
            )
        ));
    };
    function twdiving_sanitize_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }