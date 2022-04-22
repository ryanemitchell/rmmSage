<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class sectionStylingTab extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionStylingTab = new FieldsBuilder('section_styling_tab');

        $sectionStylingTab
            ->addGroup('sectionDisplay', [
                'label' => '',
                'layout' => 'block',
            ])

            ->addFields($this->get(sectionDisplayFields::class))

            ->endGroup()

//          Styling Row - DISABLED FOR NOW
//          ->addGroup( 'sectionStyling', [
//              'label' => 'Styling',
//              'layout' => 'block',
//
//          ] )
//          ->addFields( $this->get( sectionStylingFields::class ) )
//          ->endGroup()
        ;

        return $sectionStylingTab;
    }
}
