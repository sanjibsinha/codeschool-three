<?php
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(
        <?php echo get_theme_file_uri( 'images/ocean.jpg' ) ?>
        );"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php bloginfo( 'name' ); ?></h1>
      <div class="page-banner__intro">
        <p><?php bloginfo( 'description' ); ?></p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

  <?php 
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
    <h1 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </div>
    <div class="metabox">
    <h4>Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    <?php echo get_the_category_list(', '); ?>
    </h4>
    </div>
    <div class="generic-content">
    <?php the_excerpt(); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">
    Continue Reading &raquo;</a>    
    </p><p></p>
    </div>

  <?php
  }
  
  ?>



  </div>    


<?php
get_footer();
?>