<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Roots\Acorn\View\Composer;
use app\lib\RmmSageFunctions;

class RMMSectionServicePageMainLinkBox extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
//	    'rmmSections.pageMainContentSection.linkBox',
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
            'RMMSectionStarterCopy_content'           => $this->getContentGroup(),
            'RMMSectionStarterCopy_ancestors' => ( new \app\lib\RmmSageFunctions() )->getAncestors(),
            'contentGroup' => $this->getContentGroup(),
//          Section Specific Fields

            'locations' => $this->getLinks(),
            'headerImage' => $this->getHeaderImage(),
            'header' => $this->getHeader(),
            'headerElement' => $this->getHeaderElement(),
            'subHeader' => $this->getSubHeader(),
            'subHeaderElement' => $this->getSubHeaderElement(),
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
        if (!empty(get_field('RMMSectionStarterCopy_group')['sectionDisplay'])) {
            return get_field('RMMSectionStarterCopy_group')['sectionDisplay'];
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
     * Returns Array of Ancestors for the current post
     *
     * @return string
     */

    public function getAncestors(): string
    {
        return ( new \app\lib\RmmSageFunctions() )->getAncestors();
    }




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
        return get_field('RMMSectionStarterCopy_group');
    }

    /**
     * Returns the content group containing ACF fields for this section
     *
     * @return array
     */
    public function getContentGroup($id = ''): array
    {
        if (!empty(get_field('RMMSectionStarterCopy_group', $id)['sectionContent'])) {
            return get_field('RMMSectionStarterCopy_group', $id)['sectionContent'];
        } else {
            return [];
        }
    }



    /* ==========================================================================
       Get Section Specific Content Fields
       ========================================================================== */

    /**
     * Returns Header Text from this post or closest parent
     *
     * @return array
     */

    public function getHeaderImage()
    {
//       Check where to get the fields from.  This post, the closest parent or null
        if (!empty($this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'])) :
            $displayFrom = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'];
        else :
            $displayFrom = [];
        endif;


        switch ($displayFrom) :
            case "on":
                $headerImage = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['image_group']['image'];
                break;
            case "parent":
// Get this posts ancestors
                $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

                foreach ($ancestors as $ancestor) {
//          Get the location links from the closest ancestor the break and return
                    if ($this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['image_group']['image']) {
                        $headerImage = $this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['image_group']['image'];
                        break;
                    } else {
//               Return Empty Array if all ancestors are empty (for now)
                        $headerImage = [];
                    }
                }

                break;
            case "off":
                $headerImage = [];
                break;
            default:
                $headerImage = [];
        endswitch;

        return $headerImage;
    }






    /**
     * Returns Header Text from this post or closest parent
     *
     * @return array
     */

    public function getHeader()
    {
//       Check where to get the fields from.  This post, the closest parent or null
        if (!empty($this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'])) :
            $displayFrom = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'];
        else :
            $displayFrom = [];
        endif;


        switch ($displayFrom) :
            case "on":
                $header = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['headers_group']['header_text'];
                break;
            case "parent":
// Get this posts ancestors
                $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

                foreach ($ancestors as $ancestor) {
//          Get the location links from the closest ancestor the break and return
                    if ($this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['header_text']) {
                        $header = $this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['header_text'];
                        break;
                    } else {
//               Return Empty Array if all ancestors are empty (for now)
                        $header = [];
                    }
                }

                break;
            case "off":
                $header = [];
                break;
            default:
                $header = [];
        endswitch;

        return $header;
    }


    /**
     * Returns Header Element from this post or closest parent
     *
     * @return array
     */

    public function getHeaderElement()
    {
//       Check where to get the fields from.  This post, the closest parent or null
        if (!empty($this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'])) :
            $displayFrom = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'];
        else :
            $displayFrom = [];
        endif;


        switch ($displayFrom) :
            case "on":
                $headerElement = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['headers_group']['header_element'];
                break;
            case "parent":
// Get this posts ancestors
                $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

                foreach ($ancestors as $ancestor) {
//          Get the location links from the closest ancestor the break and return
                    if ($this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['header_element']) {
                        $headerElement = $this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['header_element'];
                        break;
                    } else {
//               Return Empty Array if all ancestors are empty (for now)
                        $headerElement = ['div'];
                    }
                }

                break;
            case "off":
                $headerElement = [];
                break;
            default:
                $headerElement = [];
        endswitch;

        return $headerElement;
    }

    /**
     * Returns SubHeader Text from this post or closest parent
     *
     * @return array
     */

    public function getSubHeader()
    {
//       Check where to get the fields from.  This post, the closest parent or null
        if (!empty($this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'])) :
            $displayFrom = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'];
        else :
            $displayFrom = [];
        endif;


        switch ($displayFrom) :
            case "on":
                $subheader = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['headers_group']['subheader_text'];
                break;
            case "parent":
// Get this posts ancestors
                $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

                foreach ($ancestors as $ancestor) {
//          Get the location links from the closest ancestor the break and return
                    if ($this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['subheader_text']) {
                        $subheader = $this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['subheader_text'];
                        break;
                    } else {
//               Return Empty Array if all ancestors are empty (for now)
                        $subheader = [];
                    }
                }

                break;
            case "off":
                $subheader = [];
                break;
            default:
                $subheader = [];
        endswitch;

        return $subheader;
    }


    /**
     * Returns Header Element from this post or closest parent
     *
     * @return array
     */

    public function getSubHeaderElement()
    {
//       Check where to get the fields from.  This post, the closest parent or null
        if (!empty($this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'])) :
            $displayFrom = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'];
        else :
            $displayFrom = [];
        endif;


        switch ($displayFrom) :
            case "on":
                $subheaderElement = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['headers_group']['subheader_element'];
                break;
            case "parent":
// Get this posts ancestors
                $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

                foreach ($ancestors as $ancestor) {
//          Get the location links from the closest ancestor the break and return
                    if ($this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['subheader_element']) {
                        $subheaderElement = $this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['headers_group']['subheader_element'];
                        break;
                    } else {
//               Return Empty Array if all ancestors are empty (for now)
                        $subheaderElement = ['div'];
                    }
                }

                break;
            case "off":
                $subheaderElement = [];
                break;
            default:
                $subheaderElement = [];
        endswitch;

        return $subheaderElement;
    }


    /**
     * Returns links from this post or closest parent
     *
     * @return array
     */

    public function getLinks()
    {
//       Check where to get the fields from.  This post, the closest parent or null
        if (!empty($this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'])) :
            $displayFrom = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['display_from'];
        else :
            $displayFrom = [];
        endif;


        switch ($displayFrom) :
            case "on":
                $links = $this->getContentGroup()['main_service_sidebar']['linkBox_group']['links_repeater'];
                break;
            case "parent":
// Get this posts ancestors
                $ancestors = ( new \app\lib\RmmSageFunctions() )->getAncestors();

                foreach ($ancestors as $ancestor) {
//          Get the location links from the closest ancestor the break and return
                    if ($this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['links_repeater']) {
                        $links = $this->getContentGroup($ancestor)['main_service_sidebar']['linkBox_group']['links_repeater'];
                        break;
                    } else {
//               Return Empty Array if all ancestors are empty (for now)
                        $links = [];
                    }
                }

                break;
            case "off":
                $links = [];
                break;
            default:
                $links = [];
        endswitch;

        return $links;
    }
}
