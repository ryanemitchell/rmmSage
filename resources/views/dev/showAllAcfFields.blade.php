<h2>ALL ACF Fields</h2>
<?php

$groups = acf_get_field_groups();
foreach ($groups as $group) {
    $fields = acf_get_fields($group);
    if ($fields) {
        foreach ($fields as $field) { ?>
            @dump($field) <br><hr>
        <?php   }
    }
}?>

<br><hr>
