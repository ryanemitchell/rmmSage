<?php

namespace App\View\Composers\LogoBar;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class Logos extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
	    'rmmSections.logoBar.logoBarFull',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
	        'logos'  => (new RmmSageFunctions() )->rmmGetFields('field_logos_logos','option'),
        ];
    }
}
