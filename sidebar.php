<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resilience
 */


?>

<?php
if ((is_front_page() || is_page('contact-us')) && is_active_sidebar('home_sidebar')): ?>
	<aside class="home-sidebar">
		<?php dynamic_sidebar('home_sidebar'); ?>
	</aside>
<?php endif; ?>