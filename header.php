<?php date_default_timezone_set("America/Detroit");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html>
	<head>
		<title>
			<?php bloginfo('name');?> | <?php bloginfo('description');?>
		</title>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-37617270-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
	</head>
	<body>
		<div id="container">
			<header id="masthead">
				<div class="top">
					<div class="wrap">
						<div id="branding">
							<table>
								<tr>
									<td class="msu">
										<a href="http://msu.edu/" target="_blank" alt="Michigan State University">
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
				<div class="bottom">
					<div class="wrap">
						<nav>
							<?php wp_nav_menu(array('menu' => 'primary'));?>
						</nav>
					</div>
				</div>
				<div class="shadow"></div>
			</header>