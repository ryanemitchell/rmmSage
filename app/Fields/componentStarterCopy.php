<?php

namespace App\Fields;

use App\Fields\Partials\comboHeaderSubHeaderContent;

use App\Fields\Partials\comboImageWithAltTitle;
use App\Fields\Partials\fieldImage;
use App\Fields\Partials\sectionCommonFields;
use App\Fields\Partials\sectionStylingTab;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;



class componentStarterCopy extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $componentStarterCopy = new FieldsBuilder('component_starterCopy');

        $componentStarterCopy
	        ->setLocation('page_template', '==', 'template-development.blade.php');


	    $componentStarterCopy

		    ->addTab('contentTab', [
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
		    ])



		    ->addGroup('group_field', [
			    'label' => '',
			    'instructions' => '',
			    'required' => 0,
			    'conditional_logic' => [],
			    'wrapper' => [
				    'width' => '50',
				    'class' => 'comboWrapper',
				    'id' => '',
			    ],
			    'layout' => 'block',
			    'sub_fields' => [],
		    ])



		    ->addFields($this->get(comboImageWithAltTitle::class))





		    ->endGroup()


		    ->addGroup('group_fields', [
			    'label' => '',
			    'instructions' => '',
			    'required' => 0,
			    'conditional_logic' => [],
			    'wrapper' => [
				    'width' => '50',
				    'class' => 'comboWrapper',
				    'id' => '',
			    ],
			    'layout' => 'block',
			    'sub_fields' => [],
		    ])


		    ->addFields($this->get(comboHeaderSubHeaderContent::class))





		    ->endGroup()


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

		    ->addFields($this->get(sectionStylingTab::class))



	    ;

        return $componentStarterCopy->build();
    }
}
