<?php

namespace App\Fields;

use App\Fields\Partials\ComboFlexContent;
use App\Fields\Partials\ComponentLinkBox;
use App\Fields\Partials\OfferSelectSingleOffer;
use App\Fields\Partials\SectionStylingTab;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionMainServicesSection extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $SectionMainServicesSection = new FieldsBuilder('SectionMainServicesSection');

        $SectionMainServicesSection
            ->setLocation('page_template', '==', '');


        $SectionMainServicesSection
            ->addGroup('SectionMainServicesSection_group', [
                'label' => '',
            ])
            ->addTab('contentTab', [
                'label' => 'Content',
            ])
            ->addGroup('sectionContent', [
                'label'  => '',
                'layout' => 'block',
            ])
            ->addGroup('main_service_content', [
                'label'   => 'Main Service Content',
                'wrapper' => [
                    'width' => '60%',
                ],
                'layout'  => 'block',
            ])
            ->addFields($this->get(ComboFlexContent::class))
            ->endgroup()
            ->addGroup('main_service_sidebar', [
                'label'   => 'Services Sidebar',
                'wrapper' => [
                    'width' => '40%',
                    'class' => 'noPadding noBorder',
                ],
                'layout'  => 'block',
            ])
            ->addFields($this->get(ComponentLinkBox::class))
            ->addFields($this->get(OfferSelectSingleOffer::class))
            ->endgroup()
            ->endGroup()
            ->addTab('stylingTab', [
                'label'             => 'Styling',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => [],
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ])
            ->addFields($this->get(SectionStylingTab::class))
            ->endGroup();

        return $SectionMainServicesSection->build();
    }
}
