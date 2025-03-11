<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resilience 
 * 
 */  

?>

<footer class="bg-black text-gray-300 !mt-auto">
	<div class="pt-13">
		<div class="flex flex-col md:!flex-row justify-between items-center   border-gray-700 pb-16 container ">
			<div class="flex flex-col items-start max-w-md">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/4163832fedf8097449cbebf3fca3eb01.png"
					alt="Resilience logo" class="mb-4 w-[88px]">
				<p class="mb-4">
					For each of the 15 statements below, choose the answer that best describes you from: (not at all,
					rarely, sometimes, often, very often). Answer the questions as you really are (not how you think you
					should be).
				</p>
				<div class="flex space-x-4 mt-4">
					<a href="#"> <img
							src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Group 1171274839.png">
					</a>
					<a href="#"> <img
							src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Group 1261153819.png">
					</a>
					<a href="#"> <img
							src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Group 1261153817.png">
					</a>
					<a href="#"> <img
							src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Group 1261153818.png">
					</a>
				</div>
			</div>
			<div
				class="flex flex-row   space-y-6 md:space-y-0 md:space-x-16 mt-6 md:mt-0 gap-20 md:!flex-row w-full justify-between  max-w-md ">
				<div class="flex flex-col gap-[16px]">
					<h3 class="mb-2 text-[16px]">Navigation</h3>
					<div class="footer_menuone flex flex-col gap-[12px]">
						<a href="#" class="mb-1 no-underline !text-[#fff]">Courses</a>
						<a href="#" class="mb-1 no-underline !text-[#fff]">Model</a>
						<a href="#" class="mb-1 no-underline !text-[#fff]">About Us</a>
						<a href="#" class="mb-1 no-underline !text-[#fff]">Contact Us</a>
					</div>
				</div>
				<div class="flex flex-col gap-[16px]">
					<h3 class="mb-2 text-[16px]">Navigation</h3>
					<div class="footer_menutwo flex flex-col gap-[12px]">
						<a href="#" class="mb-1 no-underline !text-[#fff]">Login</a>
						<a href="#" class="mb-1 no-underline !text-[#fff]">Sign up</a>
					</div>
				</div>
			</div>
		</div>
		<div class="seprator border-t border-gray-700"></div>
		<div class="flex justify-between items-center !py-9 !px-[unset] text-sm container ">
			<p>© 2024 Resilience. All rights reserved.</p>
			<div class="flex space-x-4">
				<a href="#" class="!text-[#fff] no-underline">Terms &amp; conditions</a>
				<span>•</span>
				<a href="#" class="!text-[#fff] no-underline">Privacy policy</a>
			</div>
		</div>
	</div>
</footer><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>