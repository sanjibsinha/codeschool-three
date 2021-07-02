<?php

while (have_posts()) {
    # code...
    the_post(); ?>
    <h1><?php  the_title();  ?></h1>
<?php the_content(); ?>


<?php }

?>