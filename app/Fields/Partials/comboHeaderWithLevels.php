<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboHeaderWithLevels extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboHeaderWithLevels = new FieldsBuilder('combo_header_with_levels');

        $comboHeaderWithLevels



	        ->addFields($this->get(fieldHeaderText::class))
	        ->modifyField('header_text', [
		        'label' => 'Header',
		        'wrapper' => [
			        'width' => '',
			        'class' => 'acfHeaderText',
			        'id' => '',
		        ],
	        ])



	        ->addSelect('html_element', [
		        'label' => 'Element',
		        'instructions' => '',
		        'required' => 1,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => 'acfHTMLElements',
			        'id' => '',
		        ],
		        'choices' => [
			        'h1' => 'H1',
			        'h2' => 'H2',
			        'h3' => 'H3',
			        'h4' => 'H4',
			        'div' => 'div',
			        'span' => 'span',
			        'p' => 'P',
		        ],
		        'default_value' => ['h2'],
		        'allow_null' => 0,
		        'multiple' => 0,
		        'ui' => 0,
		        'ajax' => 0,
		        'return_format' => 'value',
		        'placeholder' => '',
	        ]);

        ;

        return $comboHeaderWithLevels;
    }
}
