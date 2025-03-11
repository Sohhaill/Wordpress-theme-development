<?php
/*
Template Name: All Courses
*/

?>

<?php
$Header_login = get_field('header_login');
$Header_signup = get_field('Header_signup');
get_header();
?>
<section class="flex flex-col items-center py-16 gap-11 container">



    <div class="card-group flex flex-col gap-3 md:!flex-row">
        <?php
        $courses_query = new WP_Query(array(
            'post_type' => 'Courses',
            'posts_per_page' => -1,
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



</section>
<?php
get_footer();
?>