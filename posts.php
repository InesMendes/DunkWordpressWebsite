<?php
/*
Template Name: Posts
*/
?>

<?php get_header(); ?>

<body>

<div class="posts">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <h2 class="txtbrown" align="center"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <div class="txtbrown"><p class="big">By </p><?php the_author(); ?><p><br></p></div>
    </div><!--end post header-->
    <div class="entry clear txtbrown">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
        <br>
    </div><!--end entry-->
    <div class="post-footer">
    <?php do_action('comment_form', $post->ID); ?>
        <div class="comments myfont"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?><p></p></div>
    </div><!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

</div>
</body>

<?php get_sidebar(); ?>
<?php get_footer(); ?>