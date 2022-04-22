<?php

namespace App\View\Composers\Posts;

use app\lib\RmmSageFunctions;
use Illuminate\View\View;
use Roots\Acorn\View\Composer;

class RelatedPosts extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'Posts.*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {

//      Check this post for Selected Related Posts
        if (get_field('related_posts')) :
            $relatedPosts = get_field('related_posts');
//      Check this post's closest ancestors for Selected Related Posts
//      @todo this is heavy, lighten the load 🙄
        elseif (($this->getFieldFromClosestAncestor(( new \app\lib\RmmSageFunctions() )->getAncestors()))) :
            $relatedPosts = ($this->getFieldFromClosestAncestor(( new \app\lib\RmmSageFunctions() )->getAncestors()));
        else :
            $relatedPosts = "";
        endif;


        return [
            'relatedPosts' => $relatedPosts,//
            'ancestors' => ( new \app\lib\RmmSageFunctions() )->getAncestors(),
        ];
    }


    /**
     * Get the related posts field from the closest Ancestor
     *
     * @param array $ancestors Post IDs
     *
     * @return array
     */

    public function getFieldFromClosestAncestor(array $ancestors): array
    {
        $ancestorsRelatedPosts = $ancestors;

        foreach ($ancestorsRelatedPosts as $ancestor) {
//          Get the related posts from the closest ancestor the break and return
            if (get_field('related_posts', $ancestor)) {
                $ancestorsRelatedPosts = get_field('related_posts', $ancestor);
                break;
            } else {
//               Return Empty Array if all ancestors are empty (for now)
                $ancestorsRelatedPosts = [];
            }
        }

        return $ancestorsRelatedPosts;
    }
}
