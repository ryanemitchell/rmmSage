<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionSplitPhotoContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rMMSectionSplitPhotoContent = new FieldsBuilder('r_m_m_section_split_photo_content');

        $rMMSectionSplitPhotoContent
            ->addGroup('SectionSplitPhotoContent_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            /* ===  Section Content  ==== */
            ->addGroup('sectionContent', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '100%',
                ],
            ])
            ->addFields($this->get(comboImageWithAltTitle::class))
            ->addFields($this->get(fieldShowCTA::class))
            ->endGroup()

            /* ===  Left Column Content  ==== */
            ->addGroup('sectionContentLeft', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '40%',
                ],
            ])
            ->addFields($this->get(comboImageWithAltTitle::class))
            ->addFields($this->get(fieldShowCTA::class))
            ->endGroup()

            /* ===  Right Column Content  ==== */
            ->addGroup('sectionContentRight', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '60%',
                ],
            ])
            ->addFields($this->get(comboHeaderWithLevels::class))
            ->addFields($this->get(fieldWYSIWYG::class))
            ->endGroup()

            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();


        return $rMMSectionSplitPhotoContent;
    }
}
