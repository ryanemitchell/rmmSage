<?php

namespace App\Fields;

use App\Fields\Partials\RMMSectionSplitContentServices;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateOffers extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateOffers = new FieldsBuilder('page_template_offers');

        $pageTemplateOffers
	        ->setLocation('page_template', '==', 'page-offers.blade.php');

        $pageTemplateOffers

            ->addRelationship('featured_offers', [
                'label' => 'Featured Offers',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['offers'],
                'taxonomy' => [],
                'filters' => [
                    0 => 'search',
                ],
                'elements' => '',
                'min' => '0',
                'max' => '0',
                'return_format' => 'id',
            ]);

        return $pageTemplateOffers->build();
    }
}
