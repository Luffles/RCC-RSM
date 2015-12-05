<section class="entry-content">
<div class="col-md-5 col-md-offset-1">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
</div>
<div class="col-md-6 ">
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
<?php the_content('Read more...'); ?>
</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>