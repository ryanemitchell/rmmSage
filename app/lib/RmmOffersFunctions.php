<?php

/**
 * Filename: RmmSageFunctions.php
 * Description:
 * Author: ryan
 */

namespace app\lib;

use DateTime;
use DateInterval;
use DateTimeInterface;

class RmmOffersFunctions
{
    public static function class()
    {
    }

    /**
     * Get the current posts ancestors from current post ID,
     * WP core method is a bit glitchy, so I'm using this more reliable method.
     *
     * @return array
     */
    public function getAncestors(): array
    {
        $id = get_the_ID();
        return  get_post_ancestors($id);
    }


//  public function rmmGetFields($contentGroup, $pathAndField, $postID = '')
//  {
//      if (! empty(get_field('SectionCenteredContent_group')['display_from'])) {
//          return get_field('SectionCenteredContent_group')['display_from'];
//      } else {
//          return [];
//      }
//  }

    /**
     * Get the current posts ancestors from current post ID,
     * WP core method is a bit glitchy, so I'm using this more reliable method.
     *
     * @return array
     */


    public function rmmGetOffers($include = '', $exclude = '')
    {

        $offers_items = get_posts([
            'post_type' => 'offers',
            'include'   => $include,
            'exclude'    => $exclude,
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

	            if (!empty(get_field('offer_content', $offer))) :
		            $content = get_field('offer_content', $offer);
	            else :
		            $content = null;
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

				$expirationDisplay = '';

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
                    'content' => $content,
                    'image' => $image,
                    'cta' => $cta,
                    'disclaimer' => $disclaimer,
                    'expirationText' => $expiration_text,
                    'expiration' => $expiration,
                    'expirationDisplay' => $expirationDisplay,
                    'offer' => $offer


                ];
            }, $offers_items);
        } // end !!empty($offers_items

        return  $offers;
    }
}
