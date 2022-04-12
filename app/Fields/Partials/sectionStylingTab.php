<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class sectionStylingTab extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionStylingTab = new FieldsBuilder('section_styling_tab');

        $sectionStylingTab
	        ->addGroup('sectionStyling', [
		        'label' => '',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '100',
			        'class' => '',
			        'id' => '',
		        ],
		        'layout' => 'block',
		        'sub_fields' => [],
	        ])


	        ->addFields($this->get(sectionCommonFields::class))


	    ->endGroup();

        return $sectionStylingTab;
    }
}
