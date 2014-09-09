<form action="<?php echo get_permalink($post->ID); ?>" 
method="get" class="form-inline col-sm-12">
    <fieldset>
		<div class="input-group">
			<input type="text" name="search" id="search" placeholder="" value="<?php the_search_query(); ?>" class="form-control input-lg" />
			<?php 

				/*<span class="input-group-btn">
				<button type="submit" class="btn btn-default" style="margin-top:20px"><?php _e("Search","wpbootstrap"); ?></button>
			</span> */
			?>

		</div>
    </fieldset>
</form>
