<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class maintenancePlanStyledImagePlanHighlights extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $maintenancePlanStyledImagePlanHighlights = new FieldsBuilder('maintenance_plan_styled_image_plan_highlights');

        $maintenancePlanStyledImagePlanHighlights
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $maintenancePlanStyledImagePlanHighlights;
    }
}
