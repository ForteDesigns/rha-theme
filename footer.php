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
			</div>
			<div class="copyright">
			</div>
		</footer>
	</body>
</html>