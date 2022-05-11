<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FieldLinksRepeater extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldLinksRepeater = new FieldsBuilder('field_links_repeater');

        $fieldLinksRepeater
	        ->addRepeater('links', [
		        'label'        => 'Links',
		        'collapsed'    => 'linkName',
		        'min'          => 0,
		        'max'          => 6,
		        'layout'       => 'table',
		        'button_label' => 'Add Link',

	        ])
	        ->addText('linkName', [
		        'label'    => 'Link Name',
		        'required' => 1,
	        ])
	        ->addText('linkURL', [
		        'label' => 'Link URL (optional',
	        ])
	        ->endRepeater();

        return $fieldLinksRepeater;
    }
}
