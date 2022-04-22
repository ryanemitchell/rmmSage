<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboLinksRepeater extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboLinksRepeater = new FieldsBuilder('combo_links_repeater');

        $comboLinksRepeater
            ->addRepeater('links_repeater', [
                'label' => 'Links',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [
                    'field' => 'display_from',
                    'operator' => '==',
                    'value' => 'On',],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],

                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Link',
                'sub_fields' => [],
            ])


            ->addText('link_name', [
                'label' => 'Name',
                'instructions' => '',
                'required' => 1,
                'wrapper' => [
                    'width' => '40',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ])


            ->addPageLink('link_url', [
                'label' => 'Link (Not required)',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '60',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['page'],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 0,
                'multiple' => 0,
            ]);

        return $comboLinksRepeater;
    }
}
