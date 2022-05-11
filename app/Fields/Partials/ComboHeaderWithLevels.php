<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboHeaderWithLevels extends Partial
{
	/**
	 * The partial field group.
	 *
	 * @return array
	 * @throws \StoutLogic\AcfBuilder\FieldNameCollisionException
	 */
    public function fields()
    {
        $comboHeaderWithLevels = new FieldsBuilder('combo_header_with_levels');

        $comboHeaderWithLevels

            ->addGroup('combo_header_with_levels', [ 'label' => ''])

            ->addText('header_text', [
                'label' => 'Header',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => 'acfHeaderText',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ])


//            ->addSelect('header_element', [
//                'label' => 'Element',
//                'instructions' => '',
//                'required' => 1,
//                'conditional_logic' => [],
//                'wrapper' => [
//                    'width' => '',
//                    'class' => 'acfHTMLElements',
//                    'id' => '',
//                ],
//                'choices' => [
//                    'h1' => 'H1',
//                    'h2' => 'H2',
//                    'h3' => 'H3',
//                    'h4' => 'H4',
//                    'div' => 'div',
//                    'span' => 'span',
//                    'p' => 'P',
//                ],
//                'default_value' => ['h2'],
//                'allow_null' => 0,
//                'multiple' => 0,
//                'ui' => 0,
//                'ajax' => 0,
//                'return_format' => 'value',
//                'placeholder' => '',
//            ])

            ->endGroup()

        ;

        return $comboHeaderWithLevels;
    }
}
