<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <h3 class="menu-btn"><a href="#">Menu</a></h3>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>

       <div class="page"> <?php the_post_thumbnail("medium"); ?></div>
       <div class="text"> <?php the_content(); ?></div>


      <?php endwhile; // end the loop?>
  
    </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

