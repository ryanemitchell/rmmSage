<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class sectionStylingFields extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionStylingFields = new FieldsBuilder('section_common_fields');

        $sectionStylingFields
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




        return $sectionStylingFields;
    }
}
