<?php

namespace is\Masters\Modules\Isengine;

use is\Helpers\System;
use is\Helpers\Objects;
use is\Helpers\Strings;

use is\Masters\Modules\Master;
use is\Masters\View;

class Skeleton extends Master {
	
	public function launch() {
		
		// если нет ключа, пробуем взять ключ из СЕО
		
		$sets = &$this -> settings;
		$state = $this -> someMethod();
		
	}
	
	public function someMethod() {
		
		$view = View::getInstance();
		return( $view -> get('state|settings') );
		
	}
	
}

?>