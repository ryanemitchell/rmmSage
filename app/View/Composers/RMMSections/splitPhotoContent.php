<?php

namespace App\View\Composers\RMMSections;

use Roots\Acorn\View\Composer;

class splitPhotoContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
//	    'rmmSections.splitPhotoContent',
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
			'sectionGroup' => $this->getSectionGroup(),
			'DisplayGroup' => $this->getDisplayGroup(),
			'post' => $this,
			// Content Groups
			'image' => $this->getImage(),
			'imageHeight' => $this->getImageHeight(),
			'imageWidth' => $this->getImageWidth(),
			'imageAlt' => $this->getImageAlt(),
			'imageTitle' => $this->getImageTitle(),

			'showCTA' => $this->getShowCTA(),

			'headerText' => $this->getHeaderText(),
			'headerElement' => $this->getHeaderElement(),
			'content' => $this->getHeaderContent(),

		];
	}


	/* ==========================================================================
	   Get Fields and Groups
	   ========================================================================== */

	/**
	 * Returns the  group for this section
	 *
	 * @return array
	 */
	public function getSectionGroup(): array
	{
		if (! empty(get_field('SectionSplitPhotoContent_group'))) {
			return get_field('SectionSplitPhotoContent_group');
		} else {
			return [];
		}
	}




	/**
	 * Returns the styling group for this section
	 *
	 * @return array
	 */


	public function getDisplayGroup(): array
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionDisplay'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionDisplay'];
		} else {
			return [];
		}
	}




	/**
	 * Returns string for use as classname
	 *
	 * @return string
	 */

	public function getClassName()
	{
		if (! empty($this->getDisplayGroup()['class_name'])) {
			return $this->getDisplayGroup()['class_name'];
		} else {
			return '';
		}
	}



	/**
	 * Returns tailwind visibility class for mobile
	 *
	 * @return string
	 */

	public function getMobileDisplay()
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
//        return get_field('SectionSplitPhotoContent_group')['sectionStyling'];
//    }

	/**
	 * Returns tailwind visibility class for desktop
	 *
	 * @return string
	 */

	public function getDesktopDisplay()
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
	 * Returns the  group for this section
	 *
	 * @return array
	 */
	public function getImage()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['image']['url'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['image']['url'];
		} else {
			return [];
		}
	}

	public function getImageHeight()
{
	if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['image']['height'])) {
		return get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['image']['height'];
	} else {
		return [];
	}
}


	public function getImageWidth()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['image']['width'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['image']['width'];
		} else {
			return [];
		}
	}

	public function getImageAlt()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['alt'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['alt'];
		} else {
			return [];
		}
	}

	public function getImageTitle()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['title'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['title'];
		} else {
			return [];
		}
	}

	public function getShowCTA()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['show_CTA'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentLeft']['show_CTA'];
		} else {
			return NULL;
		}
	}






	public function getHeaderText()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentRight']['header_text'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentRight']['header_text'];
		} else {
			return [];
		}
	}

	public function getHeaderElement()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentRight']['header_element'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentRight']['header_element'];
		} else {
			return [];
		}
	}

	public function getHeaderContent()
	{
		if (! empty(get_field('SectionSplitPhotoContent_group')['sectionContentRight']['content'])) {
			return get_field('SectionSplitPhotoContent_group')['sectionContentRight']['content'];
		} else {
			return [];
		}
	}







}
