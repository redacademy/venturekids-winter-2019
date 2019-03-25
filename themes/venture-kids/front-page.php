<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package venture-kids
 */

get_header();
?>

<?php
get_template_part( 'template-parts/content', 'hero' );
?>


<?php
get_template_part( 'template-parts/content', 'reasons' );
?>

<?php
get_template_part( 'template-parts/content', 'how' );
?>


<?php
get_template_part( 'template-parts/content', 'instagram' );
?>  


<?php

get_footer();
