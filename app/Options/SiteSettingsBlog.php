<?php

namespace App\Options;

use App\Fields\Partials\comboHeaderWithLevels;
use App\Fields\Partials\comboImageWithAltTitle;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SiteSettingsBlog extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Blog';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'site-settings-blog';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Site Settings - Blog';

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
        return __('Site Settings Blog Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $siteSettingsBlog = new FieldsBuilder('site_settings_blog');

        $siteSettingsBlog
	        ->addText('blog_title', [
		        'label' => 'Blog Title',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [

			        'class' => 'acfHeaderText',
			        'id' => '',
		        ],
		        'default_value' => 'Page Not Found',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])



	        ->addSelect('blog_html_element', [
		        'label' => 'Element',
		        'instructions' => '',
		        'required' => 1,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => 'acfHTMLElements',
			        'id' => '',
		        ],
		        'choices' => [
			        'h1' => 'H1',
			        'h2' => 'H2',
			        'h3' => 'H3',
			        'h4' => 'H4',
			        'div' => 'div',
			        'span' => 'span',
			        'p' => 'P',
		        ],
		        'default_value' => ['h2'],
		        'allow_null' => 0,
		        'multiple' => 0,
		        'ui' => 0,
		        'ajax' => 0,
		        'return_format' => 'value',
		        'placeholder' => '',
	        ])
	        ->addImage('default_FeaturedImage', [
		        'label' => 'Default Fetatured Image',
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

	        ->addText('default_FeaturedImage_alt', [
		        'label' => 'Alt',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '50',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->addText('default_FeaturedImage_title', [
		        'label' => 'Title',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '50',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ]);

        return $siteSettingsBlog->build();
    }
}
