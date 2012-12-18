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
						<!--
						<span class="ms">Michigan State</span>
						<span class="u">University</span>
						<span class="pipe">|</span>
						-->
						<table>
							<tr>
								<td class="msu">
									<img src="<?php echo(get_template_directory_uri()."/img/logo.png");?>"/>
								</td>
								<td class="rha">
									<?php bloginfo('description'); ?>
								</td>
							</tr>
						</table>
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