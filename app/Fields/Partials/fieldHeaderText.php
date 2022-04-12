<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class fieldHeaderText extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldHeaderText = new FieldsBuilder('field_header_text');

        $fieldHeaderText
	        ->addText('header_text', [
		        'label' => 'Header',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '50%',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ]);

        return $fieldHeaderText;
    }
}
