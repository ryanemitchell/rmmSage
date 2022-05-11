<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboFlexContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboFlexContent = new FieldsBuilder('combo_flex_content');

        $comboFlexContent
	        ->addFlexibleContent('flexible_content', [
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'button_label' => 'Add Row',
		        'min' => '',
		        'max' => '',
	        ])

	        ->addLayout('layout_wysiwyg', [
		        'label' => 'WYSIWYG',
		        'display' => 'block',
		        'sub_fields' => [

		        ],
		        'min' => '',
		        'max' => '',
	        ])

	        ->addFields($this->get(ComboHeaderContent::class))



	        ->addLayout('layout_accordion', [
		        'label' => 'Accordion',
		        'display' => 'block',
		        'sub_fields' => [],
		        'min' => '',
		        'max' => '',
	        ])

	    ->addFields($this->get(ComponentAccordion::class));



        return $comboFlexContent;
    }
}
