<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboHeaderContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboHeaderContent = new FieldsBuilder('combo_header_content');

        $comboHeaderContent
	        ->addFields($this->get(ComboHeaderWithLevels::class))
	        ->addWysiwyg('content', [
		        'label' => 'Content',
	        ]);
        return $comboHeaderContent;
    }
}
