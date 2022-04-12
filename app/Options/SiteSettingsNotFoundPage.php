<?php

namespace App\Options;

use App\Fields\Partials\comboHeaderWithLevels;
use App\Fields\Partials\fieldHeaderText;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SiteSettingsNotFoundPage extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Not Found Page';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'site-settings-not-found-page';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Site Settings  - Not Found Page';

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
        return __('Site Settings Not Found Page Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $siteSettingsNotFoundPage = new FieldsBuilder('site_settings_not_found_page');

        $siteSettingsNotFoundPage
	        ->addText('notfound_title', [
		        'label' => 'Not Found Title',
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



	        ->addSelect('notFound_html_element', [
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

	        ->addWysiwyg('notFound_content', [
		        'label' => 'Not Found Content',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '<h2 style="text-align: center;">Page Not Found</h2>
									<p style="text-align: center;">Sorry, we can’t find the page you’re looking for. Questions? Give us a call!</p>',
		        'tabs' => 'all',
		        'toolbar' => 'full',
		        'media_upload' => 1,
		        'delay' => 0,
	        ])



        ;

        return $siteSettingsNotFoundPage->build();
    }
}
