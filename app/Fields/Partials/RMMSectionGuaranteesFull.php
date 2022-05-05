<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionGuaranteesFull extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rmmSectionGuaranteesFull = new FieldsBuilder('rmm_section_guarantees_full');

        $rmmSectionGuaranteesFull
            ->addGroup('SectionGuaranteesFull_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            ->addFields($this->get(comboDisplayToggles::class))

            ->addField('menu', 'menu')
            ->setLabel('Menu')
            ->setInstructions('Select a Menu')
            ->setConfig('return_format', 'object')

            /* ===  Section Content  ==== */
            ->addGroup('sectionContent', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '100%',
                ],
                'conditional_logic' => [
                    'field' => 'display_from',
                    'operator' => '==',
                    'value' => 'On',],
            ])
            ->addFields($this->get(comboHeaderWithLevels::class))
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
                'delay' => 0,
            ])
            ->addFields($this->get(comboListWithOptions::class))





            ->addText('footer_text', [
                'label' => 'Footer',
                          ])
            ->endGroup()

            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();

        return $rmmSectionGuaranteesFull;
    }
}
