<?php

namespace App\Fields;

use App\Fields\Partials\RMMSectionSplitPhotoContent;
use App\Fields\Partials\JobsAccordion;
use App\Fields\Partials\RMMSectionMainServicesSection;
use App\Fields\Partials\RMMSectionCenteredContent;
use App\Fields\Partials\RMMSectionRelatedPosts;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageTemplateCareers extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageTemplateCareers = new FieldsBuilder('page_template_careers');

        $pageTemplateCareers
	        ->setLocation('page_template', '==', 'page-careers.blade.php');


	    $pageTemplateCareers
            ->addTab('openingContent_tab', [
                'label' => 'Opening Content',
            ])

          ->addFields($this->get(RMMSectionSplitPhotoContent::class))


//
            ->addTab('jobsAccordion_tab', [
                'label' => 'Jobs Accordion',
            ])

          ->addFields($this->get(JobsAccordion::class))



        ;

        return $pageTemplateCareers->build();
    }
}
