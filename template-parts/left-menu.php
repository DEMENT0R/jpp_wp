	<?php if (is_page(32)) {
		include ('left-menu-sections.php');
	} ?>

	<?php if is_page(array(35, 'investoru', 'Инвестору')) {
		include ('left-menu-investoru.php');
	} ?>

	is_page( array('investoru', 'Инвестору') )