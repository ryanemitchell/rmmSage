<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class rmmSectionCityPageMainContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.rmmSectionCityPageMainContent'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
	    $sectionName =  'rmmSectionCityPageMainContent'; // include trailing underscore
		$SectionGroupName =  $sectionName.'_'; // include trailing underscore

        return [
	        /*** phpcs:disable */
	        'topHeader'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_topHeader' ),
	        'topContent'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_topContent' ),
	        'topShowCTA'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_topShowCTA' ),

	        'accordionItems'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_accordion' ),
	        'accordionShowMultiple'     => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionCityPageMainContent_sectionContent_mainContent_showMultiple' ),
	        'accordionOpenFirst'     => ( new RmmSageFunctions() )->rmmGetTrueFalseField( 'rmmSectionCityPageMainContent_sectionContent_mainContent_openFirst' ),

	        'bottomHeader'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_bottomHeader' ),
	        'bottomContent'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_bottomContent' ),
	        'bottomShowCTA'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent_mainContent_bottomShowCTA' ),

	        'showLocationsNavBox'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent' )['mainSidebar']['showLocationsNavBox'],
	        'showGuaranteesBox'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent' )['mainSidebar']['showGuaranteesBox'],

            //  Styling Fields
	        'sectionName'   => $sectionName,
	        'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),

			//	 For Debugging
//	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $sectionName ),
	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionCityPageMainContent_sectionContent'),

        ];
    }
}
