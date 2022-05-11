<?php

namespace App\Options;

use App\Fields\Partials\SocialLinks;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SiteSettingsSocialMedia extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Social Media';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'social-media';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Social Links';

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
        return __('Social Media Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $socialMedia = new FieldsBuilder('social_media');

        $socialMedia
            ->addRepeater('social_links', [
                'label' => 'Social Links',
                'instructions' => '',
                'required' => 0,
                'collapsed' => 'site_name',
                'layout' => 'block',
                'button_label' => 'Add Site',


            ])
            ->addText('site_name', [
                'label' => 'Site Name',
                'required' => 1,
                'wrapper' => [
                    'width' => '75%',
                ],
            ])

            ->addTrueFalse('is_active', [
                'label' => 'Is Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Not Active',
                'wrapper' => [
                    'width' => '25%',
                ],
            ])

            ->addUrl('site_URL', [
                'label' => 'Site URL',
                'required' => 1,
            ])


            ->addImage('default_icon', [
                'label' => 'Default Icon',
                'required' => 1,
                'wrapper' => [
                    'width' => '50%',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'mime_types' => 'jpg,svg,gif,png',
            ])

            ->addImage('hover_icon', [
                'label' => 'hover Icon',
                'required' => 0,
                'wrapper' => [
                    'width' => '50%',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'mime_types' => 'jpg,svg,gif,png',
            ])



            ->endRepeater();

        return $socialMedia->build();
    }
}
