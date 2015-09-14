<?php

require ('MyAbstractClass.php');
require ('MyInterspace.php');

class MyClass extends MyAbstractClass implements MyInterface {
	
	private $message = "";
	
	public function __construct () {
		$this->_message = "WW91IGRpZCBpdCE=";
	}
	
	protected function hello () {
		return $this->getMessage();
	}
	
	private function getMessage() {
		return base64_decode($this->message);
	}

}