<?php get_header(); ?>
			
<?php get_template_part('content','headline' ); ?>

  <div class="rainbow-line"></div>

	<div class="container">

			<div id="content" class="clearfix row">

			
				<div id="main" class="col-sm-12 clearfix isotope-grid" role="main">

        <?php
          $args = array('type' => 'rolodex','taxonomy' => 'rolodex_category');
          $categories = get_categories( $args );
        ?>

					
					<?php
                    foreach ($categories as $category) { ?>

                      <h2 class="category-name"><?php echo $category->name; ?></h2>

                      <?php

                     $args = array(
                        'post_type'   => 'rolodex',
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'rolodex_category',
                            'field' => 'slug',
                            'terms' => $category->slug
                          )
                        )
                      );

                        // The Query
                        $query = new WP_Query( $args );

                        // The Loop
                        if ( $query->have_posts() ) {
                          while ( $query->have_posts() ) { ?>
                            <?php $query->the_post(); 
                             $tags = get_the_terms($post->ID, 'rolodex_tags' );
                             $tags_output = ''; 
                             foreach ($tags as $tag) { $tags_output .= $tag->slug . ' '; } 
                             ?>

                   <div class="row clearfix">
                     <div class="media item col-sm-12 <?php echo $tags_output; ?>">
                      <a class="pull-left" href="<?php echo $perma_link = get_permalink($post->id ); ?>">
                        <img class="media-object img-responsive" src="<?php the_field('image'); ?>" alt="rolodex image">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="<?php echo $perma_link; ?>"><?php echo $title = get_the_title( $post->id ); ?></a></h4>
                        <p class="media-description"> <?php the_field('description') ?></p>
                        <p class="get-started"><a href="<?php the_field('url'); ?>" target="_blank">Visit <?php echo $title; ?></a></p>
                      </div>
                    </div>
                   </div>

                          <?php }
                        } else {
                          // no posts found
                        }

                        // Restore original Post Data
                        wp_reset_postdata();

                    ?>
                  <?php }

                 ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

</div>

 <?php if (!is_user_logged_in()) { get_template_part('content','optin' ); } ?> 

<?php get_footer(); ?>