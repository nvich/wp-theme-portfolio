<?php
/*
 * Template Name: Template first
 */
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div>
    <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
