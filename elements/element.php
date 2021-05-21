<?php

namespace is\Masters\Modules\Isengine\Skeleton;

use is\Helpers\System;
use is\Helpers\Objects;
use is\Helpers\Strings;

use is\Masters\View;

$sets = &$object -> settings;
$instance = &$object -> instance;

$view = View::getInstance();

?>
<div class="<?= Strings::join($sets['classes'], ' '); ?>">
	<?= $view -> get('lang|title'); ?>
</div>