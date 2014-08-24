				<!-- end #container -->

			<div style="background:#1c1c1c">
				<div class="container">
				<div class="row clearfix">
					<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          
		          <img src="<?php echo get_template_directory_uri() . '/images/featured.png' ?>" alt="footer-image" class="img-responsive">
					
					<nav class="clearfix">
				<span style="float:left;color:#4e5155">© Chris Luck Enterprises, Inc |</span> <?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
				</div>
			</div>
			</div>
		
	
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>