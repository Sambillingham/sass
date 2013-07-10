<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>

	<?php die('You can not access this page directly!'); ?>

<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>

  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>

		<p>This post is password protected. Enter the password to view comments.</p>

  	<?php endif; ?>

<?php endif; ?>

<div class="comments-block clearfix">

	<?php if($comments) : ?>

	  	<ol>
	    	<?php foreach($comments as $comment) : ?>

	  		<li id="comment-<?php comment_ID(); ?>" class="post-comment clearfix">

	  			<?php if ($comment->comment_approved == '0') : ?>

	  				<div class="awaiting-aproval">
	  					
	  					<p>Your comment is awaiting approval</p>
		  			</div>

	  			<?php endif; ?>

	  			<div class="comment-gravatar">
	  			<?php echo get_avatar( $comment, 75 ); ?> 
		  		</div>

		  		<div class="comment-content">

		  		<p class="comment-meta"><?php comment_author_link(); ?> on <?php comment_date(); ?>  </p>

	  			<?php comment_text(); ?>

		  		</div>

	  		</li>

			<?php endforeach; ?>

		</ol>

	<?php else : ?>

		<p>No comments yet</p>

	<?php endif; ?>

	</div>

<div class="new-comment-block">

	<?php if(comments_open()) : ?>

		<?php if(get_option('comment_registration') && !$user_ID) : ?>

			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

		<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if($user_ID) : ?>

					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

				<?php else : ?>

					<p><input class="sass-input-field" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />

					<label class="sass-comment-label" for="author">Name <?php if($req) echo "(required)"; ?></label></p>

					<p><input class="sass-input-field" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />

					<label class="sass-comment-label" for="email">Mail (not published) <?php if($req) echo "(required)"; ?></label></p>

					<p><input class="sass-input-field" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />

					<label class="sass-comment-label" for="url">Website</label></p>

				<?php endif; ?>

				<p><textarea  name="comment" id="comment" cols="50" rows="6" tabindex="4"></textarea></p>

				<p><input class="btn" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />

				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

				<?php do_action('comment_form', $post->ID); ?>

			</form>

		<?php endif; ?>

	<?php else : ?>

		<p>The comments are closed.</p>

	<?php endif; ?>

</div>