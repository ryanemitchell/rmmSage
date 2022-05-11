<?php

namespace App\Fields\Partials\RMMSections;
use App\Fields\Partials\ComboIconWithAltTitle;
use App\Fields\Partials\ComboImageWithAltTitle;
use App\Fields\Partials\SectionStylingTab;
use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SplitCardCard extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $splitCardCard = new FieldsBuilder('split_card_card');

        $splitCardCard
	        ->addGroup('SplitCardCard', [
		        'label' => '',
	        ])

	        /* ===========================  CONTENT TAB  ========================== */
	        ->addTab('contentTab', [
		        'label' => 'Content',
	        ])

	        /* ===  Section Content  ==== */
	        ->addGroup('contentLeft', [
		        'label' => '',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '50%',
		        ],
	        ])

	        ->addFields($this->get(ComboImageWithAltTitle::class))
	        ->addFields($this->get(ComboIconWithAltTitle::class))



	        ->addText('header', [
		        'label' => 'Header',
	        ])

	        ->addWYSIWYG('content', [
		        'label' => 'Content',
	        ])



	        ->addTrueFalse('showCTA', [
		        'label' => 'Show CTA?',
		        'default_value' => 1,
		        'ui' => 1,
		        'ui_on_text' => 'Yes',
		        'ui_off_text' => 'No',
	        ])

	        ->endGroup()


	        /* ===  Section Content  ==== */
	        ->addGroup('contentRight', [
		        'label' => '',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '50%',
		        ],
	        ])

	        ->addFields($this->get(ComboImageWithAltTitle::class))
	        ->addFields($this->get(ComboIconWithAltTitle::class))



	        ->addText('header', [
		        'label' => 'Header',
	        ])

	        ->addWYSIWYG('content', [
		        'label' => 'Content',
	        ])



	        ->addTrueFalse('showCTA', [
		        'label' => 'Show CTA?',
		        'default_value' => 1,
		        'ui' => 1,
		        'ui_on_text' => 'Yes',
		        'ui_off_text' => 'No',
	        ])

	        ->endGroup()





	        /* ===========================  STYLING TAB  ========================== */
	        ->addTab('stylingTab', [
		        'label' => 'Styling',
	        ])
	        ->addFields($this->get(SectionStylingTab::class))
	        ->endGroup();

        return $splitCardCard;
    }
}
