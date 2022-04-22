<h2>This Pages Fields</h2>
<?php


$pageFields = get_fields( get_the_ID() );

if ($pageFields) : ?>
<ul>
	<?php foreach ($pageFields as $name => $value) :
	?>
	@dump($value) <br>

	<?php endforeach; ?>
</ul>
<?php endif; ?>
<br><hr>
