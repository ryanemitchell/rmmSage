<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SidebarBoxSinglePromotion extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $sidebarBoxSinglePromotion = new FieldsBuilder('sidebar_box_single_promotion');

        $sidebarBoxSinglePromotion
	        ->addGroup('sidebarBoxSinglePromotion', [ 'label' => 'Single Promotion'])


	        ->addTrueFalse('showSinglePromoBox', [
		        'label' => 'Show the Single Promo Box?',
		        'default_value' => 1,
		        'ui' => 1,

	        ])


			->addFields($this->get(comboImageWithAltTitle::class))




	        ->addText('header', [
		        'label' => 'Header',
		        'default_value' => '',
	        ])

	        ->addText('description', [
		        'label' => 'Description',
		        'default_value' => '',
	        ])
	        ->addTrueFalse('showCTA', [
		        'label' => 'Show the CTA?',
		        'default_value' => 1,
		        'ui' => 1,

	        ]);

        return $sidebarBoxSinglePromotion;
    }
}
