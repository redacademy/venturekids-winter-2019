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

			<div class="secondary">

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

				<div id="helping">
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
	
				<div class='socialmedia'>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-facebook-square"></i>

				<div class='rights'>
				<p>© 2019 VENTUREKIDS ALL RIGHTS RESERVED</p>
				</div>
				</div>
				
			</div>
					


		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
