<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-23 20:04:53
 * @File: single.php
 * @License: GLP v2
 */

get_header(); ?>

<div class="single-template">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>

	<?php endwhile; // End of the loop. ?>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>