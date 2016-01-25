<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-23 19:46:42
 * @File: sidebar.php
 * @License: GLP v2
 */
if (!is_active_sidebar(1)) {
	return;
}
?>

<div class="widget-area" role="complementary">
	<?php dynamic_sidebar(1); ?>
</div>