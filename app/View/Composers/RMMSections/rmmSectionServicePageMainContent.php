<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class RMMSectionServicePageMainContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.pageMainContentSection.rmmSectionServicePageMainContent'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
	    $sectionName =  'rmmSectionServicePageMainContent'; // include trailing underscore
		$SectionGroupName =  $sectionName.'_'; // include trailing underscore
	    $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

        return [
	        /*** phpcs:disable */
	        'topHeader'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_topHeader' ),
	        'topContent'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_topContent' ),
	        'topShowCTA'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_topShowCTA' ),

	        'accordionItems'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_accordion' ),
	        'accordionShowMultiple'     => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionServicePageMainContent_sectionContent_mainContent_showMultiple' ),
	        'accordionOpenFirst'     => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionServicePageMainContent_sectionContent_mainContent_openFirst' ),

	        'bottomHeader'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_bottomHeader' ),
	        'bottomContent'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_bottomContent' ),
	        'bottomShowCTA'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent_mainContent_bottomShowCTA' ),

	        'showLocationsNavBox'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent' )['mainSidebar']['showLocationsNavBox'],
	        'showGuaranteesBox'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent' )['mainSidebar']['showGuaranteesBox'],

	        'showSinglePromoBox'     => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionServicePageMainContent_sectionContent' )['mainSidebar']['sidebarBoxSinglePromotion']['showSinglePromoBox'],

	        'singlePromoHeader'     => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionServicePageMainContent_sectionContent', $ancestors )['mainSidebar']['sidebarBoxSinglePromotion']['header'],
	        'singlePromoDescription'     => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionServicePageMainContent_sectionContent', $ancestors )['mainSidebar']['sidebarBoxSinglePromotion']['description'],
	        'singlePromoShowCTA'     => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionServicePageMainContent_sectionContent', $ancestors )['mainSidebar']['sidebarBoxSinglePromotion']['showCTA'],


	        'singlePromoImage'            => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionServicePageMainContent_sectionContent', $ancestors )['mainSidebar']['sidebarBoxSinglePromotion']['combo_image_with_alt_title']['image'],
	        'singlePromoImageTitle'         => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionServicePageMainContent_sectionContent', $ancestors )['mainSidebar']['sidebarBoxSinglePromotion']['combo_image_with_alt_title']['title'],
	        'singlePromoImageALT'           => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'rmmSectionServicePageMainContent_sectionContent', $ancestors )['mainSidebar']['sidebarBoxSinglePromotion']['combo_image_with_alt_title']['title'],

            //  Styling Fields
	        'sectionName'   => $sectionName,
	        'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),

			//	 For Debugging
//	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $sectionName ),
	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionServicePageMainContent_sectionContent'),

        ];
    }
}
