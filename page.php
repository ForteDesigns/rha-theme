<?php get_header();?>

<div id="main">
	<div class="wrap box">
		<div id="fake-banner"></div>
		<div class="left content">
			<div class="insulator">
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<article class="post">
						<header class="post-header">
							<!-- alignment of timestamp depends
								 on this h1/span tomfoolery -->
							<h1 class="post-title">
								<a class="unclickable">
									<?php the_title();?>
								</a>
							</h1>
						</header>
						<div class="post-content">
							<?php the_content();?>
						</div>
					</article>
				<?php endwhile; endif;?>
			</div>
		</div>
		<div class="right content sidebar">
			<?php get_sidebar();?>
		</div>
		<div class="clearfix"></div>
	</div>
</div><!-- #main -->

<?php get_footer();?>