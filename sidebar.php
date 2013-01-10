<div id="side-banner">
	<div id="social-badges">
		<a href=""><img src="<?php echo(get_template_directory_uri()."/img/twitter.png");?>"/></a>
		<a href=""><img src="<?php echo(get_template_directory_uri()."/img/facebook.png");?>"/></a>
		<a href=""><img src="<?php echo(get_template_directory_uri()."/img/tumblr.png");?>"/></a>
	</div>
	<div class="tagline">
		<h3>Be Social</h3>
	</div>
	<div>
		<style>
			.twtr-widget .twtr-tweet {
				border-bottom: 1px solid #ddd;
			}
			.twtr-widget .twtr-hd,
			.twtr-widget .twtr-ft {
				display:none;
			}
		</style>
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		      new TWTR.Widget({
		        version: 2,
		        type: 'profile',
		        rpp: 15,
		        interval: 5000,
		        title: '',
		        subject: '',
		        width: 'auto',
		        height: 175,
		        theme: {
		          shell: {
		            background: 'transparent',
		            color: '#ffffff',
		          },
		          tweets: {
		            background: 'transparent',
		            color: '#222',
		            links: '#1A493E'
		          }
		        },
		        features: {
		          scrollbar: false,
		          loop: false,
		          live: true,
		          behavior: 'default'
		        }
		      }).render().setUser('MSURHA').start();
		</script>
	</div>
	<div id="rha-tv">
		<div class="tagline">
			<h3>RHA TV</h3>
		</div>
	</div>
</div>