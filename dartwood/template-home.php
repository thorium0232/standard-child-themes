<?php 
/* 
Template Name: Homepage Theme 
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
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-carousel.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-transition.js"></script>
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
      		<div class="carousel span10"> 
				<div id="myCarousel" class="carousel slide">
				 <div class="carousel-inner">
				  <?php
				   $the_query = new WP_Query(array(
					'category_name' => 'Home Slider',
					'posts_per_page' => 1
					));
				   while ( $the_query->have_posts() ) :
				   $the_query->the_post();
				  ?>
				   <div class="item active">
					<?php the_post_thumbnail('large');?>
					<div class="carousel-caption">
					 <h4><?php the_title();?></h4>
					 <p><?php the_excerpt();?></p>
					</div>
				   </div><!-- item active -->
				  <?php
				   endwhile;
				   wp_reset_postdata();
				  ?>
				  <?php
				   $the_query = new WP_Query(array(
					'category_name' => 'Home Slider',
					'posts_per_page' => 5,
					'offset' => 1
					));
				   while ( $the_query->have_posts() ) :
				   $the_query->the_post();
				  ?>
				   <div class="item">
					<?php the_post_thumbnail('large');?>
					<div class="carousel-caption">
					 <h4><?php the_title();?></h4>
					 <p><?php the_excerpt();?></p>
					</div>
				   </div><!-- item -->
				  <?php
				   endwhile;
				   wp_reset_postdata();
				  ?>
				 </div><!-- carousel-inner -->
				 <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
				 <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
				</div><!-- #myCarousel -->
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
								<h1 class="post-title ribbon span12"><div class="ribbon-content"><?php the_title(); ?></div></h1>	
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