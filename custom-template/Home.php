<?php
/*
Template Name: Home Page
*/

?>

<?php

get_header();
?>
<?php $home_banner = get_field('home_banner');

$course_button = $home_banner['explore_course'];
$banner_login = $home_banner['login'];
$banner_image = $home_banner['image'];

?>
<section class="bg-white text-center p-6">
    <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
        <?php echo $home_banner['empower'] ?>
    </div>
    <h1 class="text-[40px] font-bold text-black mt-5">
        <span class="text-green-700 "> <?php echo $home_banner['resiliance_span'] ?> </span>
        <?php echo $home_banner['heading'] ?></span>
    </h1>
    <p class="text-gray-600 mt-4">
        <?php echo $home_banner['paragraph'] ?>
    </p>
    <div class="register_button flex gap-[8px] items-center justify-center
    ">
        <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border border-[rgba(76,120,43,1)]
" href="<?php echo esc_url($course_button['url']) ?>"> <?php echo $course_button['title'] ?></a>
        <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
            href="<?php echo esc_url($banner_login['url']) ?>"> <?php echo $banner_login['title'] ?></a>
    </div>
    <?php if (!empty($banner_image)) {
        # code...
        ?>
        <div class="container py-5 flex justify-center">
            <img src="<?php echo esc_url($banner_image['url']) ?>" class="img-fluid" alt="...">
        </div>
    <?php } ?>
</section>

<?php $mission = get_field('mission');
$mission_learn = $mission['learn_more'];
$mission_images = get_field('image');

?>

<section class="bg-[#eef2ea]">
    <div class="container mx-auto p-6 flex flex-wrap">
        <div class="w-full md:w-1/2 p-4">
            <h1 class="!text-green-700 text-[16px] mb-2">
                <?php echo $mission['who'] ?>
            </h1>
            <h2 class="text-gray-900 text-4xl mb-4">
                <?php echo $mission['vission'] ?>
            </h2>
            <p class="text-gray-600 text-lg mb-4">
                <?php echo $mission['pargrap1'] ?>
            </p>
            <p class="text-gray-600 text-lg mb-4">
                <?php echo $mission['Pargraph2'] ?>
            </p>
            <div class="register_button 
    ">

                <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                    href="<?php echo esc_url($mission_learn['url']) ?>"> <?php echo $mission_learn['title'] ?></a>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4 grid grid-cols-2
 gap-4">
            <?php foreach ($mission_images as $m_images): ?>
                <img alt="Group of people in a counseling session" class="w-full rounded-lg"
                    src="<?php echo $m_images['mission_image']['url'] ?>" />

            <?php endforeach ?>
        </div>
    </div>
</section>
<?php $course_post = get_field('course_post');

?>

