<?php
/*
Template Name: Contact us
*/
?>

<?php get_header(); ?>

<body>

<div id="posts" style="font-family:Verdana, Geneva, sans-serif; color:#463219">
<?php

if($_POST[sent]){
	if(isset($_POST['url']) && $_POST['url'] == ''){
	$error = "";
	if(!trim($_POST[your_name])){
		$error .= "<p>Please enter your name</p>";
	}
	if(!filter_var(trim($_POST[your_email]),FILTER_VALIDATE_EMAIL)){
		$error .= "<p>Please enter a valid email address</p>";
	}
	if(!trim($_POST[your_message])){
		$error .= "<p>Please enter your message</p>";
	}
	if(!$error){
		$content = "Message from: " . trim($_POST[your_name]) . ". \r\n \r\n" . trim($_POST[your_message]);		
		$email = mail("info@dunkgrassroots.org",trim($_POST[your_name])." sent you a message from ".get_option("blogname"),$content,"From: ".trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email]));
	}
	}
}

?>
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
              <p style="padding:10px; padding-right:20px"> Do you have some questions? Leave a message below and we will contact you soon.</p>
				<form action="<?php the_permalink(); ?>" id="contact_me" method="post" style="padding:10px; padding-left:15px">
					<input type="hidden" name="sent" id="sent" value="1" />
					<ul class="contactform" style="padding-top:10px; list-style:none">
						<li>
							<label for="your_name">Name</label>
							<input type="text" name="your_name" size="45" id="your_name" value="<?php echo $_POST[your_name];?>" />
						</li>
						<li style="padding-top:10px">
							<label for="your_email">Email</label>
							<input type="text" name="your_email" size="45" style="padding-left:4px" id="your_email" value="<?php echo $_POST[your_email];?>" />
						</li>
                        <li style="padding-top:10px">
							<label for="your_subject">Subject</label>
							<input type="text" name="your_subject" size="47" style="padding-left:5px" id="your_subject" value="<?php echo $_POST[your_subject];?>" />
						</li>
						<li style="padding-top:5px">
							<label for="your_message">Message</label><p></p>
							<textarea rows="5" cols="40" name="your_message" id="your_message" style="padding-top:5px"><?php echo stripslashes($_POST[your_message]); ?></textarea>
						</li>
                        <li class="antispam" style="padding-top:10px">
                        	<label for="url" class="antispam">Leave this empty:</label><p></p>
                            <input type="text" name="url" id="url" value="<?php echo $_POST[url];?>"/>
                        </li>
						<li style="padding-top:10px">
							<input type="submit" name = "send" value = "Send email"/>
						</li>
					</ul>
				</form>
                </td>
                </tr>
                </table>
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