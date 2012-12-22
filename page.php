<?php get_header();?>

<div id="main">
	<div id="fake-slider"></div>
	<div class="box">
		<div id="left">
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
		<div id="right">
			<!-- sidebar here -->
		</div>
	</div><!-- .box -->
</div><!-- #main -->

<?php get_footer();?>