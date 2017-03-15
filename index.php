<?php get_header(); ?>

<body>



<div class="posts">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div style="background-color:#ede8d9; margin-top:20px" class="normalpadding horizontalpadding">
  <div style="padding-left:5%; padding-right:5%">
    <div class="post-header">
        <h2 class="txtbrown" align="center"><a class="postlinks" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </div><!--end post header-->
    <div class="txtbrown normalpadding" align="center">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    <div style="padding-left:20px">
    <div class="date txtbrown txtsmallposts"><?php the_time( 'M j y' ); ?></div>
    <div class="txtbrown txtsmallposts"><p class="txtsmallposts">By <?php the_author(); ?><br></p></div>
    </div>
    <div class="post-footer" style="padding-top:20px; padding-left:20px">
    <?php comments_template(); ?>
    </div><!--end post footer-->
    </div>
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
   </div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

</div>
</body>

<?php get_sidebar(); ?>
<?php get_footer(); ?>