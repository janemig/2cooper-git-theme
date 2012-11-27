<?php
/**
 * The main template file.
 */
  
    get_header(); ?>
    <?php  get_sidebar() ?>
    <div id="post_content">
    
        <?php
        
            while(have_posts())
                {
                    the_post();
                    ?><h1><?php the_title(); ?></h1><?php
                    the_content();
                }
        ?>

          
     </div><!--END maincontent--> 


<?php get_footer(); ?>