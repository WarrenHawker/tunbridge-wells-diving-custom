<!--------------------------- default page template -------------------------->
<?php get_header();?>
<div class="main-content">
    <?php while(have_posts()) {
        the_post(); ?>
        <h2 class="primary"><?php the_title();?></h2>
        <div class="width-75 margin contrast"><?php the_content();?></div>
    <?php } ?>
</div>

<?php get_footer();?>