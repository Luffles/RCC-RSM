<section class="entry-summary">
	<div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-3">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	</div>
	<div class="col-md-6 postsummary col-sm-12">
		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
		<?php the_excerpt(); ?>

		<div class="readmore bluebutton">
		<a href="<?php the_permalink(); ?>">
		Read More
		</a>
		</div>
	</div>
	<div class="entry-links"><?php wp_link_pages(); ?></div>
	<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>