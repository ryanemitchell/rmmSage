<?php

namespace app\View\Composers\RMMSections\ServicePageMain;

use Roots\Acorn\View\Composer;

class SingleOfferBox extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
       'rmmSections.pageMainContentSection.singleOfferBox'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
             'headerImage'      => 'hello',
        ];
    }
}
