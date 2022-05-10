<?php

namespace App\View\Composers\RMMSections;

use Roots\Acorn\View\Composer;
use app\lib\RmmSageFunctions;

class SplitContentServices extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'rmmSections.rmmSectionSplitContentServices',
	];


	/**
	 * Data to be passed to view before rendering.
	 *
	 * @return array
	 */

	public function with() {
		$topGroupName     = 'SectionCenteredMenu_group';
		$displayFrom      = ( new RmmSageFunctions() )->rmmGetFields( $topGroupName . '_display_from' );
		$contentGroupName = 'SectionCenteredMenu_group_sectionContent_';
		$stylingGroupName = 'SectionCenteredMenu_group_sectionDisplay_';

		$fieldGroupName   = 'field_page_template_front_page_'; // include trailing underscore
		$sectionName      = 'sectionsplitcontentservices_group'; // ** Lowercase even if defined differently
		$SectionGroupName = $sectionName . '_'; //
		$ancestors        = ( new \app\lib\RmmSageFunctions() )->getAncestors();

//		field_page_template_front_page_sectionsplitcontentservices_group_sectioncontent_sectioncontentleft_tagline

		return [
//          Display Fields
			/*** phpcs:disable */
			'header'  => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentLeft']['header'],
			'tagline' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentLeft']['tagline'],
			'content' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentLeft']['content'],
			'showCTA' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentLeft']['showCTA'],

			'featuredServiceTitle'      => ( new RmmSageFunctions() )->rmmGetFields( 'SectionSplitContentServices_group_sectionContent_sectionContentRight_featuredService_title' ),
//			'featuredServiceTitle'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['title'],
			'featuredServiceLink'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['link'],
			'featuredServiceImage'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['combo_image_with_alt_title']['image'],
			'featuredServiceImageTitle' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['combo_image_with_alt_title']['title'],
			'featuredServiceImageAlt'   => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['combo_image_with_alt_title']['alt'],

			'subService1Title'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['subServiceOneTitle'],
			'subService1Link'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['subServiceOneLink'],

			'subService2Title'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['subServiceTwoTitle'],
			'subService2Link'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['subServiceTwoLink'],

			'subService3Title'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['subServiceThreeTitle'],
			'subService3Link'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['featuredService']['subServiceThreeLink'],

			'serviceOneTitle'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceOne']['title'],
			'serviceOneLink'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceOne']['link'],
			'serviceOneImage'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceOne']['combo_image_with_alt_title']['image'],
			'serviceOneImageTitle' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceOne']['combo_image_with_alt_title']['title'],
			'serviceOneImageAlt'   => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceOne']['combo_image_with_alt_title']['alt'],

			'serviceTwoTitle'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceTwo']['title'],
			'serviceTwoLink'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceTwo']['link'],
			'serviceTwoImage'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceTwo']['combo_image_with_alt_title']['image'],
			'serviceTwoImageTitle' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceTwo']['combo_image_with_alt_title']['title'],
			'serviceTwoImageAlt'   => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceTwo']['combo_image_with_alt_title']['alt'],

			'serviceThreeTitle'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceThree']['title'],
			'serviceThreeLink'       => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceThree']['link'],
			'serviceThreeImage'      => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceThree']['combo_image_with_alt_title']['image'],
			'serviceThreeImageTitle' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceThree']['combo_image_with_alt_title']['title'],
			'serviceThreeImageAlt'   => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['sectionContentRight']['serviceThree']['combo_image_with_alt_title']['alt'],


//			 Deep classes Required because of how ACF Composer creates field IDs
            'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClassesDeep($fieldGroupName . $sectionName),
			'sectionFields' => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName ),

			'testing' => (new RmmSageFunctions() )->rmmGetFields($fieldGroupName . $sectionName)['sectionDisplay'],

		];

	}

}

