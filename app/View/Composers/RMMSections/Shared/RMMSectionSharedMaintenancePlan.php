<?php

namespace App\View\Composers\RMMSections\Shared;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class RMMSectionSharedMaintenancePlan extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
	    'rmmSections.shared.RMMSectionSharedMaintenancePlan'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
	public function with() {
		$sectionName      = 'sharedMaintenancePlan'; // include trailing underscore
		$SectionGroupName = $sectionName . '_'; // include trailing underscore

		return [
			/*** phpcs:disa'sharedaboutsection' => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' ),ble */

//			'tagline'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sectionssharedlocationsnavbox_sharedlocationsnavbox', 'options' )['tagline'],
			'header'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedmaintenanceplan_maintenanceplanfields', 'options' )['header'],
			'content'            => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedmaintenanceplan_maintenanceplanfields', 'options' )['content'],

			'image'            => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'field_sharedmaintenanceplan_maintenanceplanfields','options')['combo_image_with_alt_title']['image'],
			'imageTitle'         => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedmaintenanceplan_maintenanceplanfields', 'options' )['combo_image_with_alt_title']['title'],
			'imageALT'           => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedmaintenanceplan_maintenanceplanfields', 'options' )['combo_image_with_alt_title']['title'],
//

			//  Styling Fields
			/*** phpcs:disable */
//	        'sectionName'    =>  $sectionName,
//            'className'      => (new RmmSageFunctions() )->rmmGetFields($SectionGroupName.'sectionDisplay_'.'className'),
//            'mobileDisplay'  => (new RmmSageFunctions() )->rmmSetMobileDisplayToggle($SectionGroupName.'sectionDisplay_'.'show_on_desktop'),
//            'desktopDisplay' => (new RmmSageFunctions() )->rmmSetDesktopDisplayToggle($SectionGroupName.'sectionDisplay_'.'show_on_mobile'),

//			'sectionClasses'  => ( new RmmSageFunctions() )->rmmCreateSectionClasses( $sectionName ),

			//	For debugging
//			'thisPostsFields' => get_field_objects(),
			'MaintenancePlanFields'  =>  ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedmaintenanceplan_maintenanceplanfields', 'options' ),


		];
	}
}

