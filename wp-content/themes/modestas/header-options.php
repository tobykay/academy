<?php

$main_color = ot_get_option( 'main_color', '#da584f' );

?>

<style>
	<?php
	
	
	
	// main color
	
	// bg
	echo ('.form-submit #submit:hover, .single-post #container .tagcloud a:hover, .form-submit #submit:hover, .post .post-link, .tagcloud a:hover, .single-post #container .tagcloud a:hover, .over-effect .over, #sidebar .menu li a:hover, .read-more, .archive ul a:hover, .page-content ul a:hover, #cat-list ul a:hover {background-color:' . $main_color . '}');
	
	//color
	echo ('.post a h2:hover, #cat-list a, .page-links a, #footer a, .page-title, .post .date-box a, .post .date-box a:hover, .post .date, #sidebar ul a:hover, #sidebar .social li a:hover, .archive ul a, .page-content ul a, #cat-list ul a, #sidebar .menu li a, .post .date-box a {color: ' . $main_color . '}');
	
	
	echo ('.sticky {border-left: 5px solid ' . $main_color . '}');
	
	?>
	
</style>