<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboSubHeaderwithLevels extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboSubHeaderwithLevels = new FieldsBuilder('combo_sub_headerwith_levels');

        $comboSubHeaderwithLevels
	        ->addFields($this->get(fieldSubHeaderText::class))
	        ->modifyField('subheader_text', [
		        'label' => 'Subheader',
		        'wrapper' => [
			        'class' => 'acfHeaderText',
		        ],
	        ])



	        ->addSelect('subheader_element', [
		        'label' => 'Element',
		        'instructions' => '',
		        'required' => 1,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'class' => 'acfHTMLElements',
			        'id' => '',
		        ],
		        'choices' => [
					'h2' => 'H2',
			        'h3' => 'H3',
			        'h4' => 'H4',
			        'div' => 'div',
			        'span' => 'span',
			        'p' => 'P',
		        ],
		        'default_value' => ['h3'],
		        'allow_null' => 0,
		        'multiple' => 0,
		        'ui' => 0,
		        'ajax' => 0,
		        'return_format' => 'value',
		        'placeholder' => '',
	        ]);

        return $comboSubHeaderwithLevels;
    }
}
