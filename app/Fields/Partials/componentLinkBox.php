<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class componentLinkBox extends Partial
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




	        ->addFields($this->get(comboDisplayToggles::class))
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

	        ->addFields($this->get(fieldImage::class))

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

	        ->addFields($this->get(comboSubHeaderHeader::class))

	        ->endGroup()






	        ->addFields($this->get(comboLinksRepeater::class));


        return $componentLinkBox;
    }
}
