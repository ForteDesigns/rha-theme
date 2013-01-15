
<?php get_header();?>

<div id="main">
	<div class="wrap box">
		<div id="banner">
			<div id="menu-wrapper">
				<div id="separator-1"></div>
				<div id="banner-menu">
					<?php
					wp_nav_menu(array('theme_location' =>'secondary'));?>
				</div>
				<div id="separator-2"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="left content">
			<div class="insulator">
				<?php if (have_posts()) : while(have_posts()) : the_post();?>
					<article class="post">
						<header class="post-header">
							<!-- alignment of timestamp depends
								 on this h1/span tomfoolery -->
							<h1 class="post-title">
								<a href="<?php the_permalink();?>">
									<?php the_title();?>
								</a>
								<span class="post-timestamp">
									<a href="<?php the_permalink();?>">
										<?php the_time('F jS, Y');?>
									</a>
								</span>
							</h1>
						</header>
						<div class="post-content">
							<div class="post-left">
								<div class="thumb">
									<?php 
									if(has_post_thumbnail()) {
										the_post_thumbnail();
									} else { ?>
										<img src="<?php bloginfo('template_directory');?>/img/default_thumb.png" alt="<?php the_title();?>"/>
									<?php } ?>
								</div>							
							</div>
							<div class="post-right">
								<?php the_excerpt();?>
							</div>
						</div>
						<footer class="post-footer">
							<a class="more" href="<?php the_permalink();?>">
								More info
							</a>
						</footer>
					</article>
				<?php endwhile; else :?>
					<p><?php _e('No news!');?></p>	
				<?php endif;?>
			</div>
		</div>
		<div class="right content sidebar">
			<?php get_sidebar();?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php get_footer();?>
