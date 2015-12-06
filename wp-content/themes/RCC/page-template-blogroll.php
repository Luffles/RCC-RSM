<?php
/**
 * Template Name: No Sidebar Blogroll
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>


<div class="maincontainer container">
<div class="row">
		<div class="col-xs-12">
			<?php echo do_shortcode('[soliloquy id="76"]'); ?>
		</div>
		</div>
	<div class="row">
		<div class="col-md-12 maincontent">
			<div class="blogrollheader">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry-blog' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>
