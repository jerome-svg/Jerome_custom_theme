<?php get_header();?>
<section class="container">
    <h1 class="jv-h1">
        <?php 
        the_title();
        ?>
    </h1>
</section>
<section class="container"> 
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }

    ?>

</section>
<?php 
    the_posts_pagination();

?>

<?php get_footer();?>