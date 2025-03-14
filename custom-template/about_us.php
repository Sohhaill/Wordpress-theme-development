<?php
/*
Template Name: About Us
*/

?>

<?php

get_header();
?>

<?php $about_banner = get_field('about_banner');

?>
<section class="container py-10 relative max-md:pt-[unset]">
    <img src="<?php echo esc_url($about_banner['image']['url']) ?>" class="img-fluid" alt="...">
    <h1 class="!text-[#fff] max-md:!bottom-[2px] text-[20px] md:text-[40px] font-bold text-center absolute bottom-7 left-1/2  -translate-x-1/2 -translate-y-1/2
"><?php echo $about_banner['heading'] ?> <span class="text-[#7ABD47] italic">
            <?php echo $about_banner['span'] ?>
        </span>
    </h1>
</section>
<?php $journey = get_field('journey');
$journy_repeat = $journey['journey_right'];

?>
<section class="container flex items-center justify-center ">
    <div class="bg-white rounded-lg  flex lg:!flex-row flex-col justify-between  w-full">
        <div class="md:w-[512px] mb-8 md:mb-0">
            <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
                <?php echo $journey['what'] ?>
            </div>
            <h1 class="text-[32px] font-bold text-black mb-4"> <?php echo $journey['heading'] ?></h1>
            <p class="text-gray-600 mb-4"> <?php echo $journey['para1'] ?></p>
            <p class="text-gray-600"> <?php echo $journey['para2'] ?></p>
        </div>
        <div class="md:w-2/5">
            <div class="space-y-4 max-md:!w-full">
                <?php foreach ($journy_repeat as $repeat): ?>
                    <div class="hover_about group">
                        <div
                            class="bg-[#F6F8F4] py-[14px] px-[16px] rounded-[16px] flex justify-between items-center border border-[#0D0D0D1A]">
                            <div class="flex items-center gap-3">
                                <span class="text-[#4C782B] font-bold mr-2"> <?php echo $repeat['number'] ?></span>
                                <h2 class="text-[16px] font-semibold !m-[unset]"> <?php echo $repeat['history'] ?></h2>
                            </div>
                            <div class="bg-[#4C782B] rounded-[30px] p-[11px]">
                                <img alt="Email icon"
                                    src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/Plus.png'; ?>" />
                            </div>
                        </div>
                        <p
                            class="text-gray-600 hidden_text hidden group-hover:!block !transition-all !duration-300 !ease-in-out mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            incididunt ut labore et dolore magna aliqua lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ut labore et dolore magna
                            aliqua. Lorem
                            ipsum dolor sit amet.
                        </p>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</section>
<?php $process = get_field('process');

$process_right = $process['process_right'];


?>
<section class="bg-[#F6F8F4] py-9">
    <div class="bg-[#F6F8F4] flex items-center justify-center container">
        <div class="text-center w-full">
            <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
                <?php echo $process['process_s'] ?>
            </div>
            <h1 class="text-[32px] font-bold text-gray-800 !mb-16 !mt-2 ">
                <?php echo $process['heading'] ?>
            </h1>
            <div class="flex !flex-col md:!flex-row items-start justify-between">
                <div class="mb-6 md:mb-0 md:mr-6">
                    <img src="  <?php echo esc_url($process['image']['url']) ?>"
                        alt="People in a meeting discussing with a laptop and documents on the table"
                        class="w-full max-w-lg rounded-lg">
                </div>
                <div class="space-y-4 max-md:!w-full">
                    <?php foreach ($process_right as $processs): ?>
                        <div
                            class="apply flex flex-col items-start gap-2 justify-start bg-[#EDF2EA] rounded-[16px] p-[20px] border border-[#4C782B33] md:w-[592px]">
                            <div class="flex items-start space-x-4">
                                <div class="bg-[#DDE6D7] rounded-[16px] p-[10px] mr-4">
                                    <img alt="Email icon" class="w-6 h-6" height="24"
                                        src="<?php echo esc_url($processs['image']['url']) ?>" width="24">
                                </div>
                                <div class="text-left self-center">
                                    <h3 class="text-lg font-bold text-gray-800 !mb-[unset]">
                                        <?php echo $processs['heading'] ?>
                                    </h3>

                                </div>
                            </div>
                            <p class="text-sm text-gray-600 !mb-[unset]"> <?php echo $processs['para'] ?>
                            </p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $quality = get_field('quality');

$quality_left = $quality['quality_left'];
// print_r($quality_left);

?>
<section class="bg-white py-20">
    <div class="container mx-auto p-6">
        <div class="text-center mb-8">
            <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
                <?php echo $quality['quality_s'] ?>
            </div>
            <h1 class="text-[40px] font-bold mt-2 !mb-18"> <?php echo $quality['heading'] ?></h1>
        </div>
        <div class="bg-white rounded-[16px]  overflow-hidden flex !flex-col md:!flex-row border border-[#0D0D0D1A]">
            <div class="md:w-1/3 border-r border-gray-200 ">
                <?php foreach ($quality_left as $qualityy): ?>
                    <a href="#<?php echo $qualityy['id'] ?>" class="no-underline !text-[black]">
                        <div class="pb-6 border-b border-[#0D0D0D1A] p-6">
                            <div class="about_link flex items-center justify-between">
                                <div class="flex items-center mb-2">

                                    <img alt="Email icon" class="w-6 h-6" height="24"
                                        src="<?php echo $qualityy['icon']['url'] ?>" width="24">

                                    <span class="font-normal text-lg ml-2">
                                        <?php echo mb_strimwidth($qualityy['heading'], 0, 21, '...'); ?></span>
                                </div>
                                <img alt="Email icon" class="w-6 h-6" height="24"
                                    src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/CaretRight.png'; ?>"
                                    width="24">

                            </div>
                            <p class="text-gray-600"> <?php echo mb_strimwidth($qualityy['para'], 0, 100, '...'); ?></p>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
            <div class="md:w-2/3 p-6 overflow-y-scroll h-[723px]">
                <?php foreach ($quality_left as $right_side): ?>
                    <div class="quality_right">
                        <h2 id="<?php echo $right_side['id'] ?>" class="text-2xl font-bold mb-4">
                            <?php echo $right_side['heading'] ?>
                        </h2>
                        <p class="text-gray-600 mb-4"><?php echo $right_side['para'] ?></p>
                        <img src="<?php echo $right_side['image']['url'] ?>"
                            alt="A group of professionals attending a presentation in a bright, modern room."
                            class="rounded-lg w-full mb-4">
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>
</section>



<?php
get_footer();
?>