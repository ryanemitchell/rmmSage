<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class cptOffersSharedFields extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $cptOffersSharedFields = new FieldsBuilder('cpt_offers_shared_fields');

        $cptOffersSharedFields
	        ->addImage('offer_image', [
		        'label' => 'Offer Image',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'return_format' => 'url',
		        'preview_size' => 'thumbnail',
		        'library' => 'all',
		        'min_width' => '',
		        'min_height' => '',
		        'min_size' => '',
		        'max_width' => '',
		        'max_height' => '',
		        'max_size' => '',
		        'mime_types' => '',
	        ])






	        ->addWysiwyg('offer_cta', [
		        'label' => 'Call to Action',
		        'instructions' => 'The call to action that is shown in every offers.<br>',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'tabs' => 'text',
		        'toolbar' => 'full',
		        'media_upload' => 0,
		        'delay' => 1,
	        ])

	        ->addText('offer_disclaimer', [
		        'label' => 'Offer Disclaimer',
		        'instructions' => 'This is shared with all offers, but can be overwritten in indvidual offers if necessary.',
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

	        ->addText('offer_expiration_text', [
		        'label' => 'Offer Expiration Text',
		        'instructions' => 'This is shared with all offers, but can be overwritten in indvidual offers if necessary.',
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





	        ->addSelect('offer_expiration', [
		        'label' => 'Offer Expiration',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'choices' => [
			        'noExpiration' => 'No Expration',
			        'twoWeeks' => '2 Weeks from date of visit',
			        'endOfTheMonth' => 'Last day Current Month from date of visit',
			        'endOfNextMonth' => 'Last the Next Month from date of visit',
			        'threeMonths' => 'Last Day of 3 Months from date of visit',
			        'sixMonths' => 'Last Day of 6 Months from date of visit',
		        ],
		        'default_value' => ['noExpiration'],
		        'allow_null' => 0,
		        'multiple' => 0,
		        'ui' => 0,
		        'ajax' => 0,
		        'return_format' => 'value',
		        'placeholder' => '',
	        ]);

        return $cptOffersSharedFields;
    }
}
