<?php

echo "Testing, 1-2-3-4-5: " . time() . '-' . get_term_by( 1, 2 );

$a = new WP_Query(
	array(
		'number_posts' => -1,
		'posts_per_page' => 30000,
	)
);

echo esc_html( print_r($a, 1) ); // @codingStandardsIgnoreLine



echo esc_html( time() . ': ' . get_term_by( 3, 4 ) );

/*
 * Yep.
 */

