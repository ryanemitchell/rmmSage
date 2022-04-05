<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\basicSection;


class exampleSection extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $example = new FieldsBuilder('example');

        $example
            ->setLocation('page_template', '==', 'template-development-flexible-content.blade.php');

        $example
            ->addFlexibleContent('flexible_content_field', [
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'button_label' => 'Add Row',
                'min' => '',
                'max' => '',
            ])


            ->addLayout('layout', [
                'label' => 'Layout',
                'display' => 'block',
                'sub_fields' => ['list_items'],
                'min' => '',
                'max' => '',
            ])


        ->addFields($this->get(basicSection::class));






        return $example->build();
    }
}
