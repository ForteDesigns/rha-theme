<?php get_header();?>

<div id="main">
	<div id="slider"></div>
	<div class="box">
		<div id="left">
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
				<article class="post">
					<header class="post-header">
						<!-- alignment of timestamp depends
							 on this h1/span tomfoolery -->
						<h1 class="post-title">
							<a href="<?php get_permalink();?>">
								<?php the_title();?>
							</a>
							<span class="post-timestamp">
								<a href="<?php get_permalink();?>">
									<?php the_time('F jS, Y');?>
								</a>
							</span>
						</h1>
					</header>
					<div class="post-content">
						<?php the_excerpt();?>
					</div>
					<footer class="post-footer">
						<a class="more" href="<?php get_permalink();?>">
							More info
						</a>
					</footer>
				</article>
			<?php endwhile; else : ?>
				<p><?php _e('No news!');?></p>
			<?php endif;?>
		</div>
		<div id="right">
			<!-- sidebar here -->
		</div>
	</div><!-- .box -->
</div><!-- #main -->

<?php get_footer();?>