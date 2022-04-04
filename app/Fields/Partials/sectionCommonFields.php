<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class sectionCommonFields extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionCommonFields = new FieldsBuilder('section_common_fields');

        $sectionCommonFields
            ->addText('class_name', [
                'label' => 'Class Name',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '33%',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ])

            ->addTrueFalse('show_on_desktop', [
                'label' => 'Show on Desktop',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ],
                'message' => '',
                'default_value' => 1,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ])
                    ->addTrueFalse('show_on_mobile', [
                'label' => 'Show on Mobile',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ],
                'message' => '',
                'default_value' => 1,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ])

            ->addRange('desktop_margin_top', [
                'label' => 'Desktop Margin Top',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '25%',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '32',
                'min' => '0',
                'max' => '128',
                'step' => '',
                'prepend' => '',
                'append' => 'px',
            ])

            ->addRange('desktop_margin_bottom', [
                'label' => 'Desktop Margin Bottom',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '25%',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '32',
                'min' => '0',
                'max' => '128',
                'step' => '',
                'prepend' => '',
                'append' => 'px',
            ])

            ->addRange('mobile_margin_top', [
                'label' => 'Mobile Margin Top',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '25%',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '32',
                'min' => '0',
                'max' => '128',
                'step' => '',
                'prepend' => '',
                'append' => 'px',
            ])

            ->addRange('Mobile_margin_bottom', [
                'label' => 'Mobile Margin Bottom',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '25%',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '32',
                'min' => '0',
                'max' => '128',
                'step' => '',
                'prepend' => '',
                'append' => 'px',
            ]);
        ;




        return $sectionCommonFields;
    }
}
