<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboListWithOptions extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboListWithOptions = new FieldsBuilder('combo_list_with_options');

        $comboListWithOptions
            ->addGroup('list_with_options', [
                'label' => 'List',
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'layout' => 'block',
            ])

	        ->addRepeater('list_items', [
		        'label' => 'List Items',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '100',
			        'class' => '',
			        'id' => '',
		        ],

		        'min' => 0,
		        'max' => 0,
		        'layout' => 'table',
		        'button_label' => 'Add List Item',

	        ])

	        ->addText('listItem_name', [
		        'label' => 'Text',
		        'instructions' => '',
		        'required' => 1,
		        'wrapper' => [
			        'width' => '50',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->addText('listItem_url', [
		        'label' => 'Link',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '50',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->endRepeater()

            ->addSelect('list_style', [
                'label' => 'List Style',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper    ' => [
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ],
                'choices' => [
                    'none' => 'None',
                    'dot' => 'Styled Dot (Theme)',
                    'check' => 'Checkmark (Theme)',
                    'arrow' => 'Arrow (Theme)',
                    'arrowAfter' => 'Arrow After (Theme)',
                    'marker' => 'Marker (Theme)',
                    'disc' => 'Disc (HTML)',
                    'circle' => 'Circle (HTML)',
                    'square' => 'Square (HTML)',
                ],
                'default_value' => ['none'],
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ])






            ->addRange('listDesktopColumns', [
                'label' => 'Columns on Desktop',
                'required' => 1,
                'wrapper' => [
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'min' => '1',
                'max' => '3',
                'step' => '1',
            ])

            ->addRange('listMobileColumns', [
                'label' => 'Columns on Mobile',
                'required' => 1,
                'wrapper' => [
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'min' => '1',
                'max' => '3',
                'step' => '1',
            ])








            ->endGroup();




        return $comboListWithOptions;
    }
}
