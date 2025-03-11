<?php get_header(); ?>

<main class="course-single">
	<?php
	if (have_posts()):
		while (have_posts()):
			the_post();
			$post_id = get_the_ID();
			$categories = get_the_terms($post_id, 'courses_category');
			?>

			<article class="course-content">
				<h1><?php the_title(); ?></h1>

				<?php if (has_post_thumbnail()): ?>
					<div class="course-image">
						<?php the_post_thumbnail('large'); ?>
					</div>
				<?php endif; ?>

				<div class="course-meta">
					<?php
					if ($categories && !is_wp_error($categories)) {
						echo '<p><strong>Categories:</strong> ';
						foreach ($categories as $category) {
							echo '<span>' . esc_html($category->name) . '</span> ';
						}
						echo '</p>';
					}
					?>
				</div>

				<div class="course-description">
					<?php the_content(); ?>
				</div>

			</article>

		<?php endwhile;
	endif;
	?>
</main>

<?php get_footer(); ?>