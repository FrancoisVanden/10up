<form action="/" method="get">
	<span><input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="e.g. delicious sandwiches"/>
    <input type="image" alt="Search" id="search-start" src="<?php bloginfo('template_url'); ?>/icons/search.svg" ></span>
</form>