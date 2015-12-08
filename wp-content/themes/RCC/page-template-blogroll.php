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

			<?php

			$args = array( 'posts_per_page' => 6 );

			$lastposts = get_posts( $args );

			foreach ( $lastposts as $post ) :

				setup_postdata( $post ); ?>

			<div class="col-md-4">

				<div class="innerexcerpt">
					<a href="<?php the_permalink(); ?>">

				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<h2>
						<?php the_title(); ?>
				</h2>
					</a>

			<?php the_excerpt(); ?>

			</div>

			</div>

			<?php endforeach; 

			wp_reset_postdata(); ?>

	</div>

</div>

</div>



<?php get_footer(); ?>

