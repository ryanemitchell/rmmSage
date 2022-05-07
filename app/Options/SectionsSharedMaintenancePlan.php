<?php

namespace App\Options;

use App\Fields\Partials\comboImageWithAltTitle;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionsSharedMaintenancePlan extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Shared Maintenance Plan';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'sections-shared-maintenance-club';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Shared Maintenance Plan';

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
        return __('Logos Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionsSharedMaintenancePlan = new FieldsBuilder('sharedMaintenancePlan');

        $sectionsSharedMaintenancePlan
            ->addGroup('MaintenancePlanFields', [ 'label' => ''])

	        ->addMessage('Inage Notes:', 'Check the front end after changing this image. It may require resizing to lay out properly in the design. Check desktop and mobile.')
	        ->addFields($this->get(comboImageWithAltTitle::class))

            ->addText('header', [
                'label' => 'Header',
            ])

            ->addWysiwyg('content', [
                'label' => 'About Content',
            ])

        ;
        return $sectionsSharedMaintenancePlan->build();
    }
}
