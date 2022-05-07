<?php

namespace App\Options;

use App\Fields\Partials\comboImageWithAltTitle;
use App\Fields\Partials\fieldLinksRepeater;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionsSharedLocationsNavBox extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Shared Locations Nav Box';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'sections-shared-locations-nav-box';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Shared Locations Nav Box';

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
    public $position = PHP_INT_MAX;

    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent = "wit-sections";

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
        return __('Locations Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionsSharedLocationsNavBox = new FieldsBuilder('sectionsSharedLocationsNavBox');

        $sectionsSharedLocationsNavBox
            ->addGroup('SharedLocationsNavBox', [ 'label' => ''])

	        ->addMessage('message_field', 'This image will be resized to 420px wide if the image provided is wider. The aspect ratio will be maintained. ')
	        ->addFields($this->get(comboImageWithAltTitle::class))


            ->addText('tagline', [
                'label' => 'Tagline',
            ])

            ->addText('header', [
                'label' => 'Header',
            ])

	        ->addFields($this->get( fieldLinksRepeater::class))



	        ->addTrueFalse('showCTA', [
		        'label' => 'Show the CTA?',
		        'default_value' => 1,
		        'ui' => 1,

	        ])


        ;
        return $sectionsSharedLocationsNavBox->build();
    }
}
