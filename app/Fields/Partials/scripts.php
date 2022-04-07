<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class scripts extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $scripts = new FieldsBuilder('scripts');

        $scripts

        /* ===  Additional Header Code  ==== */
            ->addTextarea('additional_header_code', [
                'label' => 'Additional Header Code',
                'instructions' => "This code will appear LAST inside the sites HEAD section. Before the BODY tag. Uses do_action( 'wp_head' )'",
                'rows' => '20',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
            ])

            ->addTrueFalse('additional_header_code_active', [
                'label' => 'Additional Header Code Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Not Active',
            ])

            /* ===  After Opening Body Code  ==== */
            ->addTextarea('after_opening_body_code', [
                'label' => 'After Opening Body Code',
                'instructions' => "This code will appear just after the opening BODY tag. Uses do_action( 'wp_body_open' )",
                'rows' => '20',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
            ])

            ->addTrueFalse('after_opening_body_code_active', [
                'label' => 'After Opening Body Code Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Not Active',
            ])

	        /* ===  Footer Body Code  ==== */
            ->addTextarea('additional_footer_code', [
                'label' => 'Additional Footer Code',
                'instructions' => "This code will appear LAST, just before the closing BODY tag. Uses do_action( 'wp_footer' )",
                'rows' => '20',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
            ])

            ->addTrueFalse('additional_footer_code_active', [
                'label' => 'Additional Footer Code Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Not Active',
            ])



        ;

        return $scripts;
    }
}
