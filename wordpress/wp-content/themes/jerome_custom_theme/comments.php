<?php 
    if( ! have_comments()){
        echo  "leave Comment";
    }
    else{
        echo get_comments_number(). " Comments Pogi Jerome";
    }

?>


<?php 

    wp_list_comments(
        array(
          'avatar_size' => 100,
          'style' => 'div'
        )
    );

?>
<?php
  if(comments_open()){
      comment_form(
        array(
            'class_form'=>'section',
            'titile_reply_before'=> "<h2 id='reply-title' class='reply-title'>",
            'title_reply_after'=>"</h2>"

        )
      );
  }
?>