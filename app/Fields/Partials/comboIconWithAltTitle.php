<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboIconWithAltTitle extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboIconWithAltTitle = new FieldsBuilder('combo_icon_with_alt_title');

        $comboIconWithAltTitle
	        ->addGroup('combo_icon_with_alt_title', [ 'label' => ''])

	        ->addImage('image', [
		        'label' => 'Icon',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '33',
			        'class' => '',
			        'id' => '',
		        ],
		        'return_format' => 'array',
		        'preview_size' => 'thumbnail',
		        'library' => 'all',
		        'min_width' => '',
		        'min_height' => '',
		        'min_size' => '',
		        'max_width' => '',
		        'max_height' => '',
		        'max_size' => '',
		        'mime_types' => '',
	        ])

	        ->addText('alt', [
		        'label' => 'Alt',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '33',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->addText('title', [
		        'label' => 'Title',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '33',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])
	        ->endGroup();

        return $comboIconWithAltTitle;
    }
}
