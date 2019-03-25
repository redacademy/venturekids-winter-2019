<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package venture-kids
 */

?>
	</div><!-- #content -->

	<footer id="footer" class="footer">
		<div class="companyinfo">

			<div id="footer-sidebar" class="secondary">

				<div id="whatsup">
				<?php
					if(is_active_sidebar('whatsup')){
					dynamic_sidebar('whatsup');
					}
				?>
				</div>

				<div id="company">
				<?php
					if(is_active_sidebar('company')){
					dynamic_sidebar('company');
					}
					?>
				</div>

				<div id="help">
					<?php
					if(is_active_sidebar('help')){
					dynamic_sidebar('help');
					}?>
				</div>

				<div id="donate">
				
					<?php
					if(is_active_sidebar('donate')){
					dynamic_sidebar('donate');
					}?>
				</div>
	
			</div>


		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
