<?php

/**
 * Filename: rmmFunctions.php
 * Description:
 * Author: ryan
 */

/**
 * rmmGetField('field_name', 'default_value', 0)
 *
 * $field name = name of the ACF field
 * $default = value if not found
 * bool = is from ACF option page
 * @return  $rmField
 *
 * @php $pageTitle = rmmGetField('page_title', get_the_title(), 0); @endphp
 */

function rmmGetField($fieldName, $default = null, $options = false)
{
    if ($options == true) {
        $options = 'option';
    } else {
        $options = '';
    }

    if (get_field($fieldName, $options)) {
        $rmmField = get_field($fieldName, $options);
    } else {
        $rmmField = $default;
    }

    return $rmmField;
}
