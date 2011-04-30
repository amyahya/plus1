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
<!-- loading yui grid -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssgrids/grids-min.css">

<!-- special treatment for the lovely wild browser -->
<!--[if lte ie 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/ie.css" />
<![endif]-->

<!-- <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> -->

<?php 
	
					//getting fbcredential from custom fields
					$myfbapp = get_post_meta($post->ID,'_myfbapp',TRUE);
					$fbappid = $myfbapp['app_id'];
					$fbsecret = $myfbapp['app_secret'];
					$fbapikey = $myfbapp['api_key'];
					
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
					
					//global $fbappid, $fbsecret, $fbapikey, $facebook ;
					
					?>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	wp_enqueue_script("jquery"); 
	wp_head();
?>

<!-- custom skin -->
<?php
	$css_key = $myfbapp['fbskin'];
	
	if (empty($css_key) && is_singular( 'fbpage' )) { /*just tobe sure no glitch on defaults */
		echo '<link rel="stylesheet" href="' . get_bloginfo('stylesheet_directory') . '/skins/fbstyle-00.css" type="text/css" media="screen" />';
		}
	elseif (!empty($css_key) && is_singular( 'fbpage' )) {
					echo '<link rel="stylesheet" href="' . get_bloginfo('stylesheet_directory') . '/skins/' .$css_key.'.css" type="text/css" media="screen" />';
				}
?>

<!-- css hack for fb page compatibility -->
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
	<div id="main">

<!-- header end -->

		<div id="container" class="one-column">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			// get_template_part( 'loop', 'page' );
			?>
			
			<?php 
			//$loop = new WP_Query(array('post_type' => 'portfolio' ); 
			?>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( $myfbapp['showtitle'] == 'showtitle' ) { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
					
					<!-- fb stuff -->	<!-- Loading fb sdk check : -->
					<?php
					// setting some useful variables 
					$signed_request = $facebook->getSignedRequest();
					
					$page_id = $signed_request["page"]["id"];
					$page_admin = $signed_request["page"]["admin"];
					$like_status = $signed_request["page"]["liked"]; // used by fan gating shortcodes function
					$country = $signed_request["user"]["country"];
					$locale = $signed_request["user"]["locale"];
					?>
					
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php // edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; 
			// end of the loop. 
			?>
			<div style="clear:both"></div>
			
			
			</div><!-- #content -->
		</div><!-- #container -->



<!-- footer -->

</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a> | <small>coder ? : <a target="_blank" href="https://github.com/amyahya/plus1">fork this on github</a></small>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php	wp_footer(); ?>

</body>
</html>
<!-- footer end -->