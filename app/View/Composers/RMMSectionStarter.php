<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Roots\Acorn\View\Composer;

class RMMSectionStarter extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.rmmSectionStarter',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {

        return [
//          Display Fields
            'className'      => $this->getClassName(),
            'mobileDisplay'  => $this->getMobileDisplay(),
            'desktopDisplay' => $this->getDesktopDisplay(),
//          Section Specific Fields
            'placeholderField' => $this->getPlaceholderField(),

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
        if (!empty($this->getDisplayGroup()['class_name'])) {
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
        if (!empty(get_field('RMMSectionStarter_group')['sectionDisplay'])) {
            return get_field('RMMSectionStarter_group')['sectionDisplay'];
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
//        return get_field('RMMSectionStarter_group')['sectionStyling'];
//    }

    /* ==========================================================================
       Display Fields
       ========================================================================== */

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

    /**
     * Returns top level group for this section
     *
     * @return array
     */
    public function getField(): array
    {
        return get_field('RMMSectionStarter_group');
    }

    /**
     * Returns the content group containing ACF fields for this section
     *
     * @return array
     */
    public function getContentGroup(): array
    {
        if (!empty(get_field('RMMSectionStarter_group')['sectionContent'])) {
            return get_field('RMMSectionStarter_group')['sectionContent'];
        } else {
            return [];
        }
    }



    /* ==========================================================================
       Get Section Specific Content Fields
       ========================================================================== */

    public function getPlaceholderField(): string
    {
        if (!empty($this->getContentGroup()['placeholder_field'])) {
            return $this->getContentGroup()['placeholder_field'];
        } else {
            return '';
        }
    }



}
