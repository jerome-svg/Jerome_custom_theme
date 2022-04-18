<?php get_header();?>

<section class="container" onclick="window.print()">
    <h1 class="jv-h1">
        <?php 
        the_title();
        ?>
    </h1>
    <h1>sadasasdsadsadasdasdsa</h1>
    <?php the_date();?>
</section>
<section class="container"> 
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }

    ?>

</section>

<?php get_footer();?>