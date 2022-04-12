<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Section extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Section';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Section | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $section = new FieldsBuilder('section');

        $section
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $section->build();
    }
}
