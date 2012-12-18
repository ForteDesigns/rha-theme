<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="header-top">
					<div id="branding">
						<h2>
							Michigan State University | <?php bloginfo('description');?>							
						</h2>
					</div> <!-- #branding -->
				</div> <!-- #header-top -->
				<div class="rule"></div>
				<div class="shadow"></div>
				<div id="header-bottom">
					<div id="navigation">
						<div id="nav-menu">
							<?php wp_nav_menu(array('show_home'=> TRUE));?>
						</div>
					</div> <!-- #navigation -->
				</div> <!-- #header-bottom -->
			</div> <!-- #header -->
			<div class="shadow"></div>
			<div id="content-wrapper">
				<div id="content">
					<div id="img-slider">
						
					</div> <!-- #img-slider -->
					<div id="updates-wrapper">
						<div id="updates">
							
						</div> <!-- #updates -->
						<div id="sidebar">
							
						</div> <!-- #sidebar -->
					</div> <!-- #updates-wrapper -->
				</div> <!-- #content -->
			</div> <!-- #content-wrapper --> 
			<div id="footer">
				<div id="footer-content-wrapper">
					<div class="left"></div>
					<div class="right"></div>
				</div>			
			</div> <!-- #footer -->
		</div> <!-- #wrapper -->
	</body>
</html>