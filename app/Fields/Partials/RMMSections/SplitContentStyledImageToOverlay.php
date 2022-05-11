<?php

namespace App\Fields\Partials\RMMSections;

use App\Fields\Partials\ComboImageWithAltTitle;
use App\Fields\Partials\ComboLinksRepeater;
use App\Fields\Partials\SectionStylingTab;
use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SplitContentStyledImageToOverlay extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $splitContentStyledImageToOverlay = new FieldsBuilder('split_content_styled_image_to_overlay');

        $splitContentStyledImageToOverlay
            ->addGroup('SplitContentStyledImageToOverlay', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            /* ===  Section Content  ==== */



            ->addFields($this->get(ComboImageWithAltTitle::class))

            ->addText('header', [
                'label' => 'Header',
            ])

            ->addWYSIWYG('content', [
                'label' => 'content',
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

        return $splitContentStyledImageToOverlay;
    }
}
