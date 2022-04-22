<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class offerSelectSingleOffer extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $offerSelectSingleOffer = new FieldsBuilder('offer_select_single_offer');



        $offerSelectSingleOffer
	        ->addGroup('single_offer_box', [
		        'label' => '',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'layout' => 'block',
		        'sub_fields' => [],
	        ])
	        ->addFields($this->get(comboDisplayToggles::class))
	        ->modifyField('display_from', [
		        'label' => 'Display the single offer box?',
	        ])


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
		        'max' => '1',
		        'return_format' => 'id',
	        ]);

        return $offerSelectSingleOffer;
    }
}
