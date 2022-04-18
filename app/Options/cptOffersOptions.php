<?php

namespace App\Options;

use App\Fields\Partials\cptOffersSharedFields;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class cptOffersOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Offers Options';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'offers-options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Offers Options';

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
    public $parent = 'edit.php?post_type=offers';

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
        return __('Offers Options Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $cptOffersOptions = new FieldsBuilder('offers_options');






        $cptOffersOptions


            ->addMessage('message_field', 'message', [
                'label' => 'About these Settings',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'message' => 'These are all defaults and can be overwritten within each individual offer. <br> Depending on the specific site there may be different presentation for each field. <br> Always check the frontend after making any edits.',
                'new_lines' => 'wpautop', // 'wpautop', 'br', '' no formatting
                'esc_html' => 0,
            ])



            ->addFields($this->get(cptOffersSharedFields::class));




        ;

        return $cptOffersOptions->build();
    }
}
