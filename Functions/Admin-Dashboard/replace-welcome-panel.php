<?php
	// Replace the WordPress Welcome Panel with your own and make it difficult to "dismiss" it
	// Based on plugin by Remi Corson (http://remicorson.com/) and post he published on http://www.wpexplorer.com/custom-wordpress-welcome-message/

function so_dashboard_styles() { ?>
	<style media="screen" type="text/css">
		#screen-meta-links, .welcome-panel .welcome-panel-close:before, a.welcome-panel-close { display: none; }
	</style>
<?php }
add_action('admin_head', 'so_dashboard_styles');


// http://www.wpexplorer.com/custom-wordpress-welcome-message/
function so_welcome_panel() { 
?>
	<div class="custom-welcome-panel-content">
	<h3><?php _e( 'Welcome to your custom dashboard Message!', 'textdomain' ); ?></h3>
	<p class="about-description"><?php _e( 'We will show you how to get your site up and running in 5 easy steps!', 'textdomain' ); ?></p>
	<div class="welcome-panel-column-container">
	<div class="welcome-panel-column">
		<h4><?php _e( 'Let&#39;s Get Started', 'textdomain' ); ?></h4>
		<p class="hide-if-no-customize">
			<?php printf( __( '<a href="%s">Edit your site settings</a> and after you&#39;re done, you can come back here by clicking on "Home" in the sidebar.', 'textdomain' ), admin_url( 'options-general.php' ) ); ?>
		</p>
	</div>
	<div class="welcome-panel-column">
		<h4><?php _e( 'Next Steps' ); ?></h4>
		<ul>
		<?php if ( 'page' == get_option( 'show_on_front' ) && ! get_option( 'page_for_posts' ) ) : ?>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-edit-page">' . __( 'Edit your front page' ) . '</a>', get_edit_post_link( get_option( 'page_on_front' ) ) ); ?></li>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add additional pages' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
		<?php elseif ( 'page' == get_option( 'show_on_front' ) ) : ?>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-edit-page">' . __( 'Edit your front page' ) . '</a>', get_edit_post_link( get_option( 'page_on_front' ) ) ); ?></li>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add additional pages' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-write-blog">' . __( 'Add a blog post' ) . '</a>', admin_url( 'post-new.php' ) ); ?></li>
		<?php else : ?>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-write-blog">' . __( 'Write your first blog post' ) . '</a>', admin_url( 'post-new.php' ) ); ?></li>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add an About page' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
		<?php endif; ?>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-view-site">' . __( 'View your site' ) . '</a>', home_url( '/' ) ); ?></li>
		</ul>
	</div>
	<div class="welcome-panel-column welcome-panel-last">
		<h4><?php _e( 'More Actions' ); ?></h4>
		<ul>
			<li><?php printf( '<div class="welcome-icon welcome-widgets-menus">' . __( 'Manage <a href="%1$s">widgets</a> or <a href="%2$s">menus</a>' ) . '</div>', admin_url( 'widgets.php' ), admin_url( 'nav-menus.php' ) ); ?></li>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-comments">' . __( 'Turn comments on or off' ) . '</a>', admin_url( 'options-discussion.php' ) ); ?></li>
			<li><?php printf( '<a href="%s" class="welcome-icon welcome-learn-more">' . __( 'Learn more about getting started' ) . '</a>', __( 'http://codex.wordpress.org/First_Steps_With_WordPress' ) ); ?></li>
		</ul>
	</div>
	</div>
	<div class="">
	<h3><?php _e( 'If you need more space' ); ?></h3>
	<a class="button button-primary button-hero load-customize hide-if-no-customize" href="http://your-website.com"><?php _e( 'Contact Us' ); ?></a>
	<p class="about-description">Create a new paragraph!</p>
	<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod.
	
	Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
	</div>
	</div>

<?php }

remove_action( 'welcome_panel', 'wp_welcome_panel' );

add_action( 'welcome_panel', 'so_welcome_panel' );
