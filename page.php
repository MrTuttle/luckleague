<?php get_header(); ?>
<?php get_template_part('content','headline' ); ?>



  <div class="rainbow-line"></div>

<?php 

		if (!is_page('16' )) { ?>
			<div class="container">		
			<div id="content" class="clearfix row">

		
			
				<div id="main" class="col col-lg-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
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
		<?php }

 ?>

		<?php 

				if (is_page('16')) { ?>
					<style type="text/css">
		            ul.menu li.loginout {  border-bottom: 3px solid #68d387; }
		            </style>

		            <center>
		                <img style="margin-top:35px;" src="<?php echo get_template_directory_uri() . '/images/login-steps.png' ?>">
		            </center>

		            <?php if (!intval($userdata->ID)) { ?>
		            <form style="margin-top:45px;" id="custom-login-form" method="post" action="/wp-login.php">
		                <input type="hidden" name="redirect_to" value="wishlistmember">
		                <input class="textinput" type="text" name="log" placeholder="Username"> <input class="textinput" type="password" name="pwd" placeholder="Password"><br>
		                 <input style="margin-bottom:20px;font-size:20px;" type="submit" id="button" name="wp-submit" value="Login Now!">
		                <p style="margin-top:10px;"><center><a href="/wp-login.php?action=lostpassword" style="font-family: GothamRounded Book;font-weight: bold;font-size: 20px;margin-top:5px">Lost your Password?</a></center></br>
		                </p>

		            </form><?php } else { ?>
		            <h1 align="center" style="margin-bottom: 25px">
		                Welcome, <?php echo $userdata->user_firstname; ?>
		            </h1>
		            <center style="margin-bottom: 25px">
		                <a href="<?php echo wp_logout_url(); ?>" >Logout</a>
		            </center><?php }
		            
		             ?>
				<?php }


		 ?>

<?php get_footer(); ?>