<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboDisplayToggles extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $ComboDisplayToggles = new FieldsBuilder('combo_display_toggles');

        $ComboDisplayToggles
            ->addRadio('display_from', [
                'label' => 'Display',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'choices' => [
                    'on' => 'Show',
//                    'parent' => 'Content from Parent Page',
                    'Off' => 'Off',
                ],
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => 'parent',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ]);

        return $ComboDisplayToggles;
    }
}
