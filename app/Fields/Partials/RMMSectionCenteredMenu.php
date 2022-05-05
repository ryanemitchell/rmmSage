<?php
/* ==========================================================================
    * Filename: RMMSectionCenteredMenu.php
    * Description: Simple section with header text, menu from wp-admin and footer text
    * Fields Behavior: Choos+e to get fields from parent, current post or none.
    * Reference: NA
    * Author: @ryanemitchell
    ========================================================================== */
namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionCenteredMenu extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rmmSectionCenteredMenu = new FieldsBuilder('rmm_section_centered_menu');

        $rmmSectionCenteredMenu
            ->addGroup('SectionCenteredMenu_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

            ->addFields($this->get(comboDisplayToggles::class))


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

            ->addField('menu', 'menu')
            ->setLabel('Menu')
            ->setInstructions('Select a Menu')
            ->setConfig('return_format', 'object')

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

        return $rmmSectionCenteredMenu;
    }
}
