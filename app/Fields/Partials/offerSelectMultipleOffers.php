<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class offerSelectMultipleOffers extends Partial
{
    /**
     * The partial field group.
     *
     * @return FieldsBuilder
     */
    public function fields()
    {
        $offerSelectMultipleOffers = new FieldsBuilder('offer_select_multiple_offers');

        $offerSelectMultipleOffers

	        ->addRelationship('selected_offer', [
                'label' => 'Selected Offer',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [
                    'field' => 'display_from',
                    'operator' => '==',
                    'value' => 'On',],

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

        return $offerSelectMultipleOffers;
    }
}
