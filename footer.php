<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cseven
 */

?> 

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="container">
			
			<div class="row">

				<div class="col-md-3">

					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>">
	            <img src="<?php echo get_field('logo_light', 'options');?>" class="logo">
	          </a>
					</div>
					
				</div>

				<div class="col-md-3">

					<div class="footer-links">
						<ul> 
							<li><a href="">About Us</a></li>
							<li><a href="">Products</a></li>
							<li><a href="">Careers</a></li>

							<li><a href="">Privacy Policy</a></li>
							<li><a href="">Terms & Conditions</a></li>
						</ul>
					</div>
					
				</div>

				<div class="col-md-6">

					<div class="row">

						<div class="col-md-6">

							<div class="address-info">
								<p>3300, 205-5th Avenue SW <br>Calgary, Alberta <br>Canada T2P 2V7</p>
							</div>
							
						</div>

						<div class="col-md-6">

							<div class="contact-info">
								<p>Tel: (403) 539-2239 <br> Fax: (403) 264-1262</p>
							</div>
							
						</div>
						
					</div>

					<div class="copyright">
						<p>Copyright <?php echo date('Y'); ?> Andmir Group. All Rights Reserved.</p>
					</div>
					
				</div>
				
			</div>

		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
