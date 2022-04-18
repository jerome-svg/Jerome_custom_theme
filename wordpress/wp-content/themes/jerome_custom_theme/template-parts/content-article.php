
<h1>
<?php 
    the_date();
?>
</h1>
<h2>
<?php 
    the_tags();
    comments_number();
?>
</h2>
<?php
    the_content();
?>

<h1>This code bellow is for comments</h1>
<div>
    <?php comments_template();?>
</div>