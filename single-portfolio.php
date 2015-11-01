
<!-- THIS IS THE SINGLE PORTFOLIO PAGE -->

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      
      <h3 class="menu-btn"><a href="#">Menu</a></h3>

 	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

 	    	<h2><?php the_title(); ?></h2>

 	    	<div class="page">
	 	    	<?php the_post_thumbnail(array (600,400)); ?>
			   <div class="photo-description"> <?php the_content(); ?></div>
			    <?php endwhile; ?>
		    </div>



		</div> <!-- /.content
 -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>