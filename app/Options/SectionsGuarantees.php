<?php

namespace App\Options;

use App\Fields\Partials\comboImageWithAltTitle;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionsGuarantees extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Guarantees';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'sections-guarantee';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Guarantees';

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
        return __('Guarantees Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionsGuarantees = new FieldsBuilder('guarantees');

        $sectionsGuarantees
	        ->addText('guarantees_tagline', [
		        'label' => 'Guarantee Section Tagline',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->addText('guarantees_header', [
		        'label' => 'Guarantee Section Header',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])

	        ->addImage('guarantees_section_image', [
		        'label' => 'Guarantees Section Image',
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





	        ->addRepeater('guarantees', [
                'label' => 'Guarantees',
                'instructions' => '',
                'required' => 0,
                'min' => 0,
                'max' => 6,
                'layout' => 'block',
                'button_label' => 'Add Guarantee',

            ])


	        ->addText('guarantee_name', [
		        'label' => 'Guarantee Name',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
	        ])



            ->addFields($this->get(comboImageWithAltTitle::class))



	        ->addTextarea('guarantee_description', [
		        'label' => 'Guarantee Description',
		        'instructions' => '',
		        'required' => 0,
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'default_value' => '',
		        'placeholder' => '',
		        'maxlength' => '',
		        'rows' => '',
		        'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
	        ])



            ->endRepeater();

        return $sectionsGuarantees->build();
    }
}
