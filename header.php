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
						<div id="branding">
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
						<form role="search" method="get" action="<?php bloginfo('home');?>">
							<div id="search">
								<input type="text" value="<?php echo wp_specialchars($s, 1);?>" name="s" id="s" autocomplete="off"/>
								<input type="submit" id="searchsubmit" value>
							</div>
						</from>
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