<?php
/* ==========================================================================
    * Filename: RMMSectionSplitPhotoContent.php
    * Description:
    * Fields Behavior: Choose to get fields from parent, current post or none.
    * Reference:
    * Author: @ryanemitchell
    ========================================================================== */
namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class RMMSectionSplitContentServices extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $rmmSectionSplitContentServices = new FieldsBuilder('rmm_section_split_content_services');

        $rmmSectionSplitContentServices
            ->addGroup('SectionSplitContentServices_group', [
                'label' => '',
            ])

            /* ===========================  CONTENT TAB  ========================== */
            ->addTab('contentTab', [
                'label' => 'Content',
            ])

//            ->addFields($this->get(comboDisplayToggles::class))
//            ->modifyField('display_from', [
//                'choices' => [
//                    'on' => 'Show',
//                    'Off' => 'Off',
//                ],
//                'default_value' => 'on',
//            ])


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


            /* ===  Left Column Content  ==== */
            ->addGroup('sectionContentLeft', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '50%',
                ],
            ])

            ->addText('tagline', [
                'label' => 'Tagline',
            ])

            ->addText('header', [
                'label' => 'Header',
            ])

            ->addWysiwyg('content', [
                'label' => 'About Content',
            ])

            ->addTrueFalse('showCTA', [
                'label' => 'Show CTA?',
                'default_value' => 1,
                'ui' => 1,

            ])



            ->endGroup()

            /* ===  Right Column Content  ==== */
            ->addGroup('sectionContentRight', [
                'label'   => '',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '50%',
                ],
            ])


            ->addTab('featuredService', [
                'label' => 'Featured Service',
            ])

            ->addGroup('featuredService', [
                'label'   => ' Service',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '',
                ],
            ])

            ->addFields($this->get(comboImageWithAltTitle::class))
	        ->modifyField('combo_image_with_alt_title', ['required' => 1])



	    ->addText('title', [
                'label' => 'Featured Service Title',
                'required' => 1,
            ])
            ->addText('link', [
                'label' => 'Featured Service Link',
                'required' => 1,
            ])

            ->addText('subServiceOneTitle', [
                'label' => 'Sub-service 1 Title',
                'required' => 1,
            ])
            ->addText('subServiceOneLink', [
                'label' => 'Sub-service 1 link',
                'required' => 1,
            ])

            ->addText('subServiceTwoTitle', [
                'label' => 'Sub-service 2 Title',
                'required' => 1,
            ])
            ->addText('subServiceTwoLink', [
                'label' => 'Sub-service 2 link',
                'required' => 1,
            ])

            ->addText('subServiceThreeTitle', [
                'label' => 'Sub-service 3 Title',
                'required' => 1,
            ])
            ->addText('subServiceThreeLink', [
                'label' => 'Sub-service 3 link',
                'required' => 1,
            ])

	        ->endGroup()


	        ->addTab('serviceOne', [
		        'label' => 'Service 1',
	        ])

            ->addGroup('serviceOne', [
                'label'   => 'Service 1',
                'layout'  => 'block',
                'wrapper' => [
                    'width' => '',
                ],
            ])

            ->addFields($this->get(comboImageWithAltTitle::class))
	        ->modifyField('combo_image_with_alt_title', ['required' => 1])

            ->addText('title', [
                'label' => 'Title',
                'required' => 1,
            ])

            ->addText('link', [
                'label' => 'Link',
                'required' => 1,
            ])

            ->endGroup()

	        ->addTab('servicetwo', [
		        'label' => 'Service 2',
	        ])

	        ->addGroup('serviceTwo', [
		        'label'   => 'Service 2',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '',
		        ],
	        ])

	        ->addFields($this->get(comboImageWithAltTitle::class))
	        ->modifyField('combo_image_with_alt_title', ['required' => 1])

	        ->addText('title', [
		        'label' => 'Title',
		        'required' => 1,
	        ])

	        ->addText('link', [
		        'label' => 'Link',
		        'required' => 1,
	        ])

	        ->endGroup()

	        ->addTab('servicethree', [
		        'label' => 'Service 3',
	        ])

	        ->addGroup('serviceThree', [
		        'label'   => 'Service 3',
		        'layout'  => 'block',
		        'wrapper' => [
			        'width' => '',
		        ],
	        ])

	        ->addFields($this->get(comboImageWithAltTitle::class))
	        ->modifyField('combo_image_with_alt_title', ['required' => 1])

	        ->addText('title', [
		        'label' => 'Title',
		        'required' => 1,
	        ])

	        ->addText('link', [
		        'label' => 'Link',
		        'required' => 1,
	        ])

	        ->endGroup()








            ->endGroup()
            ->endGroup()
            /* ===========================  STYLING TAB  ========================== */
            ->addTab('stylingTab', [
                'label' => 'Styling',
            ])
            ->addFields($this->get(sectionStylingTab::class))
            ->endGroup();

        return $rmmSectionSplitContentServices;
    }
}
