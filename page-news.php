<!-- news and events page template -->
<?php get_header(); ?>
<div class="main-content"> 
  <h1 class="primary">Our latest news and events</h1>
  <div class="main-content-text contrast"><?php the_content() ?></div>

  <div class="posts-container">
    <?php $p = new WP_Query(array('post_type' => 'post'));
      if ($p->have_posts()) {
        while ($p->have_posts()) {
          $p->the_post();?>
          <div class="individual-post">
            <h2><a class="primary" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
             <?php if (has_post_thumbnail()) { ?>
            <div class="individual-post-picture"> <?php the_post_thumbnail(array(200, 200)); ?> </div>
            <?php }; ?>
            <p class="contrast <?php if(!has_post_thumbnail()) {echo ("full-width");};?>"><?php if (has_excerpt()) {
              echo get_the_excerpt();
            } else {
                echo wp_trim_words( get_the_content(), 20, '...' );
              }?>
              <a href="<?php the_permalink(); ?>" class="primary">Learn more</a></p>
          </div>
       <?php }
      } ?>
  </div>
</div>
<?php get_footer(); ?>