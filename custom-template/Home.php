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
$exploreall = $course_post['exploreall'];

?>



<section class="flex flex-col items-center py-16 gap-11 container">


    <div class="flex items-center flex-col gap-3">
        <div class="text-[#4C782B] text[16px] mb-2 font-medium"> <?php echo $course_post['explore'] ?></div>
        <div class="text-gray-800 text-2xl font-bold text-center"> <?php echo $course_post['heading'] ?></div>

    </div>
    <div class="card-group flex flex-col gap-3 md:!flex-row">
        <?php
        $courses_query = new WP_Query(array(
            'post_type' => 'Courses',
            'posts_per_page' => 3,
        ));

        if ($courses_query->have_posts()):
            while ($courses_query->have_posts()):
                $courses_query->the_post();
                $post_id = get_the_ID();
                $categories = get_the_terms($post_id, 'courses_category');



                $age = '';
                $price = '';
                if ($categories && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                        if ($category->slug === 'age') {
                            $age = $category->name;
                        } elseif ($category->slug === 'free') {
                            $price = $category->name;
                        }
                    }
                }

                ?>
                <div class="card border !h-[unset] border-[rgba(0,0,0,0.175)] px-[10px] py-[10px] !rounded-[16px]">
                    <div class="cart_image relative">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="card-img-top"
                            alt="<?php the_title(); ?>">
                        <div class="register_button absolute top-[16px] left-[9px]">
                            <a class="!text-[#4c782b] !bg-[#FFFFFF] no-underline font-medium text-[16px] py-[5px] px-[12px] text-center rounded-[8px] border"
                                href="#"> <?php echo $price ?></a>
                        </div>
                    </div>
                    <div class="card-body flex justify-between !pb-[unset]">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <h5 class="card-title text-[16px] font-normal text-[#0D0D0DCC]">
                            <?php echo $age ?>
                        </h5>
                    </div>
                    <div class="card-body !pt-[unset]">
                        <p class="card-text"><span>Author: </span><?php the_author(); ?></p>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                    </div>
                    <div class="register_button pb-[15px] pt-[5px]">
                        <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border !border-[#4C782B]"
                            href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No courses found.</p>';
        endif;
        ?>
    </div>


    <div class="register_button py-[20px]
    "> <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
            href="<?php echo esc_url($exploreall['url']) ?>"><?php echo $exploreall['title'] ?></a>
    </div>
</section>

<?php $devliery_model = get_field('devliery_model');



?>

<section class="py-19 md:pl-20 flex  gap-6 !flex-col">
    <div class="text-[#4C782B] text[16px] mb-2 font-medium text-left
    ">Our Delivery Model</div>
    <div id="scrollContainer"
        class="courses_items  flex flex-col md:!flex-row  gap-6 w-full overflow-x-auto !scrollbar-hide">
        <?php foreach ($devliery_model as $models): ?>
            <div class="bg-[#edf1ea] rounded-lg p-6 md:min-w-[749px] max-w-3xl shadow-md cursor-pointer">
                <div class="flex justify-between items-center">
                    <h1 class="!text-[24px] font-semibold text-gray-800"><?php echo $models['heading'] ?></h1>
                    <div class="w-8 h-8 bg-gray-800 text-white rounded-full flex items-center justify-center text-sm">
                        <?php echo $models['count'] ?>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">
                <div class="flex flex-col md:!flex-row items-center">
                    <img src="<?php echo $models['image']['url'] ?>" alt="Icon representing live sessions" class=" mr-6">
                    <p class="text-gray-700 text-base self-baseline
">     <?php echo $models['paragraph'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?php $counter_section = get_field('counter_section');


?>
<section class="bg-black text-white py-12">

    <div class="container mx-auto py-12 px-4 text-center">
        <h1 class="text-[32px] font-bold"><?php echo $counter_section['heading'] ?></h1>
        <p class="mt-4 !mb-8 text-gray-400"><?php echo $counter_section['paragraph'] ?>
        </p>
        <div class="mt-11 bg-white text-black rounded-lg py-6 flex !flex-col md:!flex-row justify-center items-center">
            <div class="flex-1 p-4  md:border-b-0 md:border-r border-gray-200">
                <h2 class="!text-[18px]"><?php echo $counter_section['users'] ?></h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]"><?php echo $counter_section['counters'] ?></p>
            </div>
            <div class="flex-1 p-4  md:border-b-0 md:border-r border-gray-200">
                <h2 class="!text-[18px]"><?php echo $counter_section['course'] ?></h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]"><?php echo $counter_section['course_number'] ?></p>
            </div>
            <div class="flex-1 p-4">
                <h2 class="!text-[18px]"><?php echo $counter_section['satisfaction'] ?></h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]"><?php echo $counter_section['20k+'] ?></p>
            </div>
        </div>
    </div>
</section>
<?php $review = get_field('review');


