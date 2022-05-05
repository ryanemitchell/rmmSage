<?php

namespace App\Options;

use App\Fields\Partials\comboHeaderWithLevels;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionsSharedReviews extends Field
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
        $sectionsSharedReviews = new FieldsBuilder('sharedReviewsSection');

        $sectionsSharedReviews

	        ->addGroup('reviewSectionFields', [ 'label' => ''])
	        ->addText('header', [
		        'label' => 'Header',
	        ])

		    ->addText('reviewsShortcode', [
		    'label' => 'Review Shortcode',
	    ]);

        return $sectionsSharedReviews->build();
    }
}
