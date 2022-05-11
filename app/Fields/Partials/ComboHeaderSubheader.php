<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboHeaderSubheader extends Partial
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
	        ->addFields($this->get(ComboHeaderWithLevels::class))
	        ->addFields($this->get(ComboSubHeaderwithLevels::class));

        return $comboHeaderSubheader;
    }
}
