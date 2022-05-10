<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class RmmSectionSharedAbout extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'rmmSections.rmmSectionSharedAbout'
	];

	/**
	 * Data to be passed to view before rendering.
	 *
	 * @return array
	 */
	public function with() {
		$sectionName      = 'rmmSectionSharedAbout'; // include trailing underscore
		$SectionGroupName = $sectionName . '_'; // include trailing underscore

		return [
			/*** phpcs:disable */
			'sharedaboutsection' => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' ),
			'tagline'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['tagline'],
			'header'             => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['header'],
			'content'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['content'],
			'videoID'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['videoID'],
			'image'              => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['combo_image_with_alt_title']['image'],
			'imageURL'           => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['combo_image_with_alt_title']['image']['url'],
			'imageTitle'         => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['combo_image_with_alt_title']['title'],
			'imageALT'          => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' )['combo_image_with_alt_title']['title'],


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
