<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SectionDisplayFields extends Partial
{
    /**
     * The partial field group.
     *
     * @return FieldsBuilder
     * @throws \StoutLogic\AcfBuilder\FieldNameCollisionException
     */
    public function fields(): FieldsBuilder
    {
        $sectionDisplayFields = new FieldsBuilder('section_common_fields');

        $sectionDisplayFields
            ->addText('class_name', [
                'label'         => 'Class Name',
                'wrapper'       => [
                    'width' => '33%',
                ],
            ])
            ->addTrueFalse('show_on_desktop', [
                'label'             => 'Show on Desktop',
                'default_value' => 1,
                'wrapper'           => [
                    'width' => '33',
                ],

            ])
            ->addTrueFalse('show_on_mobile', [
                'label'             => 'Show on Mobile',
                'default_value' => 1,
                'wrapper'           => [
                    'width' => '33',

                ],

            ]);


        return $sectionDisplayFields;
    }
}
