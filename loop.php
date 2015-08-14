<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php $count = 0; ?>

<?php while ( have_posts() ) : the_post(); ?>

		<?php $count += 1; ?>

		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<div class="row post-one">
							
							<?php if ($count === 1) { ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<h2 class="entry-title">
									    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
									<section class="entry-content">
										<?php the_excerpt(); ?>
									</section><!-- .entry-content -->
								</article><!-- #post-## -->

								<!-- <?php comments_template( '', true ); ?> -->

						</div>
						<div class="row post-two">

							<?php } elseif ($count === 2) { ?>

								<img class="post-two-img" src="" alt="">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<h2 class="entry-title">
									    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								</article>

						</div>
					</div>
					<div class="col-xs-6">
						<div class="row post-three">

							<?php } elseif ($count === 3) { ?>

								<img class="post-three-img" src="" alt="">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<h2 class="entry-title">
									    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								</article>

						</div>
						<div class="row post-four">

							<?php } elseif ($count === 4) { ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<h2 class="entry-title">
									    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								</article>
								<img class="post-four-img" src="" alt="">

						</div>
						<div class="row post-five">

							<?php } elseif ($count === 5) { ?>

								<img class="post-five-img" src="" alt="">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<h2 class="entry-title">
									    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								</article>

						</div>

						<?php } else {
							echo "That's it";
						} ?>

					</div>
				</div>	
			</div> <!-- closing div.container -->
		</div> <!-- closing div.main -->

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
