<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" style="float: left;">
	<input type="text" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="найти" hidden />
</form>