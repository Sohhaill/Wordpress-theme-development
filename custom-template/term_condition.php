<?php
/*
Template Name: Term And Condition
*/

?>

<?php

get_header();
?>



<?php $term = get_field('term');
$term_condition = $term['term_condition'];


?>

<section class="bg-white text-center p-8">
    <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
        سياسة الخصوصية
    </div>
    <h1 class="text-[40px] font-bold text-black mt-3">
        <span class="text-black-700 "> سياسة الخصوصية لدينا</span>
    </h1>
    <p class="text-gray-600 mt-4">
        We provide counseling, research, and tailored services to build strength.
    </p>
    <div class="register_button flex gap-[8px] items-center justify-center
    ">
        <p class="font-bold text-[16px]">الحالية اعتبارا من November, 2024</p>
    </div>


</section>

<div class="policy_main flex flex-row p-8 !gap-12">
    <div class="policy_left">

        <?php foreach ($term_condition as $t_left): ?>
            <div id="<?php echo $t_left['id'] ?>">
                <h1 class="text-right !mt-[unset]"> <?php echo $t_left['heading'] ?></h1>
                <p class="text-right"> <?php echo $t_left['para'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
    <div class="policy_right">
        <div class="fixed_sidebar w-[410px] border  !border-[#4C782B80] !rounded-[16px]">

            <?php foreach ($term_condition as $t_right): ?>

                <a class="text-right !no-underline " href="#<?php echo $t_right['id'] ?>">
                    <h1 class="text-right  text-black !text-[18px]  p-[9px] hover:bg-[#edf1ea]">
                        <?php echo $t_right['heading'] ?>
                    </h1>
                </a>

            <?php endforeach ?>
        </div>
    </div>
</div>










<?php

get_footer();
?>