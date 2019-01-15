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
		<a href="#" class="d-none d-md-inline"><img src="/wp-content/themes/jppv/img/red_cross.png" alt="" align="center"> Оставить обращение</a>
	</div>

	<?php 
		//include ('template-parts/left-menu.php');
	?>
	<?php 
	if (is_page(32)) {
		include ('template-parts/left-menu-sections.php');
	}
	if (is_page(35)) {
		include ('template-parts/left-menu-investoru.php');
	} 
	?>
<!-- 	<div class="left-menu-sections">
		<ul>
			<li><a href="#firstPage">01</a></li>
			<li><a href="#secondPage">02</a></li>
			<li><a href="#thirdPage">03</a></li>
		</ul>
	</div> -->
	<input type="checkbox" id="nav-toggle" hidden>
	<nav class="left-nav">
		<label for="nav-toggle" class="nav-toggle" onclick></label>
		<h4 class="pt-5">Оставить обращение</h4>
		<ul class="mx-auto">
			<li class="text-white">Представьтесь, пожалуйста:</li>
			<li><input type="text" placeholder="ФИО" class="text-white"></li>
			<li><input type="text" placeholder="Телефон" class="text-white"></li>
			<li><input type="text" placeholder="Email" class="text-white"></li>
			<li><input type="text" placeholder="Комментарий" class="text-white"></li>
			<br><br>
			<a href="#" class="next-button">Отправить</a>
		</ul>
		<br><br><br>
		<a href="/policy" class="text-white">Политика обработки персональных данных</a>
	</nav>