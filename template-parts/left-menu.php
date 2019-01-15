<?php 
	if (is_page(32)) {
		include ('left-menu-sections.php');
	}

	if (is_page(35)) {
		include ('left-menu-investoru.php');
	}

	if (is_category(1)) {
		include ('left-menu-press-centr.php');
	}
?>