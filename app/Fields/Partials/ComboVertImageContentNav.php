<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ComboVertImageContentNav extends Partial
{
    /**
     * The partial field group.
     *
     * @return FieldsBuilder
     * @throws \StoutLogic\AcfBuilder\FieldNameCollisionException
     */
    public function fields()
    {
        $comboVertImageContentNav = new FieldsBuilder('combo_vert_image_content_nav');

        $comboVertImageContentNav
            ->addGroup('comboVertImageContentNav', [
                'label' => 'comboVertImageContentNav',
             ])

            ->addText('tagline', [
                'label' => 'Tagline',
                'default_value' => 'Tagline Text',
                'instructions' => 'Leave empty to hide',
            ])

            ->addText('header', [
                'label' => 'Header',
                'default_value' => 'Header Text',
                'instructions' => 'Leave empty to hide',
            ])

	        ->addFields($this->get(fieldLinksRepeater::class))

            ->addTrueFalse('showCTA', [
                    'label' => 'Show CTA?',
                    'default_value' => 1,
                ])




        ;

        return $comboVertImageContentNav;
    }
}
