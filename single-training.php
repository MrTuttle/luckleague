<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div style="background-color:#EEF1F5;"> <div class="container">
 	<div class="clearfix row">
 		<div class="col-sm-12 headline-area">
 			<h1 class="text-center"><?php echo get_the_title( $post->ID ); ?></h1>
						<p class="text-center small-headline"><?php the_field('sub_headline') ?></p>
 		</div>
 	</div>
 </div>
</div>




 <div class="rainbow-line"></div>

<div class="container">		
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-lg-12 clearfix" role="main">

					
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						
					
					</article> <!-- end article -->
					
					<?php /*comments_template();*/ ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
				
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
</div>
<?php get_footer(); ?>