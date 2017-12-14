<?php

	$args = array();
	$posts = new WP_Query($args);

	if($posts->have_posts()) : 
		while($posts->have_posts()) : $posts->the_post();
			
			the_title('<h1', '</h1>');
			the_content();
			
		endwhile;
		
	else: ?>

	<p>Sorry no posts.</p>

<?php endif;?>