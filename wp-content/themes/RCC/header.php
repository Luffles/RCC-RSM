<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
  (function(d) {
    var config = {
      kitId: 'jkn2jbg',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
					<img src="/rcc/wp-content/themes/RCC/image/RCC_Logo.png">
					</a>
				</div>

			</div>
			<div class="col-md-8">
				<nav class="mainmenu">
					<?php
					$defaults = array(
						'theme_location'  => '',
						'menu'            => '2',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '2',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
						);

					wp_nav_menu( $defaults );

					?>
				</nav>
			</div>
			<div class="col-md-2">
				<div class="topsocial">
					<a href="#">
					<img src="/rcc/wp-content/themes/RCC/image/fb.png">
					</a>
					<a href="#">
					<img src="/rcc/wp-content/themes/RCC/image/twitter.png">
					</a>
					<a href="#">
					<img src="/rcc/wp-content/themes/RCC/image/in.png">
					</a>
					<a href="#">
					<img src="/rcc/wp-content/themes/RCC/image/search.png">
					</a>
				</div>
			</div>
		</div>

	</header>
