<?php 
/* 
Template Name: CMB Homepage 
*/ 
?>
<?php
/**
 * The template for rendering pages without sidebars.
 * 
 * @package Standard
 * @since 3.0
 */
?>
<?php get_header(); ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>

<?php $options = get_option( 'standard_theme_layout_options' ); ?>
<div id="break" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center  ;	
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $src[0]; ?>', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $src[0]; ?>', sizingMethod='scale')"; "> 
	
     <div class="container">
     
      		<div class="row">
      		<div class="video " >
      			<img src="<?php esc_url( header_image() ); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>">
    			<?php echo get_post_meta($post->ID, 'vidlink', true); ?>
      		</div>	
      			
      		</div>
      </div>
      
</div>

<div id="wrapper">
	<div class="container">
		<div class="row">
			
			<div id="main" class="span12 clearfix" role="main">
				<?php if ( have_posts() ) { ?>
					<?php while ( have_posts() ) {
						 the_post(); ?>
						<div id="post-<?php the_ID(); ?> format-standard" <?php post_class( 'post' ); ?>>
							<div class="post-header clearfix">
								<h1 class="post-title"><?php the_title(); ?></h1>	
							</div> <!-- /.post-header -->						
							<div id="content-<?php the_ID(); ?>" class="entry-content">
								<?php the_content(); ?>
								<div id="sidebar" class="front_links_side span3"> <!-- start fake sidebar for front page -->
									<li class="findus" id="contactus"><a>Contact Info</a></li>
									<li class="findus" id="facebook"><a href="https://www.facebook.com/coolmustachebro"  >facebook</a></li>
									<li class="findus" id="gplus"><a href="https://plus.google.com/105079073547538274133"  >google+</a></li>
									<li class="findus" id="twitter"><a href="http://twitter.com/coolmustachebro"  >twitter</a></li>
									<li class="findus" id="podcast"><a href="http://coolmustachebro.com/class/podcast" >podcast</a></li>
									<li class="findus" id="blog"><a href="http://coolmustachebro.com/blog" > blog</a></li>
									
									
								</div>
							</div><!-- /.entry-content -->
						</div> <!-- /#post- -->
					<?php } // end while ?>
			
				<?php } // end if ?>
			</div><!-- /#main -->
			
		</div><!--/row -->
	</div><!-- /container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>