<?php
/* ==========================================================================
    * Filename: RMMSectionSplitContentStyledImage.php
    * Description: Photo and Content Section
    * - Fields from Single post Only
    * Reference:
    * Author: ryan
    ========================================================================== */
namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionSplitContentStyledImage extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rmmSectionSplitContentStyledImage = new FieldsBuilder('rmmSection_split_content_StyledImage');

        $rmmSectionSplitContentStyledImage
            ->addGroup('rmmSectionSplitContentStyledImage_group', [
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
            ->addTrueFalse('show_CTA', [
                'label' => 'Show CTA?',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Yes',
                'ui_off_text' => 'No',
            ])
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
                    'width' => '60%',
                ],
            ])
            ->addFields($this->get(comboHeaderWithLevels::class))
            ->addWysiwyg('content', [
                'label' => 'Content',
            ])
            ->endGroup()

            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();


        return $rmmSectionSplitContentStyledImage;
    }
}
