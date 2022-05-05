<?php

namespace app\View\Composers\RMMSections\ServicePageMain;

use Roots\Acorn\View\Composer;

class ServicePageMain extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
//        'rmmSections.pageMainContentSection.pageMainContentSection',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();


        return [
//          Display Fields
            'className'      => $this->getClassName(),
            'mobileDisplay'  => $this->getMobileDisplay(),
            'desktopDisplay' => $this->getDesktopDisplay(),
        ];
    }


    /* ==========================================================================
       Get Fields and Groups
       ========================================================================== */

    /**
     * Returns string for use as classname
     *
     * @return string
     */

    public function getClassName(): string
    {
        if (! empty($this->getDisplayGroup()['class_name'])) {
            return $this->getDisplayGroup()['class_name'];
        } else {
            return '';
        }
    }

    /**
     * Returns the styling group for this section
     *
     * @return array
     */


    public function getDisplayGroup(): array
    {
        if (! empty(get_field('field_page_template_services_sectionmainservicessection_group')['sectionDisplay'])) {
            return get_field('field_page_template_services_sectionmainservicessection_group')['sectionDisplay'];
        } else {
            return [];
        }
    }

    /**
     * Returns tailwind visibility class for mobile
     *
     * @return string
     */

    public function getMobileDisplay(): string
    {
        if ($this->getDisplayGroup()['show_on_mobile']) :
            $mobileDisplay = 'block';
        else :
            $mobileDisplay = 'hidden';
        endif;

        return $mobileDisplay;
    }

    /**
     * Returns the styling group for this section **NOT YET USED **
     *
     * @return array
     */

//    public function getStylingGroup()
//    {
//        return get_field('RMMSectionStarterCopy_group')['sectionStyling'];
//    }

    /**
     * Returns tailwind visibility class for desktop
     *
     * @return string
     */

    public function getDesktopDisplay(): string
    {
        if ($this->getDisplayGroup()['show_on_desktop']) :
            $desktopDisplay = 'lg:block';
        else :
            $desktopDisplay = 'lg:hidden';
        endif;

        return $desktopDisplay;
    }




    /* ==========================================================================
       Display Fields
       ========================================================================== */

    /**
     * Returns Array of Ancestors for the current post
     *
     * @return string
     */

    public function getAncestors(): string
    {
        return ( new \app\lib\RmmSageFunctions() )->getAncestors();
    }

    /**
     * Returns top level group for this section
     *
     * @return array
     */
    public function getField(): array
    {
        return get_field('RMMSectionStarterCopy_group');
    }
}
