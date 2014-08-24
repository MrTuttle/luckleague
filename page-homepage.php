<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			
<?php get_template_part('content','headline' ); ?>



  <div class="rainbow-line"></div>


	<div class="container">

			<div id="content" class="clearfix row">

			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<?php the_content(); ?>
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
  </div>

   
		<?php
            if (!is_user_logged_in() && get_field('optin')) { get_template_part('content','optin' ); }
         ?>		

<?php get_footer(); ?>