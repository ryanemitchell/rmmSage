<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComponentLinkBox extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $componentLinkBox = new FieldsBuilder('component_link_box');

        $componentLinkBox
            ->addGroup('linkBox_group', [
	            'label' => '',
				'layout' => 'block',
	            'wrapper' => [
					'class' => 'noPadding styledLabel noBorder',
	            ],
            ])




	        ->addFields($this->get(ComboDisplayToggles::class))
	        ->modifyField('display_from', [
		        'label' => 'Display the locations box?',
	        ])

	        ->addGroup('image_group', [
		        'label' => '',
		        'layout' => 'block',
		        'wrapper' => [
			        'class' => 'noPadding noBorder',
		        ],
		        'conditional_logic' => [
			        'field' => 'display_from',
			        'operator' => '==',
			        'value' => 'On',],
	        ])

	        ->addImage('image', [
		        'label' => 'Image',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'return_format' => 'array',
		        'preview_size' => 'thumbnail',
		        'library' => 'all',
		        'min_width' => '',
		        'min_height' => '',
		        'min_size' => '',
		        'max_width' => '',
		        'max_height' => '',
		        'max_size' => '',
		        'mime_types' => '',
	        ])

	        ->endGroup()







	        ->addGroup('headers_group', [
		        'layout' => 'block',
		        'wrapper' => [
			        'class' => 'noPadding noBorder',
		        ],
		        'conditional_logic' => [
			        'field' => 'display_from',
			        'operator' => '==',
			        'value' => 'On',],
	        ])

	        ->addFields($this->get(ComboSubHeaderHeader::class))

	        ->endGroup()






	        ->addFields($this->get(ComboLinksRepeater::class));


        return $componentLinkBox;
    }
}
