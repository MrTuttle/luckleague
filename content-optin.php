<div style="background-color: #eef1f5;margin-top:40px">
    <section class="container">
        <div id="optin" class="row clearfix" style="position: relative">
                  <div class="optin-smiley">
                  <img class="text-center hidden-xs" style="position: absolute;left:47%;bottom:85%"src="<?php echo get_template_directory_uri() .'/images/optin-smiley.png' ?>" alt="smiley">
                 <h2 class="text-center"><?php the_field('optin_text'); ?></h2>
                
                </div>
               <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3"> 
               <button type="button" id="optin-button" class="btn btn-success btn-block
               <?php echo $class = (is_user_logged_in()) ? '' : 'eModal-1'; ?>">
               <?php the_field('optin_button_text') ?></button>
               </div>

        </div>
    </section>
</div>



