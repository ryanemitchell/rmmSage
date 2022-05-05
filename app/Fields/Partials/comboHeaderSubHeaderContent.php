<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboHeaderSubHeaderContent extends Partial
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
	        ->addFields($this->get(comboHeaderWithLevels::class))
	        ->addFields($this->get(comboSubHeaderwithLevels::class))
	        ->addWysiwyg('content', [
		        'label' => 'Content',
	        ]);

        return $comboHeaderSubHeaderContent;
    }
}
