<?php

namespace App\Options;

use App\Fields\Partials\scripts;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class InsertScripts extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Insert Scripts';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'insert-scripts';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Insert Scripts';

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
    public $position = '10';

    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent ='site-settings';

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
        return __('Insert Scripts Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $insertScripts = new FieldsBuilder('insert_scripts');

        $insertScripts
	        ->addFields($this->get(scripts::class))


	     ;

        return $insertScripts->build();
    }
}
