<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboImageWithAltTitle extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboImageWithAltTitle = new FieldsBuilder('combo_image_with_alt_title');

        $comboImageWithAltTitle
	        ->addFields($this->get(fieldImage::class))

	        ->addText('alt', [
		        'label' => 'Alt',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '',
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
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])




;
        return $comboImageWithAltTitle;
    }
}
