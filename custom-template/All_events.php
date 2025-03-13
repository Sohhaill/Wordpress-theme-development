<?php
/*
Template Name: All Events
*/

?>

<?php

get_header();
?>
<section class="flex flex-col  py-16 gap-4 container items-start">

    <div class="flex items-center flex-col gap-1s">
        <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
            Announcements & Events</div>
        <h1 class="text-gray-800 text-[32px] !font-bold text-center">Stay Updated with Our Latest Announcements & Events
        </h1>

        <p class="text-gray-600 ">
            Discover What's New – Announcements, Updates, and Upcoming Events</p>
    </div>
    <div class="card-group flex flex-col md:!flex-row gap-3">

        <?php

        $event_query = new WP_Query(array(
            'post_type' => 'Events',
            'posts_per_page' => -1,
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



<?php
get_footer();
?>