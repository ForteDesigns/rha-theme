<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
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
						<div id="social-badges">
							<div class="shadow"></div>
							<div class="case">
								<div class="swrap">
									<a href="https://twitter.com/MSURHA"><div class="twitter badge"></div></a>
									<a href="http://www.facebook.com/MSURHA"><div class="facebook badge"></div></a>
									<div class="tumblr badge"></div>
								</div>
							</div>
							<div class="tagline">
								<h3>Be social</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="shadow"></div>
			</header>