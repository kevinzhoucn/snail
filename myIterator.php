<?php

#class myIterator
class myIterator implements Iterator {
	private $position = 0;
	private $array = array(
			"firstelement",
			"secondelement",
			"lastelement"	
	);
	public function __construct() {
		$this->position = 0;
	}
	
	function rewind() {
		var_dump(__METHOD__);
		$this->position = 0;
	}

	function current() {
		(__METHOD__);
		return $this->array[$this->position];
	}
	
	function key() {
		var_dump(__METHOD__);
		return $this->position;
	}
	
	function next() {
		var_dump(__METHOD__);
		++$this->position;
	}
	
	function valid() {
		var_dump(__METHOD__);
		return isset($this->array[$this->position]);
	}
}
#end myIterator

$it = new myIterator;
foreach($it as $key => $value) {
	//var_dump($key, $value);
	echo "key: $key, value: $value";
	echo "\n";
}

$a = array('green', 'red', 'yellow');
$a[] = 'blue';

$b = array();
$b[] = 'a';
$b[] = 'b';

var_dump($a);
var_dump($b);

?>