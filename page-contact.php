<?php
/*
Template Name: Contact
*/

get_header(); ?>
 <?php  get_sidebar() ?>
    <div id="post_content" class="contact_area">
    <div id="contactform">
        <div id="contact-vertical"></div>
        <?php
        
            while(have_posts())
                {
                    the_post();
                    the_content();
                }
        ?>
        <div class="clear"></div>
     </div>
     </div><!--END maincontent--> 

<?php get_footer(); ?>