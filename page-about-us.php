<!-- about us page template -->
<?php get_header(); ?>
<div class="main-content"> <?php
while(have_posts()) {
    the_post(); ?>
    <h1 class="primary"><?php the_title();?></h1>
    <div class=" about-us-content width-50 margin contrast"><?php the_content();?></div>
<?php } ?>
</div>

<div class="committee-container primary">
    <div class="committee-container-image">
        <img src="https://www.twdiving.co.uk/wp-content/uploads/2018/11/committee-150x150.png">
    </div>
    <h2>Committee</h2>
    <div class="contrast committee-members">
    <p>Chair: <?php the_field('chair')?></p>
    <p>Treasurer: <?php the_field('treasurer')?></p>
    <p>Marketing and PR: <?php the_field('marketing_and_pr')?></p>
    <p>Secretary: <?php the_field('secretary')?></p>
    <p class="welfare-officer">Welfare Officer: <?php the_field('welfare_officer')?>
    <span><img src="<?php $memberImage = get_field('welfare_officer_picture'); echo $memberImage ['url']?>" width="auto" height="200"></span></p>
</div>
</div>

<div class="coaches-container">
    <div class="coaches-container-image">
        <img src="https://www.twdiving.co.uk/wp-content/uploads/2018/11/whistle-150x150.png">
    </div>
    <h2 class="primary">Coaches</h2>
    <?php $coach = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'coaches',
                    'meta_key' => 'head_coach',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                ));
                while($coach->have_posts()) {
                    $coach->the_post(); ?>
    <div class="coach-profile">
        <h5><?php the_title()?></h5>
        <h6>Qualifications:</h6>
        <h6><?php the_field('qualifications')?></h6>
        <br>
        <p><?php the_content()?></p>
    </div>
    <?php } wp_reset_postdata()?>
</div>


<?php get_footer();?>