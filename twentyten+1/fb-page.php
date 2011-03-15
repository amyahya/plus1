<?php
/**
 * Template Name: +1-FB1
 *
 * FB Page Template n1.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>

<!-- header -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/fbstyle.css" />
<?php 
	//getting fbcredential from custom fields
	$fbappid = get_post_meta($post->ID, 'plus1_fb_app_id', true);
	$fbsecret = get_post_meta($post->ID, 'plus1_fb_app_secret', true);
	$fbapikey = get_post_meta($post->ID, 'plus1_fb_api_key', true);
	
	//loading facebook phpsdk
	require ( get_stylesheet_directory().'/facebook.php');

	//loading phpsdk	
	$app_id = $fbappid;
	$app_secret = $fbsecret;
	$facebook = new Facebook(array(
			'appId' => $app_id,
			'secret' => $app_secret,
			'cookie' => true
	));

	?>
		
<!-- <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> -->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_enqueue_script("jquery"); 
	wp_head();
?>
<style type="text/css">
	html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }
	
	#dlthis{
		display:none;
		}
</style>

<!-- fbook autoresize iframe -->
<script type="text/javascript">
window.fbAsyncInit = function() {
FB.Canvas.setAutoResize(true);
FB.Canvas.setSize();
FB.Event.subscribe('edge.create', function(href, widget) {
 // Do something, e.g. track the click on the "Like" button here
    $('#dlthis').show();
 });
}
// Do things that will sometimes call sizeChangeCallback()
function sizeChangeCallback() {
FB.Canvas.setSize();
}
</script>

</head>

<body <?php body_class(); ?> id="fb1" >
<h2>Custom Field Check</h2>
<?php 
	echo ('<h3>'.$fbappid.'</h3>');
	?>
<h2>Cust field check end.</h2>	
<!-- fbook load js sdk -->
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
appId : <?php echo $fbappid; ?>,
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true // parse XFBML
});
</script>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> : on fb
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

				<?php 
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
						has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : 
					?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" /> 
						
						
						<!-- <img id="fbimgbanner" src="<?php header_image(); ?>" alt="" /> -->
												
						
						
					<?php endif; ?>
					
					
						
			</div><!-- #branding -->
			
			<!--<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
			-->
			<!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">

<!-- header end -->


		Loading fb sdk check :
		<?php
		$signed_request = $facebook->getSignedRequest();

		$page_id = $signed_request["page"]["id"];
		$page_admin = $signed_request["page"]["admin"];
		$like_status = $signed_request["page"]["liked"];
		$country = $signed_request["user"]["country"];
		$locale = $signed_request["user"]["locale"];

		echo "<br>page id = $page_id";
		echo "<br>page admin = $page_admin";
		echo "<br>like status = $like_status";
		echo "<br>country = $country";
		echo "<br>locale = $locale";
		?>
		<?php 
		if ($like_status) {
			echo "<div> Thanks for liking us : <a href=\"#\"> Clickhere to download this page source </a></div>";
			}
			else {
			echo "<div> Yeah, we like you. It sad you haven't like us. Please Like us to download this page source. </div>";
			}
		?>
		<fb:like href="http://www.facebook.com/pages/1/202918663053267?sk=app_191016167605109" layout="button_count" show_faces="false" width="300" font="trebuchet ms"></fb:like>
		</script>
		<div id="dlthis" style="display:none;">Download This</div>
		<?php
			if (function_exists('show_islidex')) {
			show_islidex(); 
			}
			?>


		<div id="container" class="one-column">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			// get_template_part( 'loop', 'page' );
			?>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
			<div style="clear:both"></div>
			<div id="fbcommentbox">
			<fb:comments href="http://www.facebook.com/pages/1/202918663053267" num_posts="17" width="500"></fb:comments>
				</div>
			
			</div><!-- #content -->
		</div><!-- #container -->



<!-- footer -->

</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>




<!--<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '194398987247316', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>-->

</body>
</html>
<!-- footer end -->