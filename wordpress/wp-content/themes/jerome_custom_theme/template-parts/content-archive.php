<div class="card" style="width: 18rem;">
  <img src=" <?php the_post_thumbnail_url("thumbnail"); ?>" class="card-img-top" alt="image">
  <div class="card-body">
    <h3><?php  the_title();?></h3>
    <span><?php  comments_number();?></span>
    <span><?php  the_date();?></span>
    <span><a href="<?php the_permalink(); ?>">Read more</a></span>
    <p class="card-text">
        <?php the_excerpt();?>
    </p>
  </div>
</div>
<br>
<br>