<?php

namespace App\View\Composers\RMMSections;

use Roots\Acorn\View\Composer;
use app\lib\RmmSageFunctions;

class CenteredMenu extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.centeredMenu',
    ];


    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */

    public function with()
    {
        $topGroupName =  'SectionCenteredMenu_group';
        $displayFrom = (new RmmSageFunctions() )->rmmGetFields($topGroupName.'_display_from');
        $contentGroupName =  'SectionCenteredMenu_group_sectionContent_';
        $stylingGroupName =  'SectionCenteredMenu_group_sectionDisplay_';

	    $fieldGroupName =  'field_page_template_services_'; // include trailing underscore
	    $sectionName =  'sectioncenteredmenu_group'; // ** Lowercase even if defined differently
	    $SectionGroupName =  $sectionName.'_'; //
	    $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();



        return [
//          Display Fields
//	        'header'    => ( new RmmSageFunctions() )->rmmGetFields( 'field_page_template_services_sectioncenteredmenu_group_sectioncontent_header' ),
	        'header'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['header'],
	        'menu'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['menu'],
	        'showCTA'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['showCTA'],
//            'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),
//
//            // Content Groups
//            /* ===  Section Content  ==== */
//
//            /*** phpcs:disable */
//            'menu' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'menu', $displayFrom, $ancestors),
//            'headerText' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'header_text', $displayFrom, $ancestors),
//            'headerElement' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'header_element', $displayFrom, $ancestors),
//            'footerText' =>(new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'footer_text', $displayFrom, $ancestors),
//            /** phpcs:enable */


	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName ),

        ];

    }

}
