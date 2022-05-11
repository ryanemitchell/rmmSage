<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboHeaderSubHeaderContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboHeaderSubHeaderContent = new FieldsBuilder('combo_header_sub_header_content');

        $comboHeaderSubHeaderContent
	        ->addFields($this->get(ComboHeaderWithLevels::class))
	        ->addFields($this->get(ComboSubHeaderwithLevels::class))
	        ->addWysiwyg('content', [
		        'label' => 'Content',
	        ]);

        return $comboHeaderSubHeaderContent;
    }
}
