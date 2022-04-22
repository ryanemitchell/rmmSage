<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class fieldShowCTA extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldShowCTA = new FieldsBuilder('field_show_c_t_a');

        $fieldShowCTA
	        ->addTrueFalse('show_CTA', [
		        'label' => 'Show CTA?',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'message' => '',
		        'default_value' => 1,
		        'ui' => 1,
		        'ui_on_text' => 'Yes',
		        'ui_off_text' => 'No',
	        ]);

        return $fieldShowCTA;
    }
}
