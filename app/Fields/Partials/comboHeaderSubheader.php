<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboHeaderSubheader extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboHeaderSubheader = new FieldsBuilder('combo_header_subheader');

        $comboHeaderSubheader
	        ->addFields($this->get(comboHeaderWithLevels::class))
	        ->addFields($this->get(comboSubHeaderwithLevels::class));

        return $comboHeaderSubheader;
    }
}
