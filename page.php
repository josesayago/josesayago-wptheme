<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-26 15:03:41
 * @File: page.php
 * @License: GLP v2
 */

get_header(); ?>

<div class="page-template">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // End of the loop. ?>

</div>

<?php get_footer(); ?>