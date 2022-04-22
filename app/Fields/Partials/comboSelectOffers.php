<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboSelectOffers extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboSelectOffers = new FieldsBuilder('combo_select_offers');

	    $comboSelectOffers
            ->addRelationship('selected_offers', [
                'label' => 'Selected Offers',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
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
                'min' => '',
                'max' => '',
                'return_format' => 'id',
            ]);

        return $comboSelectOffers;
    }
}
