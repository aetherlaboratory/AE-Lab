<?php
function get_category_svg_icon($post_id) {
	// Get all categories for the post
	$categories = get_the_terms($post_id, 'category');

	// Check if any categories were found
	if ( !empty($categories) && !is_wp_error($categories) ) {
		// Loop through each category and check if it matches your defined categories
		foreach ( $categories as $category ) {
			switch ($category->slug) {
				case 'coding':
					return '<svg class="cat-icon"><use xlink:href="#coding"></use></svg>';
				case 'tech':
					return '<svg class="cat-icon"><use xlink:href="#tech"></use></svg>';
				case 'gaming':
					return '<svg class="cat-icon"><use xlink:href="#gaming"></use></svg>';
				case 'apps':
					return '<svg class="cat-icon"><use xlink:href="#apps"></use></svg>';
				case 'webdesign':
					return '<svg class="cat-icon"><use xlink:href="#webdesign"></use></svg>';
				case 'ai':
					return '<svg class="cat-icon"><use xlink:href="#ai"></use></svg>';
				case 'science':
					return '<svg class="cat-icon"><use xlink:href="#science"></use></svg>';
			
			}
		}
	}

	// Default icon if no specific category is matched
	return '<svg class="cat-icon"><use xlink:href="#default"></use></svg>';
}
?>
