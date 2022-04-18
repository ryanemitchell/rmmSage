<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Pagi\PagiFacade as Pagi;

class Blog extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index','home'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pagi' => $this->pagination(),
        ];
    }

    public function pagination()
    {
        $pagination = Pagi::build();

        return $pagination->links('components.pagi');
    }

}
