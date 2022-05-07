<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class rmmSectionMaintenancePlanPageMainContent extends Partial
{
    /**
     * The partial field group.
     *
     * @return FieldsBuilder
     */
    public function fields()
    {
        $rmmSectionMaintenancePlanPageMainContent = new FieldsBuilder('rmm_section_maintenance_plan_page_main_content');

        $rmmSectionMaintenancePlanPageMainContent
            ->addGroup('rmmSectionMaintenancePlanPageMainContent', [
                'label' => '',
            ])
            ->addTab('contentTab', [
                'label' => 'Content',
            ])
            ->addGroup('sectionContent', [
                'label'  => '',
                'layout' => 'block',
            ])
            ->addGroup('mainContent', [
                'label'   => 'Main Content',
                'wrapper' => [
                    'width' => '60%',
                ],
                'layout'  => 'block',
            ])
            ->addFields($this->get(comboVertContentAccordionContent::class))

            ->endgroup()
            ->addGroup('mainSidebar', [
                'label'   => 'Sidebar',
                'wrapper' => [
                    'width' => '40%',
                    'class' => 'noPadding noBorder',
                ],
                'layout'  => 'block',
            ])


//    @todo remove this after added to services page
//        ->addFields($this->get(componentLinkBox::class))

//            ->addFields($this->get(offerSelectSingleOffer::class))

	            ->addFields($this->get(sectionServiceNavBox::class))
	         ->addFields($this->get(sidebarBoxSinglePromotion::class))


		        ->addTrueFalse('showLocationsNavBox', [
        'label' => 'Show the Locations Nav Box?',
        'default_value' => 1,
        'ui' => 1,

    ])

	        ->addTrueFalse('showGuaranteesBox', [
		        'label' => 'Show the Guarantees Box?',
		        'default_value' => 1,
		        'ui' => 1,

	        ])

//	        ->addFields($this->get(comboVertImageContentNav::class))
//	        ->modifyField('comboVertImageContentNav', ['label' => 'City'])


            ->endGroup()
            ->endgroup()
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])

            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();

        return $rmmSectionMaintenancePlanPageMainContent;
    }
}
