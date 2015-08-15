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
					
		<?php if ($count === 1) { ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('first-post'); ?>>
				<h2 class="entry-title first">
				    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				<section class="excerpt-content">
					<?php the_excerpt(); ?>
				</section><!-- .entry-content -->
			</article><!-- #post-## -->

			<!-- <?php comments_template( '', true ); ?> -->

		<?php } elseif ($count === 2) { ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('sub-post-col'); ?>>
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} else { ?>
					<div class="filler-div"></div>
				<?php } ?>
				<div class="sub-entry-meta">
				<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>, By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>  </p>
				  <!-- <?php hackeryou_posted_on(); ?> -->
				</div><!-- .entry-meta -->
				<h2 class="entry-title subsequent">
				    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</article>

		<?php } elseif ($count === 3) { ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('sub-post-col'); ?>>
					
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail();
					} else { ?>
						<div class="filler-div"></div>
					<?php } ?>

					<div class="sub-entry-meta">
					<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>, By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>  </p>
					  <!-- <?php hackeryou_posted_on(); ?> -->
					</div><!-- .entry-meta -->

					<h2 class="entry-title subsequent">
					    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				</article>

		<?php } elseif ($count === 4) { ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('sub-post'); ?>>
				<div class="sub-entry-meta">
				<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>, By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>  </p>
				  <!-- <?php hackeryou_posted_on(); ?> -->
				</div><!-- .entry-meta -->
				<h2 class="entry-title subsequent">
				    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} else { ?>
					<div class="filler-div"></div>
				<?php } ?>
			</article>
			
		<?php } else { ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('sub-post'); ?>>
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} else { ?>
					<div class="filler-div"></div>
				<?php } ?>
				<div class="sub-entry-meta">
				<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>, By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>  </p>
				  <!-- <?php hackeryou_posted_on(); ?> -->
				</div><!-- .entry-meta -->
				<h2 class="entry-title subsequent">
				    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</article>

		<?php } ?>

	<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>


<!--<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>-->
