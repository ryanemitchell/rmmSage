<?php

namespace App\Options;

use App\Fields\Partials\comboImageWithAltTitle;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionsLogos extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Logos';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'sections-logos';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Logos';

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
        $sectionsLogos = new FieldsBuilder('logos');

        $sectionsLogos
            ->addRepeater('logos', [
                'label' => 'Logos',
                'instructions' => '',
                'required' => 0,
                'min' => 0,
                'max' => 6,
                'layout' => 'block',
                'button_label' => 'Add Logo',

            ])
            ->addFields($this->get(comboImageWithAltTitle::class))
            ->endRepeater();

        return $sectionsLogos->build();
    }
}
