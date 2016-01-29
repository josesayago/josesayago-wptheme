<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-26 11:30:47
 * @File: index.php
 * @License: GLP v2
 */
get_header();
?>

<div class="site-content">

	<div id="consulting-process">

		<div class="process-header">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/layers.png" alt="How do I Work?" title="How do I Work?" />
			<h2><?php echo __('My 5 Step Consultation Process', 'jls'); ?></h2>
			<p><?php echo __('Based on the problem solving model by Edgar Schein','jls'); ?></p>
		</div>

		<div class="process-body">
			<div class="row">
				<div class="step1 pull-left">
					<h3>1</h3>
					<h4><?php echo __('Problem Definition','jls'); ?></h4>
					<p><?php echo __('By having a <mark>sincere conversation</mark>, you help me identify root causes of problems you are facing.','jls'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="step2 pull-right">
					<h3>2</h3>
					<h4><?php echo __('Proposals','jls'); ?></h4>
					<p><?php echo __('Based on the information given, <mark>I explore possible scenarios to address identified issues</mark>. It is possible that underlying problems are further revealed in this step.','jls'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="step3 pull-left">
					<h3>3</h3>
					<h4><?php echo __('Selection','jls'); ?></h4>
					<p><?php echo __('We peer-review issued proposals, <mark>weigh pros and cons</mark>, forecasting consequences. Then select the most appropriate solution.','jls'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="step4 pull-right">
					<h3>4</h3>
					<h4><?php echo __('Planning','jls'); ?></h4>
					<p><?php echo __('An <mark>action plan</mark> is developed to implement and execute the solution process.','jls'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="step5 pull-left">
					<h3>5</h3>
					<h4><?php echo __('Assessment','jls'); ?></h4>
					<p><?php echo __('Finally you and I <mark>evaluate the results</mark>, analyze outcomes and determine if further actions are required.','jls'); ?></p>
				</div>
			</div>
		</div>

	</div>

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