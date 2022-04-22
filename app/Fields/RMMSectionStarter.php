<?php

namespace App\Fields;

use App\Fields\Partials\sectionStylingTab;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionStarter extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $RMMSectionStarter = new FieldsBuilder('RMMSectionStarter');

        $RMMSectionStarter
            ->setLocation('post_type', '==', '');

        $RMMSectionStarter
            ->addGroup('RMMSectionStarter_group', [
                'label' => '',
            ])
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            ->addGroup('sectionContent', [
                'label' => '',
                'layout' => 'block',
            ])


            ->addTextarea('placeholder_field', [
                'label' => 'PlaceHolder Field',
            ])

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

        return $RMMSectionStarter->build();
    }
}
