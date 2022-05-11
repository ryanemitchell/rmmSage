<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionServiceNavBox extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $sectionServiceNavBox = new FieldsBuilder('section_service_nav_box');

        $sectionServiceNavBox
            ->addGroup('sectionServiceNavBox', [ 'label' => ''])

            ->addText('header', [
                'label' => 'Header',
                'default_value' => 'Our Services in City Name',
            ])

            ->addFields($this->get(FieldLinksRepeater::class))



            ->addTrueFalse('showCTA', [
                'label' => 'Show the CTA?',
                'default_value' => 1,
                'ui' => 1,

            ])


        ;

        return $sectionServiceNavBox;
    }
}
