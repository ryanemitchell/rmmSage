<?php

namespace App\Fields;

use App\Fields\Partials\RMMSectionSplitPhotoContent;
use App\Fields\Partials\RMMSectionCenteredMenu;
use App\Fields\Partials\RMMSectionMainServicesSection;
use App\Fields\Partials\RMMSectionCenteredContent;
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

          ->addFields($this->get(RMMSectionSplitPhotoContent::class))

            ->addTab('serviceMenu_tab', [
                'label' => 'Service Menu',
            ])

          ->addFields($this->get(RMMSectionCenteredMenu::class))
//
//
//
            ->addTab('mainContent_tab', [
                'label' => 'Main Content',
            ])
           ->addFields($this->get(RMMSectionMainServicesSection::class))
//
//            ->addTab('clubPromo_tab', [
//                'label' => 'Club Promo',
//            ])
//
            ->addTab('closingContent_tab', [
                'label' => 'Closing Content',
            ])
//
          ->addFields($this->get(RMMSectionCenteredContent::class))
//
            ->addTab('relatedPosts_tab', [
                'label' => 'Related Posts',
            ])

          ->addFields($this->get(RMMSectionRelatedPosts::class))



        ;

        return $pageTemplateServices->build();
    }
}
