<?php wp_footer(); ?>
<footer>
    <ul class="footer-links">
        <li class="<?php if(is_front_page()) echo("current-menu-item")?>"><a href="<?php echo get_home_url()?>">Home</a></li>
        <li class="top-nav-dropdown <?php if (is_page('about-us')) echo("current-menu-item")?>" id="about-us-link"><a href="<?php echo site_url("about-us")?>">About Us</a></li> 
        <li class="<?php if (is_page('learn-to-dive')) echo("current-menu-item")?>"><a href="<?php echo site_url("learn-to-dive")?>">Learn to dive</a></li> 
        <li class="<?php if (is_page('news')) echo("current-menu-item")?>"><a href="<?php echo site_url("news")?>">News and Events</a></li>
        <li class="<?php if (is_page('contact-us')) echo("current-menu-item")?>"><a href="<?php echo site_url("contact-us")?>">Contact Us</a></li>
    </ul>
    
    <div class="footer-logos">
        <img alt="Swim England Diving Development Centre" src="/wp-content/uploads/2018/12/swim-england.png" width="300" height=""><br>
        <img alt="Swim Mark" src="<?php echo get_theme_file_uri("/images/swim_mark_logo.png") ?>" width="200" height="">
    </div>

    <div class="footer-text">
        <p class="primary">
            <a href="mailto:tunbridgewellsdiving@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> tunbridgewellsdiving@gmail.com</a>
        </p>
        <p class="primary">Tunbridge Wells Sports Centre, St. Johns Road, Tunbridge Wells, TN4 9TX</p>

        <a class="primary <?php if (is_page('privacy-policy')) echo("current-menu-item");?>" href="<?php echo site_url("privacy-policy")?>">Privacy Policy</a>
        <p class="copyrightNotice primary"><i class="fa fa-copyright" aria-hidden="true"></i>  2022 Tunbridge Wells Diving Club. All rights reserved</p>
    </div>
</footer>

</body>
</html>