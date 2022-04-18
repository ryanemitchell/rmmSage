<?php

namespace App\View\Composers\Offers;

use DateTime;
use Roots\Acorn\View\Composer;

class offers extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'offers.*',//
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {

        $includedOffersFromView = $this->data->includeOffers;

		var_dump($this);
		echo $includedOffersFromView;

        if (get_field('selected_offers')) :
            $selectedOffers = get_field('selected_offers');
        else :
            $selectedOffers = '1';
        endif;

        if (get_field('featured_offers')) :
            $featuredOffers = get_field('featured_offers');
        else :
            $featuredOffers = '1';
        endif;



        if (!empty($includedOffersFromView)) :
            switch ($includedOffersFromView) :
                case 'all':
                    $includedOffers = '';
                    break;
                case 'featured':
                    $includedOffers = $featuredOffers;
                    break;
                case 'selected':
                    $includedOffers = $selectedOffers;
                    break;
                default:
                    $includedOffers = '';
            endswitch;
        endif;





        return [
            'selectedOffers' => $this->selectedOffers($selectedOffers),
            'featuredOffers' => $this->selectedOffers($featuredOffers),
            'allOffers' => $this->selectedOffers(),
            'offers' => $this->selectedOffers($includedOffers),
        ];
    }


    public function selectedOffers($include = ''): array
    {



        $offers_items = get_posts([
            'post_type' => 'offers',
            'include'   => $include,
        ]);

        $offers = [];

        if (!empty($offers_items)) {
            $offers =  array_map(function ($offer) {

                if (!empty(get_field('offer_title', $offer))) :
                    $title = get_field('offer_title', $offer);
                else :
                    $title = null;
                endif;

                if (!empty(get_field('offer_subtitle', $offer))) :
                    $subTitle = get_field('offer_subtitle', $offer);
                else :
                    $subTitle = null;
                endif;

                if (!empty(get_field('offer_image', $offer))) :
                    $image = get_field('offer_image', $offer);
                elseif (!empty(get_field('offer_image', 'options'))) :
                    $image = get_field('offer_image', 'options');
                else :
                    $image = null;
                endif;

                if (!empty(get_field('offer_cta', $offer))) :
                    $cta = get_field('offer_cta', $offer);
                elseif (!empty(get_field('offer_cta', 'options'))) :
                    $cta = get_field('offer_cta', 'options');
                else :
                    $cta = null;
                endif;

                if (!empty(get_field('offer_disclaimer', $offer))) :
                    $disclaimer = get_field('offer_disclaimer', $offer);
                elseif (!empty(get_field('offer_disclaimer', 'options'))) :
                    $disclaimer = get_field('offer_disclaimer', 'options');
                else :
                    $disclaimer = null;
                endif;

                if (!empty(get_field('offer_expiration_text', $offer))) :
                    $expiration_text = get_field('offer_expiration_text', $offer);
                elseif (!empty(get_field('offer_expiration_text', 'options'))) :
                    $expiration_text = get_field('offer_expiration_text', 'options');
                else :
                    $expiration_text = null;
                endif;

                if (!empty(get_field('offer_expiration', $offer))) :
//                  If set to get from options, get from options else get setting
                    if (get_field('offer_expiration', $offer) == 'fromOptions') :
                        $expiration = get_field('offer_expiration', 'options');
                    else :
                        $expiration = get_field('offer_expiration', $offer);
                    endif;
                elseif (!empty(get_field('offer_expiration', 'options'))) :
                    $expiration = get_field('offer_expiration', 'options');
                else :
                    $expiration = null;
                endif;

                /* === Expiration Calculations and Presentation  ==== */

                $now = new DateTime();

                switch ($expiration) :
                    case ("noExpiration"):
                        $twoMonths = $now->add(new DateInterval('P1M'));
                        break;

                    case ( "twoWeeks" ):
                        $expirationDisplay = ( date('F j,Y', strtotime('+2 week')) );
                        break;

                    case ( "endOfTheMonth" ):
                        $expirationDisplay = ( date('F j,Y', strtotime('last day of +0 month')) );
                        break;

                    case ( "endOfNextMonth" ):
                        $expirationDisplay = ( date('F j,Y', strtotime('last day of +1 month')) );
                        break;

                    case ( "threeMonths" ):
                        $expirationDisplay = ( date('F j,Y', strtotime('last day of +3 month')) );
                        break;

                    case ( "sixMonths"):
                        $expirationDisplay = ( date('F j,Y', strtotime('last day of +6 month')) );
                        break;

                    default:
                        $expirationDisplay = null;
                endswitch;





                return (object)[
                    'title' => $title,
                    'subTitle' => $subTitle,
                    'image' => $image,
                    'cta' => $cta,
                    'disclaimer' => $disclaimer,
                    'expirationText' => $expiration_text,
                    'expiration' => $expiration,
                    'expirationDisplay' => $expirationDisplay


                ];
            }, $offers_items);
        } // end !!empty($offers_items

        return  $offers;
    }
}
