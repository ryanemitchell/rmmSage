<?php

namespace App\Fields;

use App\Fields\Partials\MaintenancePlan\PlanBenefits;
use App\Fields\Partials\RMMSectionMaintenancePlanPageMainContent;
use App\Fields\Partials\maintenancePlanStyledImagePlanHighlights;
use App\Fields\Partials\MaintenancePlan\StyledImagePlanHighlights;

use App\Fields\Partials\RMMSectionSplitContentLinksImage;
use App\Fields\Partials\RMMSectionSplitContentReviews;
use App\Fields\Partials\RMMSectionSplitContentServices;
use App\Fields\Partials\RMMSectionSplitContentStyledImage;
use App\Fields\Partials\RMMSectionSplitPhotoContent;
use App\Fields\Partials\RMMSectionCenteredMenu;
use App\Fields\Partials\RMMSectionMainServicesSection;
use App\Fields\Partials\RMMSectionCenteredContent;
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

            ->addFields($this->get(RMMSectionSplitPhotoContent::class))



            ->addTab('planHighlights_tab', [
                'label' => 'Plan Highlights',
            ])
	        ->addFields($this->get(StyledImagePlanHighlights::class))


//           ->addFields($this->get(RMMSectionMainServicesSection::class))

            ->addTab('planBenefits_tab', [
                'label' => 'Plan Benefits',
            ])
	        ->addFields($this->get(PlanBenefits::class))

	        /* ===  Main Content  ==== */
	        ->addTab('mainContent_tab', [
		        'label' => 'Main Content',
	        ])

	        ->addFields($this->get(RMMSectionMaintenancePlanPageMainContent::class))





        ;

        return $pageTemplateMaintenancePlan->build();
    }
}
