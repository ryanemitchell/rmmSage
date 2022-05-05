<?php

namespace App\Options;

use App\Fields\Partials\locationInformation;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SiteSettingsBusinessInformation extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Business Information';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'business-information';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Business Information';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';

    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = '0';

    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent = 'site-settings';

    /**
     * The option page menu icon.
     *
     * @var string
     */
    public $icon = null;

    /**
     * Redirect to the first child page if one exists.
     *
     * @var boolean
     */
    public $redirect = true;

    /**
     * The post ID to save and load values from.
     *
     * @var string|int
     */
    public $post = 'options';

    /**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;

    /**
     * Localized text displayed on the submit button.
     *
     * @return string
     */
    public function updateButton()
    {
        return __('Update', 'acf');
    }

    /**
     * Localized text displayed after form submission.
     *
     * @return string
     */
    public function updatedMessage()
    {
        return __('Business Information Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $businessInformation = new FieldsBuilder('business_information');

        $businessInformation
            ->addText('business_name', [
                'label' => 'Business Name',
                'instructions' => '',
                'default_value' => 'Business Name',
            ])

	        ->addText('business_email', [
		        'label' => 'Business Email',
		        'instructions' => '',
		        'default_value' => 'username@domain.com',
	        ])


            ->addTextarea('hours_information', [
                'label' => 'Hours Information',
                'instructions' => '',
                'default_value' => 'Business Name',
                'new_lines' => '<br>',
                'rows' => '4'
            ])



            ->addTextarea('license_information', [
                'label' => 'License Information',
                'instructions' => '',
                'default_value' => 'ABCDEFG-123456789',
                'new_lines' => '<br>',
                'rows' => '3'
            ])

            ->addGroup('witsage_primary_location', [
                'label' => 'Primary Business Location',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => 'acfGroup acfGroup_dark acfGroup_primary_location',
                    'id' => '',
                ],
                'layout' => 'block',
                'sub_fields' => ['witsage_business_zip_code'],
            ])
            ->addFields($this->get(locationInformation::class))
            ->endGroup()

            ->addGroup('witsage_secondary_location', [
                'label' => 'Secondary Location',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => 'acfGroup acfGroup_light acfGroup_secondary_location',
                    'id' => '',
                ],
                'layout' => 'block',
                'sub_fields' => ['witsage_business_zip_code'],
            ])
            ->addFields($this->get(locationInformation::class))
            ->endGroup()
        ;

        return $businessInformation->build();
    }
}
