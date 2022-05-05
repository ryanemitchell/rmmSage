<?php

namespace App\View\Composers\RMMSections\Guarantees;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class GuaranteesFull extends Composer
{
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'rmmSections.guarantees.guaranteesFull',
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

		return [
//          Display Fields
			'className'      => (new RmmSageFunctions() )->rmmGetFields($stylingGroupName.'class_name'),
			'mobileDisplay'  => (new RmmSageFunctions() )->rmmSetDisplayToggle($stylingGroupName.'show_on_mobile'),
			'desktopDisplay' => (new RmmSageFunctions() )->rmmSetDisplayToggle($stylingGroupName.'show_on_desktop'),
			'sectionGroup' => (new RmmSageFunctions() )->rmmGetFields($topGroupName),

			// Content Groups
			/* ===  Section Content  ==== */

			/*** phpcs:disable */
			'menu' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($topGroupName.'_'.'menu', $displayFrom, $ancestors),

			'headerText' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'header_text', $displayFrom, $ancestors),
			'headerElement' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'header_element', $displayFrom, $ancestors),
			'content' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'content', $displayFrom, $ancestors),

			'listItems' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'list_with_options_list_items', $displayFrom, $ancestors),
			'listStyle' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'list_with_options_list_style', $displayFrom, $ancestors),
			'listDesktopColumns' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'list_with_options_listDesktopColumns', $displayFrom, $ancestors),
			'listMobileColumns' => (new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'list_with_options_listMobileColumns', $displayFrom, $ancestors),

			'footerText' =>(new RmmSageFunctions() )->rmmGetFieldsDisplayFrom($contentGroupName.'footer_text', $displayFrom, $ancestors),
			/** phpcs:enable */
		];
	}
}
