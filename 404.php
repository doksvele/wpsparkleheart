<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sparkleheart
 */

get_header();
?>
<section class="error-404">
	<section>
	<h1>404</h1>
	<h3>Lapa netika atrasta!</h3>
	<p>Radusies kāda tehniska kļūda, vai šī lapa vairs nav pieejama.</p>
	<a href="<?php echo esc_url( home_url() ); ?>"><button class="button" type="submit">Uz sākumlapu</button></a>
	</section>
</section>
<img class="vector2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector2.png" alt="vector2">
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
