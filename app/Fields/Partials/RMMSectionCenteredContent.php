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

            ->addFields($this->get(comboDisplayToggles::class))

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
            ->addFields($this->get(comboHeaderWithLevels::class))
            ->addFields($this->get(fieldWYSIWYG::class))
             ->addFields($this->get(comboListWithOptions::class))
            ->addFields($this->get(fieldShowCTA::class))
            ->endGroup()

            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();

        return $rmmSectionCenteredContent;
    }
}
