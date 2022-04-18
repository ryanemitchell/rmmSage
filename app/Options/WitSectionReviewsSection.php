<?php

namespace App\Options;

use App\Fields\Partials\comboHeaderWithLevels;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class WitSectionReviewsSection extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Reviews Section';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Wit Section Reviews Section | Options';






	/**
	 * The slug of another admin page to be used as a parent.
	 *
	 * @var string
	 */
	public $parent = 'wit-sections';


	/**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $witSectionReviewsSection = new FieldsBuilder('wit_section_reviews_section');

        $witSectionReviewsSection

	        ->addGroup('group_field', [
		        'label' => '',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '100',
			        'class' => 'comboWrapper',
			        'id' => '',
		        ],
		        'layout' => 'block',
		        'sub_fields' => [],
	        ])
	        ->addFields($this->get(comboHeaderWithLevels::class));

        return $witSectionReviewsSection->build();
    }
}
