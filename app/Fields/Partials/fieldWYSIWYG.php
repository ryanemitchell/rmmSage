<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class fieldWYSIWYG extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldWYSIWYG = new FieldsBuilder('field_w_y_s_i_w_y_g');

        $fieldWYSIWYG
	        ->addWysiwyg('content', [
		        'label' => 'Content',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'tabs' => 'all',
		        'toolbar' => 'full',
		        'media_upload' => 1,
		        'delay' => 0,
	        ]);

        return $fieldWYSIWYG;
    }
}
