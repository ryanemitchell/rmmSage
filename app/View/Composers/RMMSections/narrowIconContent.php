<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class narrowIconContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.narrowIconContent'
    ];


    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $topGroupName = 'narrowIconContentGroup';

        $topGroupName     = 'narrowIconContent';
        $topGroupNamePath = $topGroupName . '_'; //
        $ancestors        = ( new RmmSageFunctions() )->getAncestors();

        return [
//          Display Fields
	        /*** phpcs:disable */
            'header'         => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'header'),
            'content'        => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'content'),
            'image'          => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'combo_icon_with_alt_title')['image'],
            'imageALT'       => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'combo_icon_with_alt_title')['alt'],
            'imageTitle'     => ( new RmmSageFunctions() )->rmmGetFields($topGroupNamePath . 'combo_icon_with_alt_title')['title'],


	        // Section Styling
            'sectionClasses' => ( new RmmSageFunctions() )->rmmCreateSectionClasses($topGroupName),
	        // Section Styling
            'topGroupFields' => ( new RmmSageFunctions() )->rmmGetFields($topGroupName),
	        /** phpcs:enable */
        ];
    }
}
