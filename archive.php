<!-- PORTFOLIO PAGE ALL -->

<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <h3 class="menu-btn"><a href="#">Menu</a></h3>

      <h1>Portfolio</h1>
        <div class="portfolio-container clearfix">
        <?php if ( have_posts() ) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <div class="portfolio-piece">
            <h4><?php the_title(); ?></h4>
              <?php the_post_thumbnail("medium"); ?>
            <p><?php the_excerpt(); ?> </p>
          </div>



        <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>