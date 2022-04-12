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
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $pageSettings->build();
    }
}
