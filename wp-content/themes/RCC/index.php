<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php echo do_shortcode('[soliloquy id="32"]'); ?>
		</div>
	</div>
	</div>
<div class="maincontainer container">
	<div class="row">
		<div class="col-lg-7 col-md-8 maincontent">
			<?php
			$args = array( 'posts_per_page' => 3, 'category' => 4 );
			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>
				<?php get_template_part( 'entry-summary' ); ?>
			<?php endforeach; 
			wp_reset_postdata(); ?>
		</div>
		<div class="col-lg-4 col-lg-offset-1 col-md-4 mainsidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>