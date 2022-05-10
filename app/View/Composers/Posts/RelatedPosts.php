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
        'Posts.related-posts',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
	public function with()


	{
		$sectionName =  'sectionrelatedpost_group'; // include trailing underscore
		$SectionGroupName =  $sectionName.'_'; // include trailing underscore
		$ancestors = ( new RmmSageFunctions() )->getAncestors();

		return [
			/*** phpcs:disable */
			'tagline'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_tagline' ),
//			'header'     => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_header' ),
			'content'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_content' ),
			'showCTA'    => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_showCTA' ),
			'header' => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'field_page_template_services_sectionrelatedpost_group', $ancestors )['sectionContent']['header'],

			'relatedPosts' => ( new RmmSageFunctions() )->rmmGetFieldsRecursive( 'field_page_template_services_sectionrelatedpost_group', $ancestors )['sectionContent']['related_posts'],
			'image'      => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_combo_image_with_alt_title_image' ),
			'imageTitle' => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_combo_image_with_alt_title' )['title'],
			'imageALT'   => ( new RmmSageFunctions() )->rmmGetFields( 'rmmSectionSplitPhotoContent_combo_image_with_alt_title' )['alt'],


			//  Styling Fields
			'sectionClasses' => (new RmmSageFunctions() )->rmmCreateSectionClasses($sectionName),

			//	 For Debugging
//			'sectionFields'    => ( new RmmSageFunctions() )->rmmGetFields( $sectionName ),



		];
	}
}


