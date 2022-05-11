<?php

namespace App\Fields\Partials\RMMSections;

use App\Fields\Partials\ComboImageWithAltTitle;
use App\Fields\Partials\ComboLinksRepeater;
use App\Fields\Partials\SectionStylingTab;
use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SplitContentListImageOverlap extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $splitContentListImageOverlap = new FieldsBuilder('split_content_list_image_overlap');

        $splitContentListImageOverlap
	        ->addGroup('SplitContentListImageOverlap', [
		        'label' => '',
	        ])

	        /* ===========================  CONTENT TAB  ========================== */
	        ->addTab('contentTab', [
		        'label' => 'Content',
	        ])

	        /* ===  Section Content  ==== */



	        ->addFields($this->get(ComboImageWithAltTitle::class))

	        ->addText('tagline', [
		        'label' => 'Tagline',1
	        ])

	        ->addText('header', [
		        'label' => 'Header',1
	        ])

	->addFields($this->get(comboLinksRepeater::class))

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

        return $splitContentListImageOverlap;
    }
}
