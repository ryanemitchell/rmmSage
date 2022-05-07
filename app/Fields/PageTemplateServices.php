<?php

namespace App\Fields;

use App\Fields\Partials\rMMSectionSplitPhotoContent;
use App\Fields\Partials\rmmSectionCenteredMenu;
use App\Fields\Partials\rmmSectionMainServicesSection;
use App\Fields\Partials\rmmSectionCenteredContent;
use App\Fields\Partials\RMMSectionRelatedPosts;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateServices extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateServices = new FieldsBuilder('page_template_services');

        $pageTemplateServices
	        ->setLocation('page_template', '==', 'template-service-page.blade.php');


	    $pageTemplateServices
            ->addTab('openingContent_tab', [
                'label' => 'Opening Content',
            ])

          ->addFields($this->get(rMMSectionSplitPhotoContent::class))

//            ->addTab('serviceMenu_tab', [
//                'label' => 'Service Menu',
//            ])
//
//          ->addFields($this->get(rmmSectionCenteredMenu::class))
//
//
//
            ->addTab('mainContent_tab', [
                'label' => 'Main Content',
            ])
           ->addFields($this->get(rmmSectionMainServicesSection::class))
//
//            ->addTab('clubPromo_tab', [
//                'label' => 'Club Promo',
//            ])
//
//            ->addTab('closingContent_tab', [
//                'label' => 'Closing Content',
//            ])
//
//          ->addFields($this->get(rmmSectionCenteredContent::class))
//
            ->addTab('relatedPosts_tab', [
                'label' => 'Related Posts',
            ])

          ->addFields($this->get(RMMSectionRelatedPosts::class))



        ;

        return $pageTemplateServices->build();
    }
}
