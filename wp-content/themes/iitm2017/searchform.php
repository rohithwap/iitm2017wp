<form action="/" method="get" class="search-form-form">    
    <input type="text" name="s" id="search" class="search-form" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>