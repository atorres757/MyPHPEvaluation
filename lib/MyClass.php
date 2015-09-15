<?php

require ('MyAbstractClass.php');
require ('MyInterspace.php');

class MyClass extends MyAbstractClass implements MyInterface {
	
	private $message = array();
	
	public function __construct () {
		$this->setVariable("message", "WW91IGRpZCBpdCEKCg==");
	}
	
	protected function hello () {
		return $this->callGetMessage();
	}
	
	private function getMessage() {
		$_message = $this->getVariable("message");
		return base64_decode($message);
	}

}