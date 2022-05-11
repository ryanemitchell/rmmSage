<?php

namespace App\Fields\Partials\MaintenancePlan;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PlanBenefits extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $planBenefits = new FieldsBuilder('styled_image_plan_highlights');

        $planBenefits
            ->addGroup('planBenefits', [
                'label' => '',
            ])
            ->addText('header', [
                'label' => 'Header',
            ])
            ->addRepeater('benefits', [
                'label'        => 'Plan Benefits',
                'instructions' => '',
                'required'     => 0,
                'min'          => 1,
                'max'          => 0,
                'layout'       => 'table',
                'button_label' => 'Add Benefit',

            ])
            ->addText('title', [
                'label'        => 'Title',
                'instructions' => '',
                'required'     => 1,
            ])
            ->endRepeater();


        return $planBenefits;
    }
}
