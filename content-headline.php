<div style="background-color:#EEF1F5;"> <div class="container">
 	<div class="clearfix row">
 		<div class="col-sm-12 headline-area">
 			<?php 
 				if (is_post_type_archive('rolodex')) { ?>
 					<h1 class="text-center"><?php the_field('big_headline',10) ?></h1>
		    		<p class="text-center small-headline"><?php the_field('small_headline',10) ?></p>

 				<?php } else { ?>
 					<h1 class="text-center"><?php the_field('big_headline') ?></h1>
		    		<p class="text-center small-headline"><?php the_field('small_headline') ?></p>
				<?php }

				if (is_page_template('page-library.php' ) || is_page_template('page-podcast.php' )) {
					get_template_part('searchform'); 
				}

			?>
						
 		</div>
 	</div>
 </div>



</div>
