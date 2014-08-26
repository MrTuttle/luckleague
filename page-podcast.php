<?php
/*
Template Name: Podcast Template
*/
?>

<?php get_header(); ?>
			
			
<?php get_template_part('content','headline' ); ?>



  <div class="rainbow-line"></div>

	<div class="isotope-container">
         <div class="container">
            <div class="row clearfix">
        <div class="col-sm-12">
                    <ul class="nav nav-pills"  id="isotope">
                     <li id="all"><a href="#">All</a></li>
          <?php
          $args = array('type' => 'post','taxonomy' => 'category');
          $categories = get_categories( $args ); ?>

          <?php
             foreach ($categories as $category) { ?>
             <li id="<?php echo $category->slug; ?>"><a href="#"><?php echo $category->name; ?></a></li>
            <?php }

           ?>

        </ul>
         </div>
     </div>
         </div>
    </div> <!-- end of isotope-container -->

	<div class="container">

			<div id="content" class="clearfix row">

			
				<div id="main" class="col-sm-12 clearfix isotope-grid" role="main">

					
					<?php
                    $args = array ('post_type' => 'post',
                                   'posts_per_page' =>'-1',
                                   'orderby' => 'date'
                        );

                        // The Query
                        $query = new WP_Query( $args );

                        // The Loop
                        if ( $query->have_posts() ) { while ( $query->have_posts() ) { ?>

                       <?php $query->the_post();
                            $terms_class = '';
                           $post_categories  = get_the_category( $post->id );
							if( $post_categories){ foreach ($post_categories as $term) { $terms_class .= $term->slug . ' '; } }
						?>	

								<div class="row clearfix">
          <div class="col-sm-12 media all item <?php echo $terms_class; ?>">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="<?php the_field('image') ?>" alt="training image">
                  </a>
                  <div class="media-body">
                   <h4 class="media-heading"><a href="<?php echo get_permalink($post->id); ?>"><?php echo get_the_title($post->ID); ?></a></h4>
                   <p class="media-description"><?php the_excerpt(); ?></p>
                   <p class="get-started"><a href="<?php echo get_permalink($post->id ); ?>">Listen to this episode</a></p>
                  </div>
                </div>        
                </div>

						<? } //end while
					 wp_reset_postdata();			
				} //end if

					?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
</div>
<?php get_footer(); ?>