// Menu Fix for CPT
function remove_parent($var)
{
	// check for current page values, return false if they exist.
	if ($var == 'current_page_item' || $var == 'current_page_parent' || $var == 'current_page_ancestor'  || $var == 'current-menu-item') { return false; }

	return true;
}

function add_class_to_cpt_menu($classes)
{
	// your custom post type name
	if (get_post_type() == 'headsblog' || get_post_type() == 'post' )
	{
		// we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
		$classes = array_filter($classes, "remove_parent");

		// add the current page class to a specific menu item.
		if (in_array('menu-item-2523', $classes)) $classes[] = 'current_page_parent';
	}
	
    return $classes;
}

add_filter('nav_menu_css_class', 'add_class_to_cpt_menu');
