<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package venture-kids
 */

?>

<section class= 'floatingbox'>

    <h2>Your Journey to Success Starts From VentureKids</h2>
    <p class= 'floattext'>We're a not-for-profit that teaches youth from Toronto's underserved and low-income communities how to code and launch their own startup</p>
    <button>Learn More</button>
</section>

<section class = 'photo'>
    <?php
        while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );


    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

    endwhile; 
    ?>
</section>

<section class= 'quotes' id='quotes'>
    <h2>This is like a Second Home</h2>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
    
    <p><b>Tanya</b> (Student) </p>
</section>


	<footer class="entry-footer">
	
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
