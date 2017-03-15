<?php
/*
Template Name: Contact us
*/
?>

<?php get_header(); ?>

<body>

<div id="posts" style="font-family:Verdana, Geneva, sans-serif; color:#463219">

<?php get_header(); ?>
<div id="container" >
	<div id="content" role="main">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
			<h1 class="entry-title txtbrown normalpadding" align="center"><?php the_title(); ?></h1>
            <p><br></p>
			<div class="bgbrown divimgleftDisplay">
			<div class="entry-content txtcreme" style="color:#FFF;">
			<?php if($email){ ?>
				<p><strong>Thank you for your message, we will contact you soon.</strong></p>
			<?php } else { if($error) { ?>
				<p><strong>Your message hasn't been sent. Please re-check your info.</strong><p>
				<?php echo $error; ?>
			<?php } else { the_content(); } ?>
            <div class="wrapper">
             <img class="floatleftW imgsettings imggh1" src="http://www.volunteerwithdunk.com/wp-content/uploads/2014/05/ws-contactimg2.jpg" alt="Image of Dunk Volunteers" />
			  <div class="floatlefttW txtcreme">
              <p style="padding:10px; padding-right:20px; font-size:18px; "> Do you have some questions? <br/> Leave a message at info@dunkgrassroots.org and we will be in touch soon.</p>
				<?php } ?>
			</div><!-- .entry-content -->
		</div><!-- #post-## -->
        </div>
        </div>
		<?php endwhile; ?>
	</div><!-- #content -->
</div><!-- #container -->
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>