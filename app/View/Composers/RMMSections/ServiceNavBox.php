<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class ServiceNavBox extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.serviceNavBox'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
	public function with() {
		$sectionName      = 'sectionServiceNavBox'; // include trailing underscore
		$SectionGroupName = $sectionName . '_'; // include trailing underscore
		$ancestors = ( new RmmSageFunctions() )->getAncestors();

		return [
			/*** phpcs:disa'sharedaboutsection' => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' ),ble */


//			'header'            => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_header' ),
//			'linksItems'       => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links' ),
//			'showCTA'          => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_showCTA' ),

			'header'            => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_header', $ancestors ),
			'linksItems'       => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links', $ancestors ),
			'showCTA'          => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_showCTA', $ancestors ),



			//  Styling Fields
			/*** phpcs:disable */
//	        'sectionName'    =>  $sectionName,
//            'className'      => (new RmmSageFunctions() )->rmmGetFields($SectionGroupName.'sectionDisplay_'.'className'),
//            'mobileDisplay'  => (new RmmSageFunctions() )->rmmSetMobileDisplayToggle($SectionGroupName.'sectionDisplay_'.'show_on_desktop'),
//            'desktopDisplay' => (new RmmSageFunctions() )->rmmSetDesktopDisplayToggle($SectionGroupName.'sectionDisplay_'.'show_on_mobile'),

//			'sectionClasses'  => ( new RmmSageFunctions() )->rmmCreateSectionClasses( $sectionName ),

			//	For debugging
			'thisPostsFields' => get_field_objects(),
			'rmsectionFields'  => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox' ),


		];
	}
}
