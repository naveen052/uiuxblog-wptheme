<ul>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : wp_list_bookmarks('title_after=&title_before=');
	  wp_list_categories('title_li=' . __('Categories:'));
    ?>
    <li id="search">
      <label for="s"><?php _e('Search:'); ?></label>
      <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	    <div>
		    <input type="text" name="s" id="s" size="15" /><br />
		    <input type="submit" value="<?php _e('Search'); ?>" />
	    </div>
	    </form>
    </li>

<?php endif; ?>

</ul>
