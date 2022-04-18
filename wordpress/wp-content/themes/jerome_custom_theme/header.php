<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <?php 
          if(function_exists('the_custom_logo')){

            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
            // the_custom_logo();
          }

          echo "<h4 class='jv-h4'>" . get_bloginfo('name') . "<h4>"; 
      
      ?>

      <img src="<?php echo $logo[0];?>" alt="sample" style="width: 40px; height:40px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">


      <?php 

          wp_nav_menu(
            array(
              "menu" => "primary",
              "container" => "",
              "theme_location"=> "primary",
              "items_wrap"=> '<ul id="" class="navbar-nav me-auto mb-2 mb-sm-0">%3$s</ul>'
            )
          );      
      ?>
      
      <?php get_search_form();?>

      </div>
    </div>
  </nav>
<br><br>
  <section class="container jv-sidebar">
    <?php
      dynamic_sidebar('sidebar-1');
    
    ?>

  </section>