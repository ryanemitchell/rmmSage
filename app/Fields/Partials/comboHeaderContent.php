<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboHeaderContent extends Partial
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
	        ->addFields($this->get(comboHeaderWithLevels::class))
	        ->addFields($this->get(fieldWYSIWYG::class));

        return $comboHeaderContent;
    }
}
