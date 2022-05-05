<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class RmmSectionSharedReviews extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'rmmSections.rmmSectionSharedReviews'
	];

	/**
	 * Data to be passed to view before rendering.
	 *
	 * @return array
	 */
	public function with() {
		$sectionName      = 'rmmSectionSharedReviews'; // include trailing underscore
		$SectionGroupName = $sectionName . '_'; // include trailing underscore

		return [
			/*** phpcs:disable */
			'sharedreviewssection' => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedreviewssection_reviewsectionfields', 'options' ),
			'reviewsShortcode'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedreviewssection_reviewsectionfields', 'options' )['reviewsShortcode'],
			'header'             => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedreviewssection_reviewsectionfields', 'options' )['header'],

			//  Styling Fields
			/*** phpcs:disable */
//	        'sectionName'    =>  $sectionName,
//            'className'      => (new RmmSageFunctions() )->rmmGetFields($SectionGroupName.'sectionDisplay_'.'className'),
//            'mobileDisplay'  => (new RmmSageFunctions() )->rmmSetMobileDisplayToggle($SectionGroupName.'sectionDisplay_'.'show_on_desktop'),
//            'desktopDisplay' => (new RmmSageFunctions() )->rmmSetDesktopDisplayToggle($SectionGroupName.'sectionDisplay_'.'show_on_mobile'),

			'sectionClasses'  => ( new RmmSageFunctions() )->rmmCreateSectionClasses( $sectionName ),

			//	For debugging
			'thisPostsFields' => get_field_objects(),


		];
	}
}
