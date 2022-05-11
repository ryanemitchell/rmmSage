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
            ->addFields($this->get(ComboImageWithAltTitle::class))


	        ->addText('header', [
		        'label' => 'Header',
	        ])

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




            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(SectionStylingTab::class))
            ->endGroup();


        return $rmmSectionSplitContentStyledImage;
    }
}
