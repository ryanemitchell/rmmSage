<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class locationInformation extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $businessInformation = new FieldsBuilder('business_information');

        $businessInformation
            ->addText('location_name', [
                'label' => 'Location Name',
                'instructions' => '',
                'default_value' => 'Business Name',
            ])

            ->addText('primary_phone', [
            'label' => 'Primary Phone Number',
            'instructions' => 'Only numbers. Include the country code',
            'default_value' => '11234567890',
            'wrapper' => [
                'width' => '50%',
                'class' => '',
                'id' => '',
            ],
            ])


            ->addText('primary_phone_display', [
                'label' => 'Primary Number to Display',
                'instructions' => 'Formatted phone number',
                'default_value' => '(123) 456-7890',
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
            ])

            ->addText('business_address', [
                'label' => 'Business Address',
                'instructions' => '',
                'default_value' => '123 Main Street',
            ])

            ->addText('business_address_line_2', [
                'label' => 'Business Address Line 2',
                'instructions' => '',
                'default_value' => 'Suite 987',
            ])

            ->addText('business_city', [
                'label' => 'Business City',
                'instructions' => '',
                'default_value' => 'Anytown',
                'wrapper' => [
                    'width' => '33%',
                    'class' => '',
                    'id' => '',
                ],
            ])

            ->addText('business_state', [
                'label' => 'Business State',
                'instructions' => '',
                'default_value' => 'MyState',
                'wrapper' => [
                    'width' => '33%',
                    'class' => '',
                    'id' => '',
                ],
            ])

            ->addText('business_zip_code', [
                'label' => 'Business Zip Code',
                'instructions' => '',
                'default_value' => '98765',
                'wrapper' => [
                    'width' => '33%',
                    'class' => '',
                    'id' => '',
                ],
            ])

            ->addUrl('business_link', [
                'label' => 'Address Link',
                'instructions' => 'URL that the address will link to',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => 'https://google.com',
                'placeholder' => '',
            ]);








        ;


        return $businessInformation;
    }
}
