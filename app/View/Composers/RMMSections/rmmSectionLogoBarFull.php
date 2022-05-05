<?php

namespace App\View\Composers\RMMSections;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class rmmSectionLogoBarFull extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rmmSections.logoBar.logoBarFull'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
	    $sectionName =  'rmmSectionLogoBarFull'; // include trailing underscore
		$SectionGroupName =  $sectionName.'_'; // include trailing underscore

        return [
	        /*** phpcs:disable */
	        //  Styling Fields
	        'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),

			//	 For Debugging
	        'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $sectionName ),

        ];
    }
}
