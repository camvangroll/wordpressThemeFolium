
<!-- SINGLE BLOG POST -->

<?php get_header(); ?>

<div class="main">
 <h3 class="menu-btn"><a href="#">Menu</a></h3>
  <div class="container">
    <div class="content">
    <h3 class="menu-btn"><a href="#">Menu</a></h3>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="featuredBlogContainer">
             <div class="featuredBlogImg"><?php the_post_thumbnail(array (800,600)); ?></div>

                <div class="entry-meta">
                 <P> Posted on <?php the_date(); ?></P>
                </div><!-- .entry-meta -->

                <div class="entry-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages(array(
                    'before' => '<div class="page-link"> Pages: ',
                    'after' => '</div>'
                  )); ?>
                </div><!-- .entry-content -->

                <div id="nav-below" class="navigation">
                  <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
                  <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
                </div><!-- #nav-below -->

            <?php comments_template( '', true ); ?>

          <?php endwhile; // end of the loop. ?>
         </div>

      </div> 

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>