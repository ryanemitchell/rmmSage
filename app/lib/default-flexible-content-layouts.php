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
                'acf_fc_layout' => 'wysiwyg',
                'field_623a6973ea8cf' => // WYSIWYG
                    '<h2>' . __("Description", 'bonestheme') . '</h2>'
                    . '<p>' . __("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.", 'bonestheme') . '</p>'
                    . '<ul class="half-width-blocks">'
                    . '<li>'
                    . '<strong class="large-text">' . __("Donec libero turpis, lacinia nec leo sit amet, dignissim dignissim lacus.", 'bonestheme') . '</strong>'
                    . '</li>'
                    . '</ul>',
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

add_filter('acf/load_value/name=flexible_content_test', 'default_page_blocks_room', 10, 3);
