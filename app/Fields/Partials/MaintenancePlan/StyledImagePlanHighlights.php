<?php

namespace App\Fields\Partials\MaintenancePlan;

use App\Fields\Partials\ComboImageWithAltTitle;
use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class StyledImagePlanHighlights extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $styledImagePlanHighlights = new FieldsBuilder('styled_image_plan_highlights');

        $styledImagePlanHighlights
	        ->addGroup('styledImagePlanHighlights', [
		        'label' => '',
	        ])


            ->addText('tagline', [
                'label' => 'Tagline',

            ])

            ->addText('header', [
                'label' => 'Header',

            ])


	        ->addRepeater('highlights', [
		        'label' => 'Plan Highlights',
		        'instructions' => '',
		        'required' => 0,
		        'min' => 1,
		        'max' => 3,
		        'layout' => 'table',
		        'button_label' => 'Add Highlight',

	        ])

	        ->addFields($this->get(ComboImageWithAltTitle::class))


	        ->addText('title', [
		        'label' => 'Title',
		        'instructions' => '',
		        'required' => 1,
	        ])

	        ->addTextArea('description', [
		        'label' => 'Description',
		        'instructions' => '',
		        'required' => 0,
	        ])

	        ->endRepeater()






            ->addTrueFalse('showCTA', [
                'label' => 'Show CTA?',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Yes',
                'ui_off_text' => 'No',
            ])



	        ->addFields($this->get(ComboImageWithAltTitle::class));


        return $styledImagePlanHighlights;
    }
}
