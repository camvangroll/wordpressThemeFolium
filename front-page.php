<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <h3 class="menu-btn"><a href="#">Menu</a></h3>

      <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
      
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_post_thumbnail(array (850, 600)); ?>
        

        <?php the_content(); ?>
         
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
    
  
  </div> <!-- /.container -->
</div> <!-- /.main -->

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
