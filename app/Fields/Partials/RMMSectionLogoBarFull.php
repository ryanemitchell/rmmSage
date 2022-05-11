<?php
/* ==========================================================================
    * Filename: RMMSectionLogoBarFull.php
    * Description: Photo and Content Section
    * - Fields from Single post Only
    * Reference:
    * Author: ryan
    ========================================================================== */
namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;
use app\lib\RmmSageFunctions;

class RMMSectionLogoBarFull extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     * @throws \StoutLogic\AcfBuilder\FieldNotFoundException
     */
    public function fields()
    {
        $rmmSectionLogoBarFull = new FieldsBuilder('rmmSection_logo_bar_full');

        $rmmSectionLogoBarFull

            ->addGroup('rmmSectionLogoBarFull', [ 'label' => ''])

	        ->addTab('contentTab', [
		        'label' => 'Content',
	        ])


	        ->addMessage('message_field', 'message', [
		        'label' => 'Message Field',
		        'instructions' => '',
		        'required' => 0,
		        'conditional_logic' => [],
		        'wrapper' => [
			        'width' => '',
			        'class' => '',
			        'id' => '',
		        ],
		        'message' => 'This section\'s content is edited in the Wit Sections > Logos Menu',
		        'new_lines' => 'wpautop', // 'wpautop', 'br', '' no formatting
		        'esc_html' => 0,
	        ])

	        ->addTab('stylingTab', [
		        'label' => 'Styling',
	        ])

	        ->addFields($this->get(SectionStylingTab::class))

            ->endGroup();











        return $rmmSectionLogoBarFull;
    }
}
