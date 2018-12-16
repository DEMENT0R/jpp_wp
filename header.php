<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JPPV
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Preloader -->
	<div id="before-load"></div>
	<script type="application/javascript">
		$(window).load(function() {
			$('#before-load').find('i').fadeOut().end().delay(100).fadeOut(100);
		});
	</script>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jppv' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- Wide Navbar -->
		<nav id="site-navigation" class="navbar fixed-top navbar-expand-lg navbar-light bg-white wide-navbar main-navigation d-none d-md-flex">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$jppv_description = get_bloginfo( 'description', 'display' );
				if ( $jppv_description || is_customize_preview() ) :
					?>
					<p class="site-description" style="float: right;"><?php echo $jppv_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jppv' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<!-- Small navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark small-navbar d-md-none" style="background-color: #0A1D2E; height: 60px;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="#" onclick="show_send_block ()" id="left-full-button-in-menu">Оставить обращение</a>
			<script>
				function show_send_block () {
					$('#nav-toggle').click();
				}
			</script>
			<div class="collapse navbar-collapse bg-dark p-3" id="navbarSupportedContent2">
				<form class="form-inline my-2 my-lg-0 mx-auto">
					<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
				</form>
				<ul class="navbar-nav ml-auto mr-4">
					<li class="nav-item active">
						<a class="nav-link" href="#">Платформа <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Инвестору</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Пресс-центр</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Контакты</a>
					</li>
				</ul>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
