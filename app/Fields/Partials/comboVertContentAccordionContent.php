<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboVertContentAccordionContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboVertContentAccordionContent = new FieldsBuilder('combo_vert_content_accordion_content');

        $comboVertContentAccordionContent

	        ->addText('topHeader', [
		        'label' => 'Top Header',
		        'default_value' => 'Top Header Text',
		        'instructions' => 'Hidden if Empty',

	        ])

	        ->addWysiwyg('topContent', [
		        'label' => 'Top Content',
		        'default_value' => 'Top Content Text',
		        'instructions' => 'Hidden if Empty',
	        ])

	        ->addTrueFalse('topShowCTA', [
		        'label' => 'Show the Top CTA?',
		        'default_value' => 1,
		        'ui' => 1,

	        ])



	        ->addFields($this->get(componentAccordion::class))


	    ->addText('bottomHeader', [
	    'label' => 'Bottom Header',
	    'default_value' => 'Bottom Header Text',
	    'instructions' => 'Hidden if Empty',
    ])

	    ->addWysiwyg('bottomContent', [
		    'label' => 'Bottom Content',
		    'default_value' => 'Bottom Header Text',
		    'instructions' => 'Hidden if Empty',
	    ])

	        ->addTrueFalse('bottomShowCTA', [
		        'label' => 'Show the Bottom CTA?',
		        'default_value' => 1,
		        'ui' => 1,

	        ]);



        return $comboVertContentAccordionContent;
    }
}
