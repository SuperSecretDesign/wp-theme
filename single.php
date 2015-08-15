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
            <div class="row clearfix">
              <div class="col-xs-offset-3 col-xs-6 tags">
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
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-6 single-nav">
              <img src="" alt="">
              <?php
              $prevPost = get_previous_post();
              $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'medium'); ?>
              <p class="nav-previous"><?php previous_post_link('%link',$prevthumbnail); ?></p>
              <p class="nav-previous"><?php previous_post_link('%link','&larr; %title'); ?></p>
            </div>
            <div class="col-xs-12 col-sm-6 single-nav">
            <?php
              $nextPost = get_next_post();
              $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'medium'); ?>
              <p class="nav-next"><?php next_post_link('%link', $nextthumbnail, '%title &rarr;'); ?></p> 
              <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p> 
            </div>
          </div>
        </div><!-- #nav-below -->

        <div class="author-info">
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-6">
              <div class="row">
                <p><?php echo get_avatar( get_the_author_meta( 'ID' ), 100); ?><p>
              </div>
              <div class="row">
                <p class="single-author"><?php echo get_the_author_meta('nickname'); ?></p>
              </div>
              <div class="row">
                <p class='single-bio'><?php echo get_the_author_meta('description'); ?></p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="more-posts">
                <p class="single-author">
                  More posts by author ...
                </p>
                <?php echo get_related_author_posts(); ?>
              </div>
            </div>
          </div>
        </div>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>