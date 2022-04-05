<?php

/**
 * Filename: default-flexible-content-layouts.php
 * Description:
 * Author: ryan
 */

function default_page_blocks_room($value, $post_id, $field)
{
    $new_value = $value;
    $post_type = get_post_type($post_id);

    // La valeur ne sera null que si c'est une nouvelle page
    if (null === $value) {
        $new_value = [
            [
                'acf_fc_layout' => 'layout',
                'field_example_flexible_content_field_layout_wysiwyg_field' => // WYSIWYG
	                '<h2>I had a hot dog.</h2>
It was delicious
<img class="alignnone size-full wp-image-1838" src="http://newsage.local/wp-content/uploads/image-alignment-300x200-1.jpg" alt="" width="300" height="200" />',
	            'field_623a790dfca28' => // ClassName
                    'TempClassName',
                'field_623a795644291' => // Desktop Margin Top
	                '10',
                'field_623aa02457233' => // Desktop Margin Bottom
	                '10',
                'field_623aa02457234' => // Mobile Margin Top
	                '10',
                'field_623aa02457235' => // Mobile  Margin Bottom
	                '10',
            ],
            [
                'acf_fc_layout' => 'image_text_juxta'
            ],
            [
                'acf_fc_layout' => 'large_gallery',
                'title' => __("Galerie d'images", 'bonestheme'),
            ],
        ];
    }

    return $new_value;
}

add_filter('acf/load_value/name=flexible_content_field', 'default_page_blocks_room', 10, 3);
