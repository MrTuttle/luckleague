<?php
/*
Template Name: Plans and Signup Template
*/
?>

<?php get_header(); ?>
			
			
<?php get_template_part('content','headline' ); ?>



  <div class="rainbow-line"></div>


	<div class="container">

	<div class="clearfix row" style="margin-top:35px;">
  			
  					<div class="pricing-container">
						
  					<div class="col-sm-5 gray box">
  					<span class="gray-circle">
  						<span class="price">$<?php the_field('price_per_month') ?><span class="per-month"> / mo</span></span>
  						<span class="basic">Basic</span>
  					</span>
	  					<ul>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/gray-check.png' ?>" alt="">
	  					<?php the_field('gray_check_list_1_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/gray-check.png' ?>" alt=""><?php the_field('gray_check_list_2_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/gray-check.png' ?>" alt=""><?php the_field('gray_check_list_3_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/gray-check.png' ?>" alt=""><?php the_field('gray_check_list_4_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/gray-check.png' ?>" alt=""><?php the_field('gray_check_list_5_text') ?></li>
	  					<center>
	  						<button><a href="<?php the_field('gray_button_url') ?>"><?php the_field('gray_button_text') ?></a></button>
	  					</center>
	  					</ul>

  					</div>

	  				<div class="col-sm-2">
	  					<center>
	  					<img src="<?php echo get_template_directory_uri() . '/images/plans-or.png' ?>" alt="or" >
	  					</center>
	  				</div>

	  				<div class="col-sm-5 green box">
	  				<span class="green-circle">
	  					<span class="best-value">Best Value!</span>
	  					<span class="price">$<?php the_field('price_per_year') ?><span class="per-month"> / mo</span></span>
  						<span class="vip">VIP</span>
	  				</span>
	  					<ul>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/green-check.png' ?>" alt=""><?php the_field('green_check_list_1_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/green-check.png' ?>" alt=""><?php the_field('green_check_list_2_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/green-check.png' ?>" alt=""><?php the_field('green_check_list_3_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/green-check.png' ?>" alt=""><?php the_field('green_check_list_4_text') ?></li>
	  					<li><img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/green-check.png' ?>" alt=""><?php the_field('green_check_list_5_text') ?></li>
	  					<center>
	  						<button><a href="<?php the_field('green_button_url') ?>"><?php the_field('green_button_text') ?></a></button>
	  					</center>
	  					</ul>
  					</div>

  				</div>
  			
  	</div>



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

    <?php if (!is_user_logged_in()) { get_template_part('content','optin' ); } ?> 	

<?php get_footer(); ?>