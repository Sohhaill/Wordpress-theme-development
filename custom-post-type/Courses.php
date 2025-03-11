<?

function CoursesCPT()
{
    register_post_type(
        'courses',
        array(
            'labels' => array(

                'name' => __('Courses')
                'singular' => __('Courses')
            )


        )

    );
}


?>