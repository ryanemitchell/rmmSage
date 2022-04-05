<?php

namespace App\Fields\Partials;
use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\sectionCommonFields;

class basicSection extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $buildFields = new FieldsBuilder('basic_section');

        $buildFields

//	         Content Tab
            ->addTab('content_field', [
                'label' => 'Content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ]);

	    $buildFields
		    ->addWysiwyg('wysiwyg_field', [
			    'label' => 'WYSIWYG Field',
			    'instructions' => '',
			    'required' => 0,
			    'conditional_logic' => [],
			    'wrapper' => [
				    'width' => '',
				    'class' => '',
				    'id' => '',
			    ],
			    'default_value' => '',
			    'tabs' => 'all',
			    'toolbar' => 'full',
			    'media_upload' => 1,
			    'delay' => 0,
		    ]);

        $buildFields
            ->addTab('styling', [
                'label' => 'Styling',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ])

	    ->addFields($this->get(sectionCommonFields::class));

        return $buildFields;
    }
}
