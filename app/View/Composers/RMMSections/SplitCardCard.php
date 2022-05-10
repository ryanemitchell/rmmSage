<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class SplitCardCard extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.SplitCardCard'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $topGroupName     = 'SplitCardCard';
        $topGroupNamePath = $topGroupName . '_'; //
        $ancestors        = ( new RmmSageFunctions() )->getAncestors();

        return [
            //  Section Fields
			/*** phpcs:disable */
			'leftPromoHeader'     => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'header' ),
			'leftPromoContent'    => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'content' ),
			'leftPromoImage'      => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'combo_image_with_alt_title' )['image'],
			'leftPromoImageALT'   => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'combo_image_with_alt_title' )['alt'],
			'leftPromoImageTitle' => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'combo_image_with_alt_title' )['title'],
			'leftPromoIcon'       => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'combo_icon_with_alt_title' )['image'],
			'leftPromoIconALT'    => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'combo_icon_with_alt_title' )['alt'],
			'leftPromoIconTitle'  => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'combo_icon_with_alt_title' )['title'],
			'leftPromoShowCTA'    => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentLeft_' . 'showCTA' ),

			'rightPromoHeader'     => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'header' ),
			'rightPromoContent'    => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'content' ),
			'rightPromoImage'      => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'combo_image_with_alt_title' )['image'],
			'rightPromoImageALT'   => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'combo_image_with_alt_title' )['alt'],
			'rightPromoImageTitle' => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'combo_image_with_alt_title' )['title'],
			'rightPromoIcon'       => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'combo_icon_with_alt_title' )['image'],
			'rightPromoIconALT'    => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'combo_icon_with_alt_title' )['alt'],
			'rightPromoIconTitle'  => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'combo_icon_with_alt_title' )['title'],
			'rightPromoShowCTA'    => ( new RmmSageFunctions() )->rmmGetFields( $topGroupNamePath . 'contentRight_' . 'showCTA' ),


			// Section Styling
			'sectionClasses'       => ( new RmmSageFunctions() )->rmmCreateSectionClasses( $topGroupName ),
			// For Dev and Debugging
			'topGroupFields'       => ( new RmmSageFunctions() )->rmmGetFields( $topGroupName ),
            /** phpcs:enable */
        ];
    }
}
