<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php bloginfo('name');?> | <?php bloginfo('description');?>
		</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
	</head>
	<body class="home">
		<div id="page">
			<header id="masthead">
				<div class="top">
					<div class="wrap">
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
					</div>
				</div>
				<div class="shadow"></div>
				<div class="bottom">
					<div class="wrap">
						<nav>
							<?php wp_nav_menu(array('show_home'=>TRUE));?> 
						</nav>
					</div>
				</div>
				<div class="shadow"></div>
			</header>