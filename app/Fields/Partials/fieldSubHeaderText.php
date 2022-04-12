<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class fieldSubHeaderText extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldSubHeaderText = new FieldsBuilder('field_sub_header_text');

        $fieldSubHeaderText
	        ->addText('subheader_text', [
		        'label' => 'Subheader',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ]);

        return $fieldSubHeaderText;
    }
}
