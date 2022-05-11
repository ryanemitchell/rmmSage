<?php

namespace App\Fields;

use App\Fields\Partials\RMMSections\SplitContentListImageOverlap;
use App\Fields\Partials\RMMSections\SplitContentStyledImageToOverlay;
use App\Fields\Partials\RMMSections\SplitCardCard;
use App\Fields\Partials\RMMSectionSplitContentReviews;
use App\Fields\Partials\RMMSectionSplitContentServices;
use App\Fields\Partials\RMMSectionSplitContentStyledImage;
use App\Fields\Partials\NarrowIconContent;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateFrontPage extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateFrontPage = new FieldsBuilder('page_template_front_page');

        $pageTemplateFrontPage
//            ->setLocation('page', '==', '17');
            ->setLocation('page_template', '==', 'front-page.blade.php');
        $pageTemplateFrontPage
            ->addTab('openingContent_tab', [
                'label' => 'Opening Content and Services',
            ])

          ->addFields($this->get(RMMSectionSplitContentServices::class))


            ->addTab('locations_tab', [
                'label' => 'Locations',
            ])

          ->addFields($this->get(SplitContentListImageOverlap::class))



//            ->addTab('guarantees_tab', [
//                'label' => 'Guarantees',
//            ])
//           ->addFields($this->get(RMMSectionMainServicesSection::class))

            ->addTab('dualPromo_tab', [
                'label' => 'Promo Boxes',
            ])

            ->addFields($this->get(SplitCardCard::class))

            ->addTab('reviews_tab', [
                'label' => 'Reviews',
            ])

//            ->addFields($this->get(RMMSectionSplitContentReviews::class))

//            ->addTab('logos_tab', [
//                'label' => 'Logo Bar',
//            ])
//
////          ->addFields($this->get(RMMSectionRelatedPosts::class))
            ->addTab('emergencies_tab', [
                'label' => 'Emergencies',
            ])

            ->addFields($this->get(SplitContentStyledImageToOverlay::class))



//            ->addTab('bottomContent_tab', [
//                'label' => 'Bottom Content',
//            ])
//
//          ->addFields($this->get(RMMSectionSplitContentStyledImage::class))

//            ->addTab('about_tab', [
//                'label' => 'About',
//            ])

//          ->addFields($this->get(RMMSectionSplitPhotoContent::class))

            ->addTab('careers_tab', [
                'label' => 'Careers',
            ])

          ->addFields($this->get(NarrowIconContent::class))


        ;

        return $pageTemplateFrontPage->build();
    }
}
