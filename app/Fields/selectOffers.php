<?php

namespace App\Fields;

use App\Fields\Partials\comboSelectOffers;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class selectOffers extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $selectOffers = new FieldsBuilder('select_offers');

        $selectOffers
            ->setLocation('page_template', '==', 'page-offers.blade.php');

        $selectOffers

        ->addFields($this->get(comboSelectOffers::class));
        return $selectOffers->build();
    }
}
