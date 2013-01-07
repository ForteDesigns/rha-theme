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
						<div class="left">
							<div class="thumb">
								<?php 
								if(has_post_thumbnail()) {
									the_post_thumbnail();
								} else { ?>
									<img src="<?php bloginfo('template_directory');?>/img/default_thumb.png" alt="<?php the_title();?>"/>
								<?php } ?>
							</div>							
						</div>
						<div class="right">
							<?php the_excerpt();?>
						</div>
					</div>
					<footer class="post-footer">
						<a class="more" href="<?php the_permalink();?>">
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
			<?php get_sidebar();?>
		</div>
	</div><!-- .box -->
</div><!-- #main -->

<?php get_footer();?>