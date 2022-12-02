<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>"> 
        <meta name="viewport" content="width=device-width", initial-scale="1";>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <nav>
            <li class="mobile-toggle-button"><a href="javascript:void(0);"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
            <a class="nav-bar-logo" href="<?php echo get_home_url()?>">
                <div>
                    <img id="navBarLogoIMG" src="<?php echo get_theme_file_uri("/images/TWDC_logo_new.jpg") ?>" width="70px" height="70px">
                </div>
            </a>    
            <ul class="nav-bar-links" id="mobileNavClick">
                <li class="<?php if(is_front_page()) echo("current-menu-item")?>"><a href="<?php echo get_home_url()?>">Home</a></li>
                <li class="top-nav-dropdown <?php if (is_page('about-us')) echo("current-menu-item")?>" id="about-us-link"><a href="<?php echo site_url("about-us")?>">About Us <i class="fa fa-caret-down" id="desktop-dropdown-icon" aria-hidden="true"></i> <i class="fa fa-caret-right" id="mobile-dropdown-icon" aria-hidden="true"></i></a>
                    <div class="top-nav-dropdown-menu">
                        <a href="<?php echo site_url("pool")?>" class="top-nav-dropdown-item <?php if (is_page('pool')) echo("current-menu-item")?>" id="faq-link">The Pool</a>
                  </div>
                </li> 
                <li class="top-nav-dropdown <?php if (is_page('learn-to-dive')) echo("current-menu-item")?>" id="about-us-link"><a href="<?php echo site_url("learn-to-dive")?>">Learn to Dive <i class="fa fa-caret-down" id="desktop-dropdown-icon" aria-hidden="true"></i> <i class="fa fa-caret-right" id="mobile-dropdown-icon" aria-hidden="true"></i></a>
                    <div class="top-nav-dropdown-menu">
                        <a href="<?php echo site_url("faq")?>" class="top-nav-dropdown-item <?php if (is_page('faq')) echo("current-menu-item")?>" id="faq-link">FAQ</a>
                  </div>
                </li> 
                <li class="<?php if (is_page('news')) echo("current-menu-item")?>"><a href="<?php echo site_url("news")?>">News and Events</a></li>
                <li class="<?php if (is_page('contact-us')) echo("current-menu-item")?>"><a href="<?php echo site_url("contact-us")?>">Contact Us</a></li>
            </ul>
        </nav>