?>
<section class="bg-[#eef2ea] container my-16 md:!pr-[unset] rounded-[16px] ">
    <div class="container mx-auto  flex flex-wrap md:!pr-[unset] gap-6 rounded-[16px]">
        <div class="w-full md:w-1/2 md:p-12 ">

            <h2 class="text-gray-900 text-[32px] font-bold mb-4 !leading-10">
                <?php echo $review['heading'] ?>
            </h2>
            <p class="text-gray-600 text-lg mb-4">
                <?php echo $review['para1'] ?>
            </p>
            <p class="text-gray-600 text-lg mb-4">
                <?php echo $review['para2'] ?>
            </p>
            <div class="register_button pb-[43px]
    ">

                <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                    href="<?php echo esc_url($review['learn_more']['url']) ?>"><?php echo $review['learn_more']['title'] ?></a>
            </div>
        </div>
        <div class="flex-1 relative ">
            <img src="  <?php echo $review['image']['url'] ?>"
                alt="A group of people sitting in a circle in a bright room with large windows, listening to a person giving a presentation."
                class="w-full !h-full object-cover rounded-r-[16px]">
        </div>
    </div>
</section>
<contact>
    <?php $send_course = get_field('send_course'); ?>
    <section class="bg-[#eef2ea] container my-16 md:!pl-[unset] rounded-[16px]">
        <div class="container mx-auto  flex flex-wrap md:!pl-[unset] gap-6 rounded-[16px]">
            <div class="flex-1 relative ">
                <img src="  <?php echo $send_course['image']['url'] ?>"
                    alt="A group of people sitting in a circle in a bright room with large windows, listening to a person giving a presentation."
                    class="w-full !h-full object-cover rounded-l-[16px]">
            </div>
            <div class="w-full md:w-1/2 md:p-12 ">

                <h2 class="text-gray-900 text-[32px] font-bold mb-4 !leading-10">
                    <?php echo $send_course['heading'] ?>
                </h2>
                <p class="text-gray-600 text-lg mb-4">
                    <?php echo $send_course['para1'] ?>
                </p>
                <p class="text-gray-600 text-lg mb-4">
                    <?php echo $send_course['para2'] ?>
                </p>
                <div class="register_button pb-[43px]
    ">

                    <a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                        href="<?php echo esc_url($send_course['learn_more']['url']) ?>"><?php echo $review['learn_more']['title'] ?></a>
                </div>
            </div>

        </div>
    </section>

</contact>


<section class="flex flex-col  py-16 gap-4 container items-start">

    <div class="flex items-center flex-col gap-3">
        <h1 class="text-gray-800 text-[32px] !font-bold text-center">Announcements & Events</h1>

    </div>
    <div class="card-group flex flex-col md:!flex-row gap-3">

        <?php

        $event_query = new WP_Query(array(
            'post_type' => 'Events',
            'posts_per_page' => 3,
        ));

        if ($event_query->have_posts()):
            while ($event_query->have_posts()):
                $event_query->the_post();

                ?>
                <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)]  !rounded-[16px] pb-4">
                    <div class="cart_image relative">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-body flex justify-between !pb-[unset] ">
                        <h5 class="card-title text-[12px] !text-[#4C782B] bg-[#edf1ea] py-[5px] px-3 rounded-[8px] !h-fit">
                            Any
                            text
                            here
                        </h5>
                        <p class="!text-[14px] font-normal text-[#0D0D0D99] !mb-[unset]"><?php the_date() ?></p>
                        <!-- <h5 class="card-title !text-[14px] font-normal text-[#0D0D0D99]">Oct 02, 2024</h5> -->
                    </div>
                    <div class="card-body !pt-[unset]">
                        <h5 class="card-text !text-[24px]"><?php the_title(); ?></h5>

                        <p class="card-text"><?php the_content() ?></p>
                    </div>
                    <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[10px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] !w-fit !ml-4"
                        href="<?php the_permalink(); ?>">Read More</a>

                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No Events found.</p>';
        endif;
        ?>


    </div>
</section>
<?php $contactus = get_field('contactus');
$links_contact = $contactus['links_contact'];


?>
<section class="bg-gray-100 flex items-center justify-center p-6">
    <div class="container  p-6  rounded-lg  flex !flex-col md:!flex-row gap-6">
        <div class="contact-info w-full md:w-1/2">
            <h2 class="text-[32px] font-bold mb-2"> <?php echo $contactus['heading'] ?></h2>
            <p class="text-sm text-gray-600 mb-4"> <?php echo $contactus['para'] ?></p>


            <div class="rounded-lg   w-full max-w-md">
                <?php foreach ($links_contact as $links): ?>
                    <div
                        class="flex items-start bg-white rounded-[16px] py-[14px] px-[16px] mb-4 border border-[#0D0D0D1A]">
                        <div class="bg-[#f6f8f4] rounded-[16px] p-[12px] mr-4">
                            <img alt="Email icon" class="w-6 h-6" height="24" src="<?php echo $links['image']['url'] ?>"
                                width="24" />
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-gray-800 text-[16px] font-semibold !mb-[unset]">
                                <?php echo $links['heading'] ?>
                            </h4>
                            <p class="text-gray-600 !mb-[unset]">
                                <?php echo $links['text'] ?>
                            </p>
                        </div>
                        <div class="bg-[#f6f8f4] rounded-[16px] p-[14px] ">
                            <img alt="Email icon"
                                src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/fi_3314260.png'; ?>" />
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
        <div class="contact-form w-full md:w-1/2 bg-[#ebede9] border border-[#4C782B33] rounded-[16px] p-9">
            <h2 class="text-2xl font-bold mb-2">Let's Connect</h2>
            <p class="text-sm text-gray-600 mb-4">For each of the 15 statements below, choose the answer that best
                describes you from: (not at all, rarely, so).</p>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>


<?php

get_footer();
?>