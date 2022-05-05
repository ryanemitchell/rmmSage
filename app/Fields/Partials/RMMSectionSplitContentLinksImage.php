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

class RMMSectionSplitContentLinksImage extends Partial
{
    /**
     * The partial field group.
     *
     * @return FieldsBuilder
     */
    public function fields()
    {
        $rmmSectionSplitContentLinksImage = new FieldsBuilder('rmm_section_split_content_links_image');

        $rmmSectionSplitContentLinksImage
            ->addGroup('SectionSplitContentLinksImage_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            ->addFields($this->get(comboDisplayToggles::class))
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
            ->addFields($this->get(comboSubHeaderWithLevels::class))
            ->addFields($this->get(comboHeaderWithLevels::class))
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



            ->addFields($this->get(comboHeaderWithLevels::class))

            ->addFields($this->get(comboListWithOptions::class))


            ->endGroup()
            ->endGroup()
            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();

        return $rmmSectionSplitContentLinksImage;
    }
}
