<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionMaintenancePlanPageMainContent extends Partial
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
            ->addFields($this->get(ComboVertContentAccordionContent::class))


	        ->addFile('downloadFile', [
		        'label' => 'Download',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'return_format' => 'url',
		        'library' => 'all',
		        'min_size' => '',
		        'max_size' => '',
		        'mime_types' => '',
	        ])

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
//        ->addFields($this->get(ComponentLinkBox::class))

//            ->addFields($this->get(OfferSelectSingleOffer::class))

	            ->addFields($this->get(SectionServiceNavBox::class))
	         ->addFields($this->get(SidebarBoxSinglePromotion::class))


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

//	        ->addFields($this->get(ComboVertImageContentNav::class))
//	        ->modifyField('comboVertImageContentNav', ['label' => 'City'])


            ->endGroup()
            ->endgroup()
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])

            ->addFields($this->get(SectionStylingTab::class))
            ->endGroup();

        return $rmmSectionMaintenancePlanPageMainContent;
    }
}
