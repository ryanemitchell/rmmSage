<?php

namespace App\View\Composers\Guarantees;

use app\lib\RmmSageFunctions;
use Roots\Acorn\View\Composer;

class Guarantees extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
	    'rmmSections.guarantees.guaranteesSlider',
	    'rmmSections.guarantees.guaranteesFlat',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
	        'guarantees'  => (new RmmSageFunctions() )->rmmGetFields('field_guarantees_guarantees','option'),
        ];
    }
}