<section class="flex flex-col items-center py-16 gap-11 container">


    <div class="flex items-center flex-col gap-3">
        <div class="text-[#4C782B] text[16px] mb-2 font-medium"> <?php echo $course_post['explore'] ?></div>
        <div class="text-gray-800 text-2xl font-bold text-center"> <?php echo $course_post['heading'] ?></div>

    </div>
    <div class="card-group flex flex-col gap-3 md:!flex-row">
        <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)] px-[10px] py-[10px] !rounded-[16px]">
            <div class="cart_image relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 49.png"
                    class="card-img-top" alt="...">
                <div class="register_button absolute top-[16px] left-[9px]">
                    <a class="!text-[#4c782b] !bg-[#FFFFFF] no-underline font-medium text-[16px] py-[5px] px-[12px] text-center rounded-[8px] border "
                        href="#">Free</a>

                </div>
            </div>
            <div class="card-body flex justify-between !pb-[unset]">
                <h5 class="card-title">Burnout Scale</h5>
                <h5 class="card-title text-[16px] font-normal text-[#0D0D0DCC]">18+</h5>
            </div>
            <div class="card-body !pt-[unset]">
                <p class="card-text"><span>Author: </span>Amjad Abu Jadi</p>

                <p class="card-text">We offer resilience building through personal consultations, research insights, and
                    customized consulting services to achieve success. We offer building Al-Muru'a success..</p>
            </div>
            <div class="register_button pb-[15px] pt-[5px]">
                <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border !border-[#4C782B]"
                    href="#">Read More</a>

            </div>

        </div>
        <div class="card border !h-[unset] border-[rgba(0,0,0,0.175)] px-[10px] py-[10px] !rounded-[16px]">
            <div class="cart_image relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 49.png"
                    class="card-img-top" alt="...">
                <div class="register_button absolute top-[16px] left-[9px]">
                    <a class="!text-[#4c782b] !bg-[#FFFFFF] no-underline font-medium text-[16px] py-[5px] px-[12px] text-center rounded-[8px] border "
                        href="#">Free</a>

                </div>
            </div>
            <div class="card-body flex justify-between !pb-[unset]">
                <h5 class="card-title">Burnout Scale</h5>
                <h5 class="card-title text-[16px] font-normal text-[#0D0D0DCC]">18+</h5>
            </div>
            <div class="card-body !pt-[unset]">
                <p class="card-text"><span>Author: </span>Amjad Abu Jadi</p>

                <p class="card-text">We offer resilience building through personal consultations, research insights, and
                    customized consulting services to achieve success. We offer building Al-Muru'a success..</p>
            </div>
            <div class="register_button pb-[15px] pt-[5px]">
                <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border !border-[#4C782B]"
                    href="#">Read More</a>

            </div>

        </div>
        <div class="card border !h-[unset] border-[rgba(0,0,0,0.175)] px-[10px] py-[10px] !rounded-[16px]">
            <div class="cart_image relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 49.png"
                    class="card-img-top" alt="...">
                <div class="register_button absolute top-[16px] left-[9px]">
                    <a class="!text-[#4c782b] !bg-[#FFFFFF] no-underline font-medium text-[16px] py-[5px] px-[12px] text-center rounded-[8px] border "
                        href="#">Free</a>

                </div>
            </div>
            <div class="card-body flex justify-between !pb-[unset]">
                <h5 class="card-title">Burnout Scale</h5>
                <h5 class="card-title text-[16px] font-normal text-[#0D0D0DCC]">18+</h5>
            </div>
            <div class="card-body !pt-[unset]">
                <p class="card-text"><span>Author: </span>Amjad Abu Jadi</p>

                <p class="card-text">We offer resilience building through personal consultations, research insights, and
                    customized consulting services to achieve success. We offer building Al-Muru'a success..</p>
            </div>
            <div class="register_button pb-[15px] pt-[5px]">
                <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border !border-[#4C782B]"
                    href="#">Read More</a>

            </div>

        </div>
    </div>

    <div class="register_button py-[20px]
    "> <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
            href="#">Explore Courses</a>
    </div>
</section>
<section class="py-19 md:pl-20 flex  gap-6 !flex-col">
    <div class="text-[#4C782B] text[16px] mb-2 font-medium text-center
    ">Our Delivery Model</div>
    <div id="scrollContainer"
        class="courses_items  flex flex-col md:!flex-row  gap-6 w-full overflow-x-auto !scrollbar-hide">
        <div class="bg-[#edf1ea] rounded-lg p-6 md:min-w-[749px] max-w-3xl shadow-md cursor-pointer">
            <div class="flex justify-between items-center">
                <h1 class="!text-[24px] font-semibold text-gray-800">Live Sessions</h1>
                <div class="w-8 h-8 bg-gray-800 text-white rounded-full flex items-center justify-center text-sm">1
                </div>
            </div>
            <hr class="border-t border-gray-300 my-4">
            <div class="flex flex-col md:!flex-row items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/fi_2989838.png"
                    alt="Icon representing live sessions" class=" mr-6">
                <p class="text-gray-700 text-base self-baseline
">We offer resilience-building through personalized counseling, research
                    insights, and tailored consultation services for success.</p>
            </div>
        </div>
        <div class="bg-[#edf1ea] rounded-lg p-6 md:min-w-[749px]  max-w-3xl shadow-md">
            <div class="flex justify-between items-center">
                <h1 class="!text-[24px] font-semibold text-gray-800">Self-paced Learning</h1>
                <div class="w-8 h-8 bg-gray-800 text-white rounded-full flex items-center justify-center text-sm">2
                </div>
            </div>
            <hr class="border-t border-gray-300 my-4">
            <div class="flex flex-col md:!flex-row items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/fi_15703927.png"
                    alt="Icon representing live sessions" class=" mr-6">
                <p class="text-gray-700 text-base self-baseline
">We offer resilience-building through personalized counseling, research
                    insights, and tailored consultation services for success.</p>
            </div>
        </div>
        <div class="bg-[#edf1ea] rounded-lg p-6 md:min-w-[749px]  max-w-3xl shadow-md">
            <div class="flex justify-between items-center">
                <h1 class="!text-[24px] font-semibold text-gray-800">Self-paced Learning</h1>
                <div class="w-8 h-8 bg-gray-800 text-white rounded-full flex items-center justify-center text-sm">3
                </div>
            </div>
            <hr class="border-t border-gray-300 my-4">
            <div class="flex flex-col md:!flex-row items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/fi_15703927.png"
                    alt="Icon representing live sessions" class=" mr-6">
                <p class="text-gray-700 text-base self-baseline
">We offer resilience-building through personalized counseling, research
                    insights, and tailored consultation services for success.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-black text-white py-12">

    <div class="container mx-auto py-12 px-4 text-center">
        <h1 class="text-[32px] font-bold">Measuring success through impact, results,<br> and achievements</h1>
        <p class="mt-4 !mb-8 text-gray-400">We provide counseling, research, and tailored services to build strength.
        </p>
        <div class="mt-11 bg-white text-black rounded-lg py-6 flex !flex-col md:!flex-row justify-center items-center">
            <div class="flex-1 p-4  md:border-b-0 md:border-r border-gray-200">
                <h2 class="!text-[18px]">Active Users</h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]">100k+</p>
            </div>
            <div class="flex-1 p-4  md:border-b-0 md:border-r border-gray-200">
                <h2 class="!text-[18px]">Completed Courses</h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]">10k+</p>
            </div>
            <div class="flex-1 p-4">
                <h2 class="!text-[18px]">User Satisfaction</h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]">20k+</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#eef2ea] container my-16 !pr-[unset] rounded-[16px]">
    <div class="container mx-auto  flex flex-wrap !pr-[unset] gap-6 rounded-[16px]">
        <div class="w-full md:w-1/2 md:p-12 ">

            <h2 class="text-gray-900 text-[32px] font-bold mb-4 !leading-10">
                Review and<br>
                Accreditation Counseling
            </h2>
            <p class="text-gray-600 text-lg mb-4">
                For each of the 15 statements below, choose the answer that best describes you from: (not at all,
                rarely, sometimes, often, very often). Answer the questions as you really are (not how you think you
                should be).
            </p>
            <p class="text-gray-600 text-lg mb-4">
                For each of the 15 statements below, choose the answer that best describes you from: (not at all,
                rarely, sometimes, often, very often). Answer the questions as you really are (not how you think you
                should be).
            </p>
            <div class="register_button pb-[43px]
    ">

                <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                    href="#">Learn More</a>
            </div>
        </div>
        <div class="flex-1 relative ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 16.png"
                alt="A group of people sitting in a circle in a bright room with large windows, listening to a person giving a presentation."
                class="w-full !h-full object-cover rounded-r-[16px]">
        </div>
    </div>
