<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-25 17:29:13
 * @File: index.php
 * @License: GLP v2
 */
get_header();
?>

<div class="site-content">

<?php
	$ctas = array(
		__('<strong>Start making money online today</strong>. <span class="highlight">Get my best tricks in your email inbox.</span>','jls'),
		__('<strong>Grow your online business</strong>. <span class="highlight">Get actionable advice in your inbox.</span>','jls'),
		__('<strong>Increase your online sales</strong>. <span class="highlight">Get marketing tips in your email inbox.</span>','jls'),
		__('<strong>Start selling online today</strong>. <span class="highlight">Get actionable advice in your inbox.</span>','jls')
	);
	$args = array(
		'prepend' => $ctas[array_rand($ctas)],
		'submittxt' => __('Join for Free','jls'),
		'nametxt' => '<i class="glyphicon glyphicon-user"></i>',
		'emailtxt' => '<i class="glyphicon glyphicon-envelope"></i>',
		'thankyou'	=> __('Welcome aboard! Get ready to improve your business.','jls'),
		'errormsg' => __('Oops! I could not recognize your email address. Please enter another one.','jls')
	);
	echo smlsubform($args); 
?>

<?php
	/*
	if (function_exists('single_latest_posts')) {
		$args = array(
			'title_only'	=> 'false',
			'number_posts'	=> 4,
			'thumbnail'		=> 'true',
			'thumbnail_wh'	=> '600x200',
			'display_type'	=> 'block',
			'random'		=> 'true'
		);
		single_latest_posts($args);
	}
	*/
?>

</div>

<?php
get_footer();