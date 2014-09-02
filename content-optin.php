<?php 

for ($i=1 ; $i <= 4; $i++) { 
  $code = get_post_meta($post->ID,'leadbox_code'.$i,true );
   if (!empty($code)) { ?>
 <div style="background-color: #eef1f5;margin-top:40px">
    <section class="container">
        <div id="optin" class="row clearfix" style="position: relative">
                  <div class="optin-smiley">
                  <img class="text-center hidden-xs" style="position: absolute;left:47%;bottom:85%"src="<?php echo get_template_directory_uri() .'/images/optin-smiley.png' ?>" alt="smiley">
             <h2 class="text-center"><?php echo get_post_meta($post->ID,'leadbox_headline'.$i,true ) ;?></h2> 
                
                </div>
               <div class="smiley"> 
              <center>
               <?php echo get_post_meta($post->ID,'leadbox_code'.$i,true ) ;?>
              </center>
               </div>

        </div>
    </section>
</div>
 <?php break; ?>
<?php }
}



 ?>



