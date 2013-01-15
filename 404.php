<?php get_header();?>

<div id="main">
	<div class="wrap box">
		<div id="banner">
			<div id="menu-wrapper">
				<div id="separator-1"></div>
				<div id="banner-menu">
					<?php
					wp_nav_menu(array('theme_location' =>'secondary'));?>
				</div>
				<div id="separator-2"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="left content">
			<div class="insulator">
				<h1>Uh Oh! #404</h1>
				<p style="padding:15px 30px;">We couldn't find the page you were looking for. Be sure to contact us if you think this is a mistake!</p>
			</div>
		</div>
		<div class="right sidebar content">
			<?php get_sidebar();?>
		</div>
	</div>
</div>

<?php get_footer();?>