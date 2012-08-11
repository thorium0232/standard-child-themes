<?php /* Template Name: Full-Width Template Large Image */ ?>
<?php
/**
 * The template for rendering pages without sidebars.
 * 
 * @package Standard
 * @since 3.0
 */
?>
<?php global $post; ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>
 <?php get_header(); ?>
<div id="break" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center fixed ;	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $src[0]; ?>', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $src[0]; ?>', sizingMethod='scale')"; "> 
      <div class="container">
      		<div class="row">
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
							</div><!-- /.entry-content -->
						</div> <!-- /#post- -->
					<?php } // end while ?>
				<?php } // end if ?>
			</div><!-- /#main -->
			
		</div><!--/row -->
	</div><!-- /container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>