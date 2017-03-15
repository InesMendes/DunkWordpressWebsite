<?php
/*
Template Name: My Custom Page
*/
?>

<?php get_header(); ?>

<body>

<div id="News" align="center">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> align="center">
    <div class="entry clear wrapper" align="center">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<!--end navigation-->
<?php else : ?>
<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>