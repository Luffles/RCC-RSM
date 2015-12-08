<?php get_header(); ?>


<div class="maincontainer container">
	<div class="row">
			<div class="col-md-4 mainsidebar">
			<?php get_sidebar('left'); ?>
		</div>
		<div class="col-md-8 maincontent">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1> <?php the_title(); ?> </h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>
