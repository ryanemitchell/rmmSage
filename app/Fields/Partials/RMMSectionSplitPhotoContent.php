<?php
/* ==========================================================================
    * Filename: RMMSectionSplitPhotoContent.php
    * Description: Photo and Content Section
    * - Fields from Single post Only
    * Reference:
    * Author: ryan
    ========================================================================== */
namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;
use app\lib\RmmSageFunctions;

class RMMSectionSplitPhotoContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     * @throws \StoutLogic\AcfBuilder\FieldNotFoundException
     */
    public function fields()
    {
        $rmmSectionSplitPhotoContent = new FieldsBuilder('rmmSection_split_photo_content');

        $rmmSectionSplitPhotoContent

            ->addGroup('rmmSectionSplitPhotoContent', [ 'label' => ''])



            ->addTab('contentTab', [
                'label' => 'Content',
            ])
	        ->addMessage('Image Info:', 'This image will be resized to 422px wide if the image provided is wider. The aspect ratio will be maintained. ')

	        ->addFields($this->get(ComboImageWithAltTitle::class))

            ->addText('tagline', [
                'label' => 'Tagline',
            ])

            ->addText('header', [
                'label' => 'Header',
            ])

            ->addWysiwyg('content', [
                'label' => 'About Content',
            ])

	        ->addTrueFalse('showCTA', [
		        'label' => 'Show CTA?',
		        'default_value' => 1,
		        'ui' => 1,

	        ])




            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
	        ->addFields($this->get(SectionStylingTab::class))

            ->endGroup();











        return $rmmSectionSplitPhotoContent;
    }
}
