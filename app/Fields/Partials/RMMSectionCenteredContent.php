<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionCenteredContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rmmSectionCenteredContent = new FieldsBuilder('rmm_section_centered_content');

        $rmmSectionCenteredContent
            ->addGroup('SectionCenteredContent_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

//            ->addFields($this->get(ComboDisplayToggles::class))



            /* ===  Section Content  ==== */
            ->addGroup('sectionContent', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '100%',
                ],
                'conditional_logic' => [
                    'field' => 'display_from',
                    'operator' => '==',
                    'value' => 'On',],
            ])

	        ->addText('header', [
		        'label' => 'Header',
	        ])


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
            ])
            ->addFields($this->get(ComboListWithOptions::class))

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

        return $rmmSectionCenteredContent;
    }
}
