<?php
/*
Template Name: All Courses
*/

?>

<?php

get_header();
?>

<!-- <section class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="container bg-white p-8 rounded-lg shadow-lg max-w-5xl text-center">
        <div class="badge inline-block bg-green-100 text-green-800 py-1 px-3 rounded-full text-sm mb-4">
            Exclusive
        </div>
        <h1 class="text-3xl font-bold mb-2">
            Master <span class="text-gray-700">Psychometric</span> and Behavioral Courses
        </h1>
        <p class="text-gray-600 mb-8">
            Unlock expertise with tailored courses for psychometric and behavioral excellence.
        </p>

        <div class="relative overflow-hidden">
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                <script>
                    const images = [
                        'https://placehold.co/300x400?text=1',
                        'https://placehold.co/300x400?text=2',
                        'https://placehold.co/300x400?text=3',
                        'https://placehold.co/300x400?text=4',
                        'https://placehold.co/300x400?text=5',
                        'https://placehold.co/300x400?text=6',
                        'https://placehold.co/300x400?text=7',
                        'https://placehold.co/300x400?text=8',
                        'https://placehold.co/300x400?text=9',
                        'https://placehold.co/300x400?text=10'
                    ];

                    const carousel = document.getElementById('carousel');
                    images.forEach(img => {
                        const imgElement = document.createElement('img');
                        imgElement.src = img;
                        imgElement.className = 'w-72 h-96 object-cover rounded-lg shadow-md';
                        imgElement.alt = 'Carousel Image';
                        carousel.appendChild(imgElement);
                    });

                    let currentIndex = 0;

                    function moveSlide(direction) {
                        const totalImages = images.length;
                        const visibleImages = 3;
                        currentIndex += direction;

                        if (currentIndex < 0) currentIndex = totalImages - visibleImages;
                        if (currentIndex > totalImages - visibleImages) currentIndex = 0;

                        const offset = -(currentIndex * 18.5); // Adjusted for image width + spacing
                        carousel.style.transform = `translateX(${offset}rem)`;
                    }
                </script>
            </div>
            <button onclick="moveSlide(-1)"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer">❮</button>
            <button onclick="moveSlide(1)"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer">❯</button>
        </div>
    </div>
</section>
 -->


<section class="flex flex-col items-center py-16 gap-4 container">

    <div class="inline-block  text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
        Explore Our Courses </div>
    <h1 class="text-[40px] tajawal font-bold text-center text-black mt-2 mb-5">
        <span class="text-black-700 "> Discover Popular Courses and Learning <br>Opportunities
    </h1>
    <div class="card-group grid grid-cols-1 md:grid-cols-3 gap-2">
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
                        <h5 class="card-title text-[24px] font-bold"><?php the_title(); ?></h5>
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