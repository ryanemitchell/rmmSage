<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class NarrowIconContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $NarrowIconContent = new FieldsBuilder('narrow_icon_content');

        $NarrowIconContent
	        ->addGroup('narrowIconContent', [
		        'label' => '',
	        ])

	        /* ===========================  CONTENT TAB  ========================== */
	        ->addTab('contentTab', [
		        'label' => 'Content',
	        ])

	        /* ===  Section Content  ==== */



	        ->addFields($this->get(ComboIconWithAltTitle::class))


	        ->addText('header', [
		        'label' => 'Header',1
	        ])

	        ->addWysiwyg('content', [
		        'label' => 'Content',
	        ])


	        ->addTrueFalse('showCTA', [
		        'label' => 'Show CTA?',
		        'default_value' => 1,
		        'ui' => 1,
		        'ui_on_text' => 'Yes',
		        'ui_off_text' => 'No',
	        ])





	        /* ===========================  STYLING TAB  ========================== */
	        ->addTab('stylingTab', [
		        'label' => 'Styling',
	        ])
	        ->addFields($this->get(SectionStylingTab::class))
	        ->endGroup();


	    return $NarrowIconContent;
    }
}
