<?php

namespace App\View\Composers\MaintenancePlan;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class planBenefits extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
       'rmmSections.maintenancePlan.planBenefits'
    ];



    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
	public function with()

	{
		$fieldGroupName =  'field_page_template_maintenance_plan_'; // include trailing underscore
		$sectionName =  'planbenefits'; // ** Lowercase even if defined differently
		$SectionGroupName =  $sectionName.'_'; //
		$ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

		return [
			/*** phpcs:disable */
//			'tagline'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['tagline'],
			'header'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['header'],
//			'showCTA'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['showCTA'],
//			'content'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['content'],

//			'image' 	 => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['combo_image_with_alt_title']['image'],
//			'imageTitle' 	 => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['combo_image_with_alt_title']['title'],
//			'imageALT' 	 => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['combo_image_with_alt_title']['alt'],

//			Repeater
			'benefits' 	 => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['benefits'],

//			//  Styling Fields
//			'sectionName'   => $sectionName,
//			'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),
//
//			//	 For Debugging
////	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $sectionName ),
			'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName ),

		];
	}
}



