<div class="clear"></div>
</div>
<div class="container">
	<!-- // missing closing div? -->
	<footer id="footer" role="contentinfo">
		<div class="row">
			<div class="col-md-8 footermenu">

				<?php
				$defaults = array(
					'theme_location'  => '',
					'menu'            => '3',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '3',
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
			</div>
			<div class="col-md-4 footerinfocontainer">
				<span class="footernamerc">
					Rachel Carson
				</span>
				<span class="footernamec">
					Council
				</span>
				<br />
				<span class="footerinfo">
					8600 Irvington Avenue
					<br />
					Bethesda, MD 20817
					<br />
					(301) 214-2400
					<br />
					<a class="footeremail" href="mailto:office@rachelcarsoncouncil.org">office@rachelcarsoncouncil.org</a>
				</span>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>