		</div> <!-- #container -->
		<footer id="footer">
			<div class="top"></div>
			<div class="wrap">
				<div id="site-map">
					<header>
						<h2>Site map</h2>
					</header>
					<?php wp_nav_menu(array('menu' => 'primary'));?>
				</div>
				<div id="links">
					<header>
						<h2>Links</h2>
					</header>
					<?php wp_nav_menu(array('menu' => 'secondary'));?>
				</div>
				<div id="opportunities">
					<header>
						<h2>Opportunities</h2>
					</header>
					<ul>
						<li><a href="/admin">Employment</a></li>
					</ul>
				</div>
				<div id="contact-us">
					<header>
						<h2>Contact us</h2>
					</header>
					<ul>
						<li>G-7 Holden Hall</li>
						<li>(517) 355-8285</li>
						<li><a href="<?php bloginfo('url');?>">rha.msu.edu</a></li>
					</ul>
				</div>
			</div>
			<div class="copyright">
			</div>
		</footer>
	</body>
</html>