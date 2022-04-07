<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class socialLinks extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $socialLinks = new FieldsBuilder('social_links');

        $socialLinks
            ->addRepeater('social_links', [
                'label' => 'Social Links',
                'instructions' => '',
                'required' => 0,
                'collapsed' => 'site_name',
                'layout' => 'block',
                'button_label' => 'Add Site',


            ])
            ->addText('site_name', [
                'label' => 'Site Name',
                'required' => 1,
                'wrapper' => [
                    'width' => '75%',
                ],
            ])

            ->addTrueFalse('is_active', [
                'label' => 'Is Active',
                'instructions' => '',
                'required' => 0,
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Active',
                'ui_off_text' => 'Not Active',
                'wrapper' => [
                    'width' => '25%',
                ],
            ])

            ->addUrl('site_URL', [
                'label' => 'Site URL',
                'required' => 1,
            ])


            ->addImage('default_icon', [
                'label' => 'Default Icon',
                'required' => 1,
                'wrapper' => [
                    'width' => '50%',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'mime_types' => 'jpg,svg,gif,png',
            ])

            ->addImage('hover_icon', [
                'label' => 'hover Icon',
                'required' => 0,
                'wrapper' => [
                    'width' => '50%',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'mime_types' => 'jpg,svg,gif,png',
            ])



            ->endRepeater();






        return $socialLinks;
    }
}
