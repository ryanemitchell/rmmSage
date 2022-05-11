<?php

namespace App\Fields;

use App\Fields\Partials\RMMSectionCityPageMainContent;
use App\Fields\Partials\RMMSectionSplitPhotoContent;
use App\Fields\Partials\RMMSectionLogoBarFull;
use App\Fields\Partials\RMMSectionSharedReviews;
use App\Fields\Partials\RMMSectionSharedAbout;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateCityPage extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateCityPage = new FieldsBuilder('page_template_city_page');

        $pageTemplateCityPage
        ->setLocation('page_template', '==', 'template-city-page.blade.php');


        $pageTemplateCityPage

            /* ===  Opening Content  ==== */
            ->addTab('openingContent_tab', [
                'label' => 'Opening Content',
            ])

                 ->addFields($this->get(RMMSectionSplitPhotoContent::class))


	        /* ===  Logo Bar  ==== */
            ->addTab('logos_tab', [
                'label' => 'Shared Logos',
            ])

            ->addFields($this->get(RMMSectionLogoBarFull::class))


            /* ===  Main Content  ==== */
            ->addTab('mainContent_tab', [
                'label' => 'Main Content',
            ])

	        ->addFields($this->get(RMMSectionCityPageMainContent::class))
            /* ===  Reviews  ==== */
            ->addTab('reviews_tab', [
                'label' => 'Shared Reviews',
            ])

            ->addFields($this->get(RMMSectionSharedReviews::class))



            /* ===  Reviews  ==== */
            ->addTab('sharedAbout_tab', [
                'label' => 'Shared About',
            ])

            ->addFields($this->get(RMMSectionSharedAbout::class))


        ;

        return $pageTemplateCityPage->build();
    }
}
