<?php

namespace App\Fields;

use App\Fields\Partials\comboFlexContent;
use App\Fields\Partials\componentLinkBox;
use App\Fields\Partials\offerSelectSingleOffer;
use App\Fields\Partials\sectionStylingTab;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionStarterCopy extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $RMMSectionStarterCopy = new FieldsBuilder('RMMSectionStarterCopy');

        $RMMSectionStarterCopy
            ->setLocation('post_type', '==', '');

        $RMMSectionStarterCopy
            ->addGroup('RMMSectionStarterCopy_group', [
                'label' => '',
            ])
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            ->addGroup('sectionContent', [
                'label' => '',
                'layout' => 'block',
            ])


            ->addGroup('main_service_content', [
                'label' => 'Main Service Content',
                'wrapper' => [
                    'width' => '60%',
                ],
                'layout' => 'block',
            ])



            ->addFields($this->get(comboFlexContent::class))


            ->endgroup()

            ->addGroup('main_service_sidebar', [
                'label' => 'Services Sidebar',
                'wrapper' => [
                    'width' => '40%',
                    'class' => 'noPadding noBorder',
                ],
                'layout' => 'block',
            ])






            ->addFields($this->get(componentLinkBox::class))
            ->addFields($this->get(offerSelectSingleOffer::class))

            ->endgroup()

            ->endGroup()



        ->addTab('stylingTab', [
        'label' => 'Styling',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
        ])




        ->addFields($this->get(sectionStylingTab::class))

        ->endGroup();

        return $RMMSectionStarterCopy->build();
    }
}
