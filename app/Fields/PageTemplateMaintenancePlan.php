<?php

namespace App\Fields;

use App\Fields\Partials\MaintenancePlan\planBenefits;
use App\Fields\Partials\rmmSectionMaintenancePlanPageMainContent;
use App\Fields\Partials\maintenancePlanStyledImagePlanHighlights;
use App\Fields\Partials\MaintenancePlan\styledImagePlanHighlights;

use App\Fields\Partials\RMMSectionSplitContentLinksImage;
use App\Fields\Partials\RMMSectionSplitContentReviews;
use App\Fields\Partials\rmmSectionSplitContentServices;
use App\Fields\Partials\RMMSectionSplitContentStyledImage;
use App\Fields\Partials\RMMSectionSplitPhotoContent;
use App\Fields\Partials\rmmSectionCenteredMenu;
use App\Fields\Partials\rmmSectionMainServicesSection;
use App\Fields\Partials\rmmSectionCenteredContent;
use App\Fields\Partials\RMMSectionRelatedPosts;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateMaintenancePlan extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateMaintenancePlan = new FieldsBuilder('page_template_maintenance_plan');

        $pageTemplateMaintenancePlan
	    ->setLocation('page_template', '==', 'page-maintenance-plan.blade.php');


        $pageTemplateMaintenancePlan
            ->addTab('openingContent_tab', [
                'label' => 'Opening Content',
            ])

            ->addFields($this->get(rmmSectionSplitPhotoContent::class))



            ->addTab('planHighlights_tab', [
                'label' => 'Plan Highlights',
            ])
	        ->addFields($this->get(styledImagePlanHighlights::class))


//           ->addFields($this->get(rmmSectionMainServicesSection::class))

            ->addTab('planBenefits_tab', [
                'label' => 'Plan Benefits',
            ])
	        ->addFields($this->get(planBenefits::class))

	        /* ===  Main Content  ==== */
	        ->addTab('mainContent_tab', [
		        'label' => 'Main Content',
	        ])

	        ->addFields($this->get(rmmSectionMaintenancePlanPageMainContent::class))





        ;

        return $pageTemplateMaintenancePlan->build();
    }
}
