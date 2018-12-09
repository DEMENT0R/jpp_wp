<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JPPV
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	//return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

	<!-- Left menu -->
	<div id="left-full-button" onclick="show_send_block ()">
		<a href="#"><img src="wp-content/themes/jppv/img/red_cross.png" alt="" align="center"> Оставить обращение</a>
	</div>
	<input type="checkbox" id="nav-toggle" hidden>
	<nav class="left-nav">
		<label for="nav-toggle" class="nav-toggle" onclick></label>
		<h4 class="pt-5">Оставить обращение</h4>
		<ul class="mx-auto">
			<li class="text-white">Представьтесь, пожалуйста:</li>
			<li><input type="text" placeholder="ФИО"></li>
			<li><input type="text" placeholder="Телефон"></li>
			<li><input type="text" placeholder="Email"></li>
			<li><input type="text" placeholder="Комментарий"></li>
			<br><br>
			<a href="#" class="next-button">Отправить</a>
		</ul>
	</nav>