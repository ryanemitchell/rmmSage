<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageSettings extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageSettings = new FieldsBuilder('page_settings', ['position' => 'side']);




	    $pageSettings
            ->setLocation('post_type', '==', 'page');

        $pageSettings
	        ->addText('pageTitle', [
		        'label' => 'Page Title',
		        'instructions' => 'Text that will appear in the page header. If empty the page title from wordpress will be used. ',
		        'required' => 0,
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
	        ]);

        return $pageSettings->build();
    }
}
