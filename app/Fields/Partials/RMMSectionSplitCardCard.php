<?php
/* ==========================================================================
    * Filename: RMMSectionSplitPhotoContent.php
    * Description:
    * Fields Behavior: Choose to get fields from parent, current post or none.
    * Reference:
    * Author: @ryanemitchell
    ========================================================================== */
namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionSplitCardCard extends Partial
{
    /**
     * The partial field group.
     *
     * @return FieldsBuilder
     */
    public function fields()
    {
        $rmmSectionSplitCardCard = new FieldsBuilder('rmm_section_split_card_card');

        $rmmSectionSplitCardCard
            ->addGroup('SectionSplitCardCard_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            ->addFields($this->get(ComboDisplayToggles::class))
            ->modifyField('display_from', [
                'choices' => [
                    'on' => 'Show',
                    'Off' => 'Off',
                ],
                'default_value' => 'on',
            ])


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


	        /* ===  Left Column Content  ==== */
	        ->addGroup('sectionContentLeft', [
		        'label'   => '',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '60%',
		        ],
	        ])
	        ->addFields($this->get(ComboSubHeaderWithLevels::class))
	        ->addFields($this->get(ComboHeaderWithLevels::class))
	        ->addWysiwyg('content', [
		        'label' => 'Content',
	        ])
	        ->addTrueFalse('show_CTA', [
		        'label' => 'Show CTA?',
		        'default_value' => 1,
		        'ui' => 1,
		        'ui_on_text' => 'Yes',
		        'ui_off_text' => 'No',
	        ])
	        ->endGroup()

	        /* ===  Right Column Content  ==== */
	        ->addGroup('sectionContentRight', [
		        'label'   => '',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '40%',
		        ],
	        ])



            ->addFields($this->get(ComboHeaderWithLevels::class))

            ->addFields($this->get(ComboListWithOptions::class))


            ->endGroup()
	        ->endGroup()
            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(SectionStylingTab::class))
            ->endGroup();

        return $rmmSectionSplitCardCard;
    }
}
