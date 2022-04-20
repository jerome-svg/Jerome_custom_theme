<?php get_header();?>
<section> 
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_title();
                the_post();
                get_template_part('template-parts/content', 'page');
            }
        }
    ?>
</section>

<?php get_footer();?>