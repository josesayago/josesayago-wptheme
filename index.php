<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-23 19:40:26
 * @File: index.php
 * @License: GLP v2
 */
get_header();
?>

<div class="site-content">

<?php
	if (function_exists('single_latest_posts')) {
		$args = array(
			'title_only'	=> 'false',
			'number_posts'	=> 2,
			'thumbnail'		=> 'true',
			'thumbnail_wh'	=> '600x200',
			'display_type'	=> 'block',
			'random'		=> 'true'
		);
		single_latest_posts($args);
	}
?>

</div>

<?php
get_footer();