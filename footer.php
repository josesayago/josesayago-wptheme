<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-29 17:35:19
 * @File: footer.php
 * @License: GLP v2
 */
?>
	<?php if (!preg_match('/pricing/',basename(get_permalink()))) { ?>
	<div class="cta-bottom">
		<a href="<?php bloginfo('url'); ?>/pricing" title="<?php echo __('Check my rates','jls'); ?>"><?php echo __('Let\'s Work Together','jls'); ?> &nbsp;&nbsp;<i class="glyphicon glyphicon-hand-right"></i></a>
	</div>
	<?php } ?>
	<footer>
		<p class="signature">Design &amp; Development Jose SAYAGO &copy; <?php echo date('Y'); ?></p>
		<small>Tools <i class="glyphicon glyphicon-chevron-right"></i> WordPress - SASS - Bootstrap - Sublime Text - Illustrator CS6</small>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
