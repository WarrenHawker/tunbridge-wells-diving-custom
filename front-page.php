<!--------------------------- Home page template -------------------------->
<?php get_header();?>
<div class="front-page-banner">
    <img src="<?php echo get_theme_file_uri("/images/diving_pool_cropped.jpg") ?>"> 
    <div class="front-page-header">
        <?php echo wp_kses_post(get_theme_mod( 'twdiving_header_text')); ?>
        <div class="front-page-banner-text">
            <?php echo wp_kses_post(get_theme_mod( 'twdiving_banner_text')); ?>
        </div>
    </div>
</div> 
    

<?php get_footer();?>
<script>
    function frontPageMobileView() {
    const frontPageText = document.getElementsByClassName('front-page-banner-text')[0];
    const frontPageHeader = document.getElementsByClassName('front-page-header')[0];
    const frontPageBanner = document.getElementsByClassName('front-page-banner')[0];
    const pageFooter = document.querySelector('footer');
    const mediaQueryList = window.matchMedia('(max-width: 1300px)');

    if(mediaQueryList.matches) {
        pageFooter.parentNode.insertBefore(frontPageText, pageFooter);
        frontPageBanner.classList.toggle('mobile');
        frontPageText.classList.toggle('mobile');
    } else {
        frontPageHeader.appendChild(frontPageText);
    }
}

frontPageMobileView();
</script>
