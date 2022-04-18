<?php

// Set Excerpt Length
function wit_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wit_custom_excerpt_length', 999);

// Set Excerpt More Text
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s" class="excerpt-more whitespace-no-wrap bold no-underline text-red hover:text-blue-200">%s</a>', get_permalink(), __('Read Now >', 'sage'));
});

// Register Blog Specific Widget Areas

function register_blog_widget_areas()
{
    $blog_widgets_config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];


    register_sidebar([
                          'name' => __('Blog Sidebar', 'sage'),
                          'id'   => 'sidebar-blog'
                      ] + $blog_widgets_config);


    register_sidebar([
                          'name' => __('Blog Prefooter', 'sage'),
                          'id'   => 'blog-prefooter'
                      ] + $blog_widgets_config);
};

add_action('widgets_init', 'register_blog_widget_areas');
