<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class settingsScripts extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $settingsScripts = new FieldsBuilder('settings_scripts');

        $settingsScripts
            /* ===  Additional Header Code  ==== */
            ->addTextarea('additional_header_code', [
                'label' => 'Additional Header Code',
                'instructions' => "This code will appear LAST inside the sites HEAD section. Before the BODY tag. <br> Uses do_action( 'wp_head' )'",
                'rows' => '10',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
                'wrapper' => [
                    'width' => '75%',
                ],
            ])

            ->addTrueFalse('additional_header_code_active', [
                'label' => 'Header Code Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Off',
                'wrapper' => [
                    'width' => '25%',
                ],
            ])

            /* ===  After Opening Body Code  ==== */
            ->addTextarea('after_opening_body_code', [
                'label' => 'After Opening Body Code',
                'instructions' => "This code will appear just after the opening BODY tag.<br> Uses do_action( 'wp_body_open' )",
                'rows' => '10',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
                'wrapper' => [
                    'width' => '75%',
                ],
            ])

            ->addTrueFalse('after_opening_body_code_active', [
                'label' => 'Body Code Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Off',
                'wrapper' => [
                    'width' => '25%',
                ],
            ])

            /* ===  Footer Body Code  ==== */
            ->addTextarea('additional_footer_code', [
                'label' => 'Additional Footer Code',
                'instructions' => "This code will appear LAST, just before the closing BODY tag.<br> Uses do_action( 'wp_footer' )",
                'rows' => '10',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
                'wrapper' => [
                    'width' => '75%',
                ],
            ])

            ->addTrueFalse('additional_footer_code_active', [
                'label' => 'Footer Code Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Off',
                'wrapper' => [
                    'width' => '25%',
                ],
            ])



        ;

        return $settingsScripts;
    }
}
