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
									<a href="http://msu.edu/">
									<img src="<?php echo(get_template_directory_uri()."/img/logo.png");?>"/>
									</a>
								</td>
								<td class="rha">
									<a href="<?php bloginfo('url');?>">
									<?php bloginfo('description'); ?>
									</a>
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