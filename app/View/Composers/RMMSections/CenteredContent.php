<?php

namespace App\View\Composers\RMMSections;

use Roots\Acorn\View\Composer;
use app\lib\RmmSageFunctions;

class CenteredContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.centeredContent',
    ];


    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */

    public function with()
    {
        $topGroupName =  'SectionCenteredContent_group';
        $ancestors = ( new RmmSageFunctions() )->getAncestors();
        $displayFrom = (new RmmSageFunctions() )->rmmGetFields($topGroupName.'_display_from');
        $contentGroupName =  'SectionCenteredContent_group_sectionContent_';
        $stylingGroupName =  'SectionCenteredContent_group_sectionDisplay_';




	    $fieldGroupName =  'field_page_template_services_'; // include trailing underscore
	    $sectionName =  'sectioncenteredcontent_group'; // ** Lowercase even if defined differently
	    $SectionGroupName =  $sectionName.'_'; //
	    $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

        return [
//          Display Fields
			'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),

            // Content Groups
            /* ===  Section Content  ==== */

//	        field_page_template_services_sectioncenteredcontent_group_sectioncontent_list_with_options_list_items_listitem_name

            /*** phpcs:disable */
            'header'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['header'],
            'content'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['content'],

            'listItems'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['list_with_options']['list_items'],
            'listStyle'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['list_with_options']['list_style'],
            'listDesktopColumns'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['list_with_options']['listDesktopColumns'],
            'listMobileColumns'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['list_with_options']['listMobileColumns'],

            'showCTA'    => ( new RmmSageFunctions() )->rmmGetFields( $fieldGroupName . $sectionName )['sectionContent']['showCTA'],
            /** phpcs:enable */
        ];
    }
}
