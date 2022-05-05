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
        $ancestors = ( new RmmSageFunctions() )->getAncestors();
        $displayFrom = (new RmmSageFunctions() )->rmmGetFields($topGroupName.'_display_from');
        $contentGroupName =  'SectionCenteredMenu_group_sectionContent_';
        $stylingGroupName =  'SectionCenteredMenu_group_sectionDisplay_';

        return [
//          Display Fields
            'className'      => (new RmmSageFunctions() )->rmmGetFields($stylingGroupName.'class_name'),
            'mobileDisplay'  => (new RmmSageFunctions() )->rmmSetDisplayToggle($stylingGroupName.'show_on_mobile'),
            'desktopDisplay' => (new RmmSageFunctions() )->rmmSetDisplayToggle($stylingGroupName.'show_on_desktop'),
            'sectionGroup' => (new RmmSageFunctions() )->rmmGetFields($topGroupName),

            // Content Groups
            /* ===  Section Content  ==== */

            /*** phpcs:disable */
            'menu' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'menu', $displayFrom, $ancestors),
            'headerText' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'header_text', $displayFrom, $ancestors),
            'headerElement' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'header_element', $displayFrom, $ancestors),
            'footerText' =>(new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'footer_text', $displayFrom, $ancestors),
            /** phpcs:enable */
        ];
    }
}
