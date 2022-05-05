<?php

namespace App\Fields;

use App\Fields\Partials\RMMSectionSplitCardCard;
use App\Fields\Partials\RMMSectionSplitContentLinksImage;
use App\Fields\Partials\RMMSectionSplitContentReviews;
use App\Fields\Partials\rmmSectionSplitContentServices;
use App\Fields\Partials\RMMSectionSplitContentStyledImage;
use App\Fields\Partials\RMMSectionSplitPhotoContent;
use App\Fields\Partials\rmmSectionCenteredMenu;
use App\Fields\Partials\rmmSectionMainServicesSection;
use App\Fields\Partials\rmmSectionCenteredContent;
use App\Fields\Partials\RMMSectionRelatedPosts;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateMaintenancePlan extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateMaintenancePlan = new FieldsBuilder('page_template_maintenance_plan');

        $pageTemplateMaintenancePlan
	    ->setLocation('page_template', '==', 'page-maintenance-plan.blade.php');


        $pageTemplateMaintenancePlan
            ->addTab('openingContent_tab', [
                'label' => 'Opening Content and Services',
            ])



          ->addFields($this->get(rmmSectionSplitPhotoContent::class))




            ->addTab('locations_tab', [
                'label' => 'Locations',
            ])

//          ->addFields($this->get(RMMSectionSplitContentLinksImage::class))



            ->addTab('guarantees_tab', [
                'label' => 'Guarantees',
            ])
//           ->addFields($this->get(rmmSectionMainServicesSection::class))

            ->addTab('dualPromo_tab', [
                'label' => 'Promo Boxes',
            ])

//            ->addFields($this->get(RMMSectionSplitCardCard::class))

            ->addTab('reviews_tab', [
                'label' => 'Reviews',
            ])

//            ->addFields($this->get(RMMSectionSplitContentReviews::class))

            ->addTab('logos_tab', [
                'label' => 'Logo Bar',
            ])

//          ->addFields($this->get(RMMSectionRelatedPosts::class))

            ->addTab('bottomContent_tab', [
                'label' => 'Bottom Content',
            ])

//          ->addFields($this->get(RMMSectionSplitContentStyledImage::class))

            ->addTab('about_tab', [
                'label' => 'About',
            ])

//          ->addFields($this->get(RMMSectionSplitPhotoContent::class))

            ->addTab('careers_tab', [
                'label' => 'Careers',
            ])

//          ->addFields($this->get(RMMSectionRelatedPosts::class))


        ;

        return $pageTemplateMaintenancePlan->build();
    }
}