</section>

<section class="bg-[#eef2ea] container my-16 !pl-[unset] rounded-[16px]">
    <div class="container mx-auto  flex flex-wrap !pl-[unset] gap-6 rounded-[16px]">
        <div class="flex-1 relative ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 16 (1).png"
                alt="A group of people sitting in a circle in a bright room with large windows, listening to a person giving a presentation."
                class="w-full !h-full object-cover rounded-l-[16px]">
        </div>
        <div class="w-full md:w-1/2 md:p-12 ">

            <h2 class="text-gray-900 text-[32px] font-bold mb-4 !leading-10">
                Send Your<br>
                Course for Review
            </h2>
            <p class="text-gray-600 text-lg mb-4">
                For each of the 15 statements below, choose the answer that best describes you from: (not at all,
                rarely, sometimes, often, very often). Answer the questions as you really are (not how you think you
                should be).
            </p>
            <p class="text-gray-600 text-lg mb-4">
                For each of the 15 statements below, choose the answer that best describes you from: (not at all,
                rarely, sometimes, often, very often). Answer the questions as you really are (not how you think you
                should be).
            </p>
            <div class="register_button pb-[43px]
    ">

                <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                    href="#">Learn More</a>
            </div>
        </div>

    </div>
</section>
<section class="flex flex-col  py-16 gap-4 container items-start">

    <div class="flex items-center flex-col gap-3">
        <h1 class="text-gray-800 text-[32px] !font-bold text-center">Announcements & Events</h1>

    </div>
    <div class="card-group flex flex-col md:!flex-row gap-3">
        <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)]  !rounded-[16px] pb-4">
            <div class="cart_image relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 31.png"
                    class="card-img-top" alt="...">

            </div>
            <div class="card-body flex justify-between !pb-[unset] ">
                <h5 class="card-title text-[12px] !text-[#4C782B] bg-[#edf1ea] py-[5px] px-3 rounded-[8px] !h-fit">Any
                    text
                    here
                </h5>
                <p class="!text-[14px] font-normal text-[#0D0D0D99] !mb-[unset]">Oct 02, 2024</p>
                <!-- <h5 class="card-title !text-[14px] font-normal text-[#0D0D0D99]">Oct 02, 2024</h5> -->
            </div>
            <div class="card-body !pt-[unset]">
                <h5 class="card-text !text-[24px]">Halow Event</h5>

                <p class="card-text">For each of the 15 statements below, choose the answer that best describes you
                    from: (not at all,) </p>
            </div>
            <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[10px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] !w-fit !ml-4"
                href="#">Read More</a>

        </div>
        <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)]  !rounded-[16px] pb-4">
            <div class="cart_image relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 31 (1).png"
                    class="card-img-top" alt="...">

            </div>
            <div class="card-body flex justify-between !pb-[unset] ">
                <h5 class="card-title text-[12px] !text-[#4C782B] bg-[#edf1ea] py-[5px] px-3 rounded-[8px] !h-fit">Any
                    text
                    here
                </h5>
                <p class="!text-[14px] font-normal text-[#0D0D0D99] !mb-[unset]">Oct 02, 2024</p>
                <!-- <h5 class="card-title !text-[14px] font-normal text-[#0D0D0D99]">Oct 02, 2024</h5> -->
            </div>
            <div class="card-body !pt-[unset]">
                <h5 class="card-text !text-[24px]">Halow Event</h5>

                <p class="card-text">For each of the 15 statements below, choose the answer that best describes you
                    from: (not at all,) </p>
            </div>
            <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[10px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] !w-fit !ml-4"
                href="#">Read More</a>

        </div>
        <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)]  !rounded-[16px] pb-4">
            <div class="cart_image relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/images/Rectangle 31 (2).png"
                    class="card-img-top" alt="...">

            </div>
            <div class="card-body flex justify-between !pb-[unset] ">
                <h5 class="card-title text-[12px] !text-[#4C782B] bg-[#edf1ea] py-[5px] px-3 rounded-[8px] !h-fit">Any
                    text
                    here
                </h5>
                <p class="!text-[14px] font-normal text-[#0D0D0D99] !mb-[unset]">Oct 02, 2024</p>
                <!-- <h5 class="card-title !text-[14px] font-normal text-[#0D0D0D99]">Oct 02, 2024</h5> -->
            </div>
            <div class="card-body !pt-[unset]">
                <h5 class="card-text !text-[24px]">Halow Event</h5>

                <p class="card-text">For each of the 15 statements below, choose the answer that best describes you
                    from: (not at all,) </p>
            </div>
            <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[10px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] !w-fit !ml-4"
                href="#">Read More</a>

        </div>
    </div>
</section>

<?php

get_footer();
?>