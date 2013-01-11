<div id="side-banner">
	<div id="social-badges">
		<a href="https://twitter.com/MSURHA" target="_blank" alt="@MSURHA"><img src="<?php echo(get_template_directory_uri()."/img/twitter.png");?>"/></a>
		<a href="http://www.facebook.com/MSURHA" target="_blank" alt="MSURHA - Facebook"><img src="<?php echo(get_template_directory_uri()."/img/facebook.png");?>"/></a>
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
		<div id="showtimes">
			<span id="ch-11" class="ch-head">Channel 11</span>	
			<table>
				<?php
					global $wpdb;
					$data = $wpdb->get_results("select * from ScheduleReport where C = '12/1/2012'");
					$time = time();
					foreach($data as $info):?>
					<tr>
						<?php
							$start = strtotime($info->D);
							$playing = (($time-10800) < $start) && ($start < $time);
						?>
						<td class="st-left <?php if($playing) _e('now-playing');?>">
							<?php _e($info->D);?>
						</td>
						<td class="st-right <?php if($playing) _e('now-playing');?>">
							<?php _e($info->F);?>
						</td>
					</tr>
					<?php endforeach ;?>
				</table>
				<span id="ch-12" class="ch-head">Channel 12</span>
				<table>
					<?php
					$data = $wpdb->get_results("select * from ScheduleReport2 where C = '12/1/2012'");
					foreach($data as $info):?>
					<tr>
						<?php
							$start = strtotime($info->D);
							$playing = (($time-10800) < $start) && ($start < $time);
						?>
						<td class="st-left <?php if($playing) _e('now-playing');?>">
							<?php _e($info->D);?>
						</td>
						<td class="st-right <?php if($playing) _e('now-playing');?>">
							<?php _e($info->F);?>
						</td>
					</tr>
					<?php endforeach;?>
			</table>
		</div>
	</div>
</div>