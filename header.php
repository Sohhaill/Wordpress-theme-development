<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resilience
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://unpkg.com/@tailwindcss/browser@4"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'resilience'); ?></a>

		<header>
			<div class="nav py-4  ">

				<div
					class="header_main px-4 py-2 border flex flex-row justify-between container border-[#f7f7f723] items-center rounded-[20px]">
					<div class="header_log">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/image 19.png">
					</div>
					<div class="header_menu">
						<ul class="flex gap-4
						list-none">
							<li>
								home
							</li>

							<li>
								home
							</li>

							<li>
								home
							</li>
							<li>
								home
							</li>
						</ul>

					</div>
					<div class="register_button hidden lg:!flex gap-4 items-center justify-center">
						<a class="!text-[#4c782b] no-underline font-medium text-[16px] text-center" href="#">Login</a>
						<a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
							href="#">Sign up</a>

					</div>
				</div>

			</div>
		</header>