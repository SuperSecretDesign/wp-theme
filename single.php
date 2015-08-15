<?php get_header(); ?>

<div class="main">
  <div class="container text-center">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
          <p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>, By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>  </p>
            <!-- <?php hackeryou_posted_on(); ?> -->
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <div class="row">
              <div class="col-sm-offset-6 col-sm-6 tags">
                <div class="row">
                  <p>Tagged:</p>  
                </div>
                <div class="row">
                  <?php echo get_the_tag_list( '', ' ' ); ?>
                </div>
              </div>
            </div>
           <!--  <?php hackeryou_posted_in(); ?> -->
           <!-- <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?> -->
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>