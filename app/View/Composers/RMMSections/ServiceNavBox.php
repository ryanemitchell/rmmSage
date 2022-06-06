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
		$fieldGroupName =  'field_page_template_services_'; // incl

		return [
			/*** phpcs:disa'sharedaboutsection' => ( new RmmSageFunctions() )->rmmGetFields( 'field_sharedaboutsection_aboutfields', 'options' ),ble */


//			'header'            => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_header' ),
//			'linksItems'       => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links' ),
//			'showCTA'          => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_showCTA' ),

			'header'            => $this->getHeader(),
			'linksItems'       =>  (new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links'),
			'showCTA'          => $this->getShowCTA(),

			/*** phpcs:disable */
//			'header'            => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_header', $ancestors ),
//			'linksItems'       => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links', $ancestors ),
//			'showCTA'          => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_showCTA', $ancestors ),


			'ancestors' => get_field_objects(wp_get_post_parent_id()),
			'parentHeader'    => ( new RmmSageFunctions() )->rmmGetFields( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent'],
			'parentMenu'    => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['menu'],
//			'showCTA'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['showCTA'],



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


	/* ==========================================================================
   Get Fields and Groups
   ========================================================================== */



	/**
	 * Returns the  Header from this post if set, if not get from parent.
	 *
	 * @return string
	 */
	public function getHeader()
	{
		if (! empty( (new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_header'))) {
			return  ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_header');
		} elseif (! empty( ( new RmmSageFunctions() )->rmmGetFields( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['header'])) {
			return ( ( new RmmSageFunctions() )->rmmGetFields( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['header']);
		} else {
			return '';
		}
	}

	/**
	 * Returns the  CTA from this post if set, if not get from parent.
	 *
	 * @return boolean
	 */
	public function getShowCTA()
	{
		if (! empty( (new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_showCTA'))) {
			return  ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_showCTA');
		} elseif (! empty( ( new RmmSageFunctions() )->rmmGetFields( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['showCTA'])) {
			return ( ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['showCTA']);
		} else {
			return [];
		}
	}

	/**
	 * Returns the  CTA from this post if set, if not get from parent.
	 *
	 * @return boolean
	 */
	public function getMenu()
	{
		if (! empty( (new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links'))) {
			return  ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionCityPageMainContent_sectionContent_mainSidebar_sectionServiceNavBox_links');
		} elseif (! empty( ( new RmmSageFunctions() )->rmmGetFields( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['menu'])) {
			return ( ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'field_page_template_services_sectioncenteredmenu_group', wp_get_post_parent_id() )['sectionContent']['menu']);
		} else {
			return [];
		}
	}






}


