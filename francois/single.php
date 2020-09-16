<?php
/**
 * The single post template
 *
 * @package francois
 *
 * @author Francois van den Heever <frannavdheever@gmail.com>
 */

get_header(); ?>

<div class="main-container">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="article">
				<div class="article-image">
					<?php the_post_thumbnail(get_the_ID()) ?>
				</div>
				<div class="article-text">
					<h4 class="article-text-publish-date">
						<?php the_date(); ?>
					</h4>
					<div class="single-title-link"><?php the_title(); ?></div>
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

</div>

<?php
wp_reset_query();

get_footer();
