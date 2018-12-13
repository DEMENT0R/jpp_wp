<?php

/**
 *
 * Template Name: Главная страница (Fullpage)
 * Template Post Type: post, page, product
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JPPV
 */

get_header();
?>

	<div id="primary" class="content-area">
		<!-- bla bla -->
		<main id="main" class="site-main">

		<?php
			include 'template-parts/mainpage.html';
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
