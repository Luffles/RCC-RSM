<?php
/**
 * Template Name: Left Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>


<div class="maincontainer container">
	<div class="row">
			<div class="col-md-4 mainsidebar">
			<?php get_sidebar('left'); ?>
		</div>
		<div class="col-md-8 maincontent">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry-blog' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>
