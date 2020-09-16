<?php
/**
 * The template file for pages
 *
 * @package francois
 *
 * @author Francois van den Heever <frannavdheever@gmail.com>
 */

get_header(); ?>

<div class="main-container">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
