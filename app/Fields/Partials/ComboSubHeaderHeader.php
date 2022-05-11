<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboSubHeaderHeader extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboSubHeaderHeader = new FieldsBuilder('combo_header_subheader');

	    $comboSubHeaderHeader
		    ->addFields($this->get(ComboSubHeaderwithLevels::class))
	        ->addFields($this->get(ComboHeaderWithLevels::class));


        return $comboSubHeaderHeader;
    }
}
