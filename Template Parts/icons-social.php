<?php /*
Name: Social Media Icons Template Part 
Description: Add Facebook, Twitter, Google+ and LinkedIn sharing to your template files with this easy to adapt tempate-part
Author: Piet Bos
Author URI: http://wpti.ps
Instructions: Step 1. Take the code from line 10-36 of this file, paste them into a blank file, save that file as icons-social.php and upload it to your theme's directory. On lines 19 and 21 you need to fill in your Twitter username and on line 24 you need to upload your favourite tweet-button (or grab it from http://a2.twimg.com/a/1319826270/images/goodies/tweetn.png) to the images folder of your theme. Step 2. Take line 39 of this file and paste it into your template files on the place where you want the icons to show up. Step 3. Take the scripts of line 42-49 and paste them in your footer.php file just above the closing </body> tag. Step 4. Style through CSS. NOTE that with the code below you will get 4 working share buttons. If you however want to make adjustments then visit the following pages: Facebook (http://developers.facebook.com/docs/reference/plugins/like/), Twitter (https://dev.twitter.com/docs/tweet-button), Google+ (http://www.google.com/webmasters/+1/button/), LinkedIn (https://developer.linkedin.com/plugins/share-button).
Version: 1.0
License: GPLv2
*/ ?>
<?php // START Social Media Icons Template Part ?>
<div class="social_media_icons">
	<ul>
		<li class="item facebook">
			<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=button_count&amp;show_faces=true&amp;width=40&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
		</li><!-- .facebook -->
		<li class="item twitter">
			<a href="https://twitter.com/share" class="twitter-share-button"
			      data-url="<?php the_permalink() ?>"
			      data-via="twitter-username"
			      data-text="<?php the_title(); ?>"
			      data-related="twitter-username"
			      data-count="horizontal">
					<?php // add a Twitter image to your themes images folder and call it with the line below ?>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tweet.png" alt="tweetbutton" /> 
				</a>
		</li><!-- .twitter -->
		<li class="item gplus">
			<g:plusone size="medium"></g:plusone>
		</li><!-- .gplus -->
		<li class="item linkedin">
			<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/Share" data-counter="right"></script>
		</li><!-- .linkedin -->
	</ul>
</div><!-- .social_media_icons -->
<?php // END Social Media Icons Template Part ?>

<?php // Call template-part by adding the following line to your template: ?>
<?php get_template_part( 'icons', 'social' ); ?>

<?php // Add to footer.php before closing body tag (</body>) ?>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>