<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class selectRelatedPosts extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $selectRelatedPosts = new FieldsBuilder('select_related_posts');

        $selectRelatedPosts
            ->setLocation('page_template', '==', 'template-service-page.blade.php');

        $selectRelatedPosts
            ->addRelationship('related_posts', [
                'label' => 'Related Posts',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['post'],
                'taxonomy' => [],
                'filters' => [
                    0 => 'search',
                    2 => 'taxonomy',
                ],
                'elements' => '',
                'min' => '0',
                'max' => '3',
                'return_format' => 'object',
            ]);


        return $selectRelatedPosts->build();
    }
}
