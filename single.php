<!-- single post template -->
<?php get_header(); ?>
<style> 
      footer {
        position: sticky;
        bottom: 0px;
    }
    
   .main-content {
       padding-bottom: 20%;
   }
   @media screen and (max-width: 800px) {
        .individual-post {
            display: block;
        }
        footer {
        position: unset;
        bottom: unset;
        }
        .main-content {
            padding: 0;
        }
    }
  
</style>

<div class="main-content">
    <?php while(have_posts()) {
        the_post(); ?>
        <div class="individual-post width-50 margin">
            <h2 class="primary"><?php the_title();?></h2>
             <?php if (has_post_thumbnail()) { ?>
            <div> <?php the_post_thumbnail(array(500, 500)); ?> </div>
            <?php }; ?>
            <div class="contrast <?php if(!has_post_thumbnail()) {echo ("full-width");};?>"><?php the_content(); ?></div>
        </div>
    <?php } ?>
</div>
<?php get_footer();?>