<?php

namespace App\Fields;

use App\Fields\Partials\cptOffersSharedFields;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class cptOffers extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $cptOffers = new FieldsBuilder('cpt_offers');

        $cptOffers
            ->setLocation('post_type', '==', 'offers');

        $cptOffers
	        ->addText('offer_title', [
		        'label' => 'Offer Title',
		        'instructions' => '',
		        'required' => 1,
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->addText('offer_subtitle', [
		        'label' => 'Offer Subtitle',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	    ->addFields($this->get(cptOffersSharedFields::class))
	        ->modifyField('offer_image', [
		        'instructions' => 'This will use the image from Offers Options if no image is selected',

	        ])


	        ->modifyField('offer_cta', [
		        'instructions' => 'This will use the Call to Action from Offers Options if empty',

	        ])

	        ->modifyField('offer_expiration_text', [
		        'instructions' => 'This will use the Expiration Text from Offers Options if empty',

	        ])



	        ->modifyField('offer_disclaimer', [
		        'instructions' => 'This will use the Offer Disclaimer from Offers Options if empty',

	        ])

	        ->modifyField('offer_expiration', [
		        'choices' => [
			        'fromOptions' => 'Set in Offers Options',
			        'noExpiration' => 'No Expration',
			        'twoWeeks' => '2 Weeks from date of visit',
			        'endOfTheMonth' => 'Last day Current Month from date of visit',
			        'endOfNextMonth' => 'Last the Next Month from date of visit',
			        'threeMonths' => 'Last Day of 3 Months from date of visit',
			        'sixMonths' => 'Last Day of 6 Months from date of visit',
		        ],
		        'default_value' => ['fromOptions'],
	        ])


        ;

        return $cptOffers->build();
    }
}
