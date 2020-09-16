<?php
/**
 * The main template file
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
					<div class="title-link"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
					<?php the_content(); ?>
					<div class="bottom-link">
						<a href="<?php the_permalink() ?>">
							<span>
								Read More
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
									<path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
								</svg>
							</span>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

</div>

<?php
wp_reset_query();

get_footer();
