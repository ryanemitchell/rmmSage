<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionRelatedPosts extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rmmSectionRelatedPosts = new FieldsBuilder('rmm_section_related_posts');

        $rmmSectionRelatedPosts
            ->addGroup('SectionRelatedPost_group', [
                'label' => '',
            ])
            ->addTab('contentTab', [
                'label' => 'Content',
            ])
	        ->addFields($this->get(comboDisplayToggles::class))

	        /* ===  Section Content  ==== */
	        ->addGroup('sectionContent', [
		        'label'   => '',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '100%',
		        ],
		        'conditional_logic' => [
			        'field' => 'display_from',
			        'operator' => '==',
			        'value' => 'On',],
	        ])

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
            ])


            ->endGroup()
            ->addTab('stylingTab', [
                'label'             => 'Styling',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => [],
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();
















        return $rmmSectionRelatedPosts;
    }
}
