<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class componentAccordion extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $componentAccordion = new FieldsBuilder('component_accordion');

        $componentAccordion
            ->addRepeater('accordion', [
                'label' => 'Accordion',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'collapsed' => 'title',
                'min' => 0,
                'max' => 0,
                'layout' => 'row',
                'button_label' => 'Add Item',
            ])
            ->addText('title', [
                'label' => 'Title',
                'instructions' => '',
                'required' => 1,
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
                ->addWysiwyg('content', [
                'label' => 'Content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 1,
            ])
            ->endRepeater()

            ->addTrueFalse('showMultiple', [
                'label' => 'Allow multiple?',
                'instructions' => 'The ability to open multiple accordions simultaneously',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Off',
            ])

            ->addTrueFalse('openfirst', [
                'label' => 'Open first accordion on load?',
                'instructions' => 'Start with the first accordion open.',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '50%',
                    'class' => '',
                    'id' => '',
                ],
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Off',
            ])






        ;

        return $componentAccordion;
    }
}
