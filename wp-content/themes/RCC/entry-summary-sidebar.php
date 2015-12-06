<section class="entry-summary">
		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } 
		else { echo '<h2 class="entry-title">'; } ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
		<?php the_title(); ?>
		</a>
		<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
		        <?php get_template_part( 'entry-meta' ); ?>
		<?php the_excerpt(); ?>
</section>