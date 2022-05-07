<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class rmmSectionSplitPhotoContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.rmmSectionSplitPhotoContent'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
	    $sectionName =  'rmmSectionSplitPhotoContent'; // include trailing underscore
		$SectionGroupName =  $sectionName.'_'; // include trailing underscore

        return [
	        /*** phpcs:disable */
	        'tagline'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_tagline' ),
	        'header'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_header' ),
	        'content'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_content' ),
	        'showCTA'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_showCTA' ),

	        'image'      => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_combo_image_with_alt_title_image' ),
	        'imageTitle' => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_combo_image_with_alt_title' )['title'],
	        'imageALT'   => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_combo_image_with_alt_title' )['alt'],


            //  Styling Fields
	        'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),

			//	 For Debugging
	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $sectionName ),

        ];
    }
}
