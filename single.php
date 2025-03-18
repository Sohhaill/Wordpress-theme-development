<?php get_header(); ?>

<main class="course-single flex justify-start flex-col items-center">
	<?php
	if (have_posts()):
		while (have_posts()):
			the_post();
			$post_id = get_the_ID();
			$categories = get_the_terms($post_id, 'courses_category');
			?>

			<article class="course-content flex justify-start flex-col items-start gap-3 h-screen w-[392px]">
				<h1 class="text-[36px] font-bold"><?php the_title(); ?></h1>

				<?php if (has_post_thumbnail()): ?>
					<div class="course-image">
						<?php the_post_thumbnail('large'); ?>
					</div>
				<?php endif; ?>

				<div class="course-meta">
					<?php
					if ($categories && !is_wp_error($categories)) {
						echo '<p class="text-[24px]" ><strong>Categories:</strong> ';
						foreach ($categories as $category) {
							echo '<span class="text-[20px]">' . esc_html($category->name) . '</span> ';

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