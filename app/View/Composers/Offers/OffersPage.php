<?php

namespace App\View\Composers\Offers;

use app\lib\RmmSageFunctions;
use app\lib\RmmOffersFunctions;
use Roots\Acorn\View\Composer;
use DateTime;

class OffersPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'offers.allOffers',
        'page-offers',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {

        if ((new RmmSageFunctions() )->rmmGetFields('featured_offers')) :
            $selectedFeaturedOffers = (new RmmSageFunctions() )->rmmGetFields('featured_offers');
        else :
            $selectedFeaturedOffers = '1';
        endif;

        return [
        'allOffers' => (new RmmOffersFunctions())->rmmGetOffers(),
        'featuredOffers' => (new RmmOffersFunctions())->rmmGetOffers($selectedFeaturedOffers),
        'allExceptFeatured' => (new RmmOffersFunctions())->rmmGetOffers('', $selectedFeaturedOffers ),
        ];
    }
}
