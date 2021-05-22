<?php

namespace is\Masters\Modules\Isengine\Skeleton;

use is\Helpers\System;
use is\Helpers\Objects;
use is\Helpers\Strings;

$instance = $object -> get('instance');
$sets = &$object -> settings;

//echo print_r($object, 1);

//$object -> eget('container') -> addClass('new');
//$object -> eget('container') -> open(true);
//$object -> eget('container') -> close(true);
//$object -> eget('container') -> print();

?>

<div class="<?= $instance; ?>">
	
	<p><?= $sets['key']; ?></p>
	
	<?php
		if (System::typeIterable($sets['array'])) {
	?>
	<ul>
	<?php
		foreach ($sets['array'] as $item) {
	?>
		<li><?= $item; ?></li>
	<?php
		}
		unset($item);
	?>
	</ul>
	<?php
		}
	?>
	
	<?php $object -> blocks('block'); ?>
	
</div>
