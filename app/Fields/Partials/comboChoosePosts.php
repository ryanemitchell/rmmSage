<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class comboChoosePosts extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $comboChoosePosts = new FieldsBuilder('combo_choose_posts');

        $comboChoosePosts
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $comboChoosePosts;
    }
}
