<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class SplitContentListImageOverlap extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.SplitContentListImageOverlap'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
		$topGroupName     = 'SplitContentListImageOverlap';
	    $topGroupNamePath = $topGroupName . '_'; //
	    $ancestors        = ( new RmmSageFunctions() )->getAncestors();

	    return [
		    //  Section Fields
		    /*** phpcs:disable */
		    'tagline'         => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'tagline'),
		    'header'         => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'header'),
		    'links'        => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'links_repeater'),
		    'image'          => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'combo_image_with_alt_title')['image'],
		    'imageALT'       => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'combo_image_with_alt_title')['alt'],
		    'imageTitle'     => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'combo_image_with_alt_title')['title'],
		    'showCTA'        => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'showCTA'),


		    // Section Styling
//		    'sectionClasses' => ( new RmmSageFunctions() )->rmmCreateSectionClasses($topGroupName),
		    // For Dev and Debugging
		    'topGroupFields' => ( new RmmSageFunctions() )->rmmGetFields($topGroupName),
		    /** phpcs:enable */
	    ];
    }
}
