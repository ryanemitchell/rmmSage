<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class fieldHtmlElements extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldHtmlElements = new FieldsBuilder('field_html_elements');

        $fieldHtmlElements
	        ->addSelect('html_element', [
		        'label' => 'Element',
		        'instructions' => '',
		        'required' => 1,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '30',
			        'class' => 'acfHTMLElements',
			        'id' => '',
		        ],
		        'choices' => [
			        'div' => 'div',
			        'p' => 'P',
			        'h1' => 'H1',
			        'h2' => 'H2',
			        'h3' => 'H3',
			        'h4' => 'H4',
		        ],
		        'default_value' => ['h2'],
		        'allow_null' => 0,
		        'multiple' => 0,
		        'ui' => 0,
		        'ajax' => 0,
		        'return_format' => 'value',
		        'placeholder' => '',
	        ]);


	    return $fieldHtmlElements;
    }
}
