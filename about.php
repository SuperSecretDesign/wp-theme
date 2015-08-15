<?php 


/*
  Template Name: About page
*/


get_header();  ?>

<div class="about">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <div class="row clearfix">
          <div class="col-xs-12">
            <img src=" <?php bloginfo('template_directory'); ?>/images/computer-top.jpg" alt="">
          </div>
        </div>

        <div class="row clearfix about-text1">
          <div class="col-xs-12 col-sm-6">
            <h2>Audience targeting customized and worldwide advertising campaigns</h2>
          </div>
          <div class="col-xs-12 col-sm-6">
            <p>We are a digital agency with 20 plus years of collective experience in advert business like this takes much more effort than doing your own business at of travelling, worries about making train connections, bad and irregular time so that you can never get to know anyone or become friendly lorem it is that I've chosen! Travelling day in and day out.</p>
          </div>
        </div>

        <div class="row clearfix">
          <div class="col-xs-12 col-sm-4">
            <h5>Advertising</h5>
            <p>Your advertisement on the most optimal device for a better targetted audience & via a global market</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h5>Branding</h5>
            <p>Design is the silent embassador of your brand and when it comes to branding, we own the game</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h5>UI/UX Design</h5>
            <p>Design is the silent embassador of your  brand and when it comes to interface, we own the game</p>
          </div>
        </div>

        <div class="row clearfix about-team">
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-4">
              <h3>Team Players</h3>
              <p>
                We are a digital agency with 20 collective experience in advertising printing, digital, typesetting and apparel industry. 
              </p>
              <p>And Oh! We’re Hiring</p>
            </div>
            <div class="col-xs-6 col-sm-4">
              <img class="about-headshot" src=" <?php bloginfo('template_directory'); ?>/images/headshot1.jpg" alt="">
            </div>
            <div class="col-xs-6 col-sm-4">
              <img class="about-headshot" src=" <?php bloginfo('template_directory'); ?>/images/headshot1.jpg" alt="">
            </div>
          </div>

          <div class="row clearfix">
            <div class="col-xs-6 col-sm-4">
              <img class="about-headshot" src=" <?php bloginfo('template_directory'); ?>/images/headshot1.jpg" alt="">
            </div>
            <div class="col-xs-6 col-sm-4">
              <img class="about-headshot" src=" <?php bloginfo('template_directory'); ?>/images/headshot1.jpg" alt="">
            </div>
            <div class="col-xs-6 col-sm-4">
              <img class="about-headshot" src=" <?php bloginfo('template_directory'); ?>/images/headshot1.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="row clearfix about-join">
          <div class="col-xs-12 col-sm-6">
            <h3>Join the league!<br>
            Let's work together</h3>
            <a href="#">Get in touch</a>
          </div>
          <div class="col-xs-12 col-sm-6">
            <p>
              They listened to our ideas and objectives then produced a website that has been key competitive advantage in the whole industry
            </p>
          </div>
        </div>

        <div class="row clearfix">
          <div class="col-xs-12">
            <img src=" <?php bloginfo('template_directory'); ?>/images/bag-and-hands.jpg" alt="">
          </div>
        </div>









        <!-- <h2><?php the_title(); ?></h2> -->
       <!-- <?php the_content(); ?> -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>