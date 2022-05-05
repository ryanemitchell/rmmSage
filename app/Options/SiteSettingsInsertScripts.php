<?php

namespace App\Options;

use App\Fields\Partials\scripts;
use App\Fields\Partials\settingsScripts;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SiteSettingsInsertScripts extends Field
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
    public $position = '0';

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
	        /* ===  Additional Header Code  ==== */
                ->addTextarea('additional_header_code', [
                    'label' => 'Additional Header Code',
                    'instructions' => "This code will appear LAST inside the sites HEAD section. Before the BODY tag. <br> Uses do_action( 'wp_head' )'",
                    'rows' => '10',
                    'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
                    'wrapper' => [
                        'width' => '75%',
                    ],
                ])

                ->addTrueFalse('additional_header_code_active', [
                    'label' => 'Header Code Active',
                    'instructions' => '',
                    'required' => 0,
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => 'Active',
                    'ui_off_text' => 'Off',
                    'wrapper' => [
                        'width' => '25%',
                    ],
                ])

                /* ===  After Opening Body Code  ==== */
                ->addTextarea('after_opening_body_code', [
                    'label' => 'After Opening Body Code',
                    'instructions' => "This code will appear just after the opening BODY tag.<br> Uses do_action( 'wp_body_open' )",
                    'rows' => '10',
                    'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
                    'wrapper' => [
                        'width' => '75%',
                    ],
                ])

                ->addTrueFalse('after_opening_body_code_active', [
                    'label' => 'Body Code Active',
                    'instructions' => '',
                    'required' => 0,
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => 'Active',
                    'ui_off_text' => 'Off',
                    'wrapper' => [
                        'width' => '25%',
                    ],
                ])

                /* ===  Footer Body Code  ==== */
                ->addTextarea('additional_footer_code', [
                    'label' => 'Additional Footer Code',
                    'instructions' => "This code will appear LAST, just before the closing BODY tag.<br> Uses do_action( 'wp_footer' )",
                    'rows' => '10',
                    'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
                    'wrapper' => [
                        'width' => '75%',
                    ],
                ])

                ->addTrueFalse('additional_footer_code_active', [
                    'label' => 'Footer Code Active',
                    'instructions' => '',
                    'required' => 0,
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => 'Active',
                    'ui_off_text' => 'Off',
                    'wrapper' => [
                        'width' => '25%',
                    ],
                ])


         ;

        return $insertScripts->build();
    }
}
