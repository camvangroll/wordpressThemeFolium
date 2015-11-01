<!-- This is the blog page-->
<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

	<h3 class="menu-btn"><a href="#">Menu</a></h3>
    <div class="content">
    		
    	<?php get_template_part( 'loop', 'index' );	?>
    	
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>