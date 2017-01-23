<?php
//类的魔术方法
class Person {
	private $name;
	private $sex;
	private $age;

	function __construct() {
		$this->name = "XiaoMing";
		$this->sex = "M";
		$this->age = 18;
	}

	function __set($key, $value) {
		if ($key == "sex") {
			if (!in_array($value, array('M', 'F'))) {
				return;
			}
		}

		$this->$key = $value;
	}

	function __get($key) {
		if ($key == 'age') {
			return 'Secret!';
		}

		return $this->$key;
	}

	function __isset($key) {
		return isset($this->$key);
	}

	function __unset($key) {
		unset($this->$key);
	}

	function echo () {
		echo $this->name . " " . $this->sex . " " . $this->age . "\n";
	}

}

$a = new Person;
$a->echo();

$a->sex = 'F';
$a->echo();

$a->sex = 'G';
$a->echo();

echo $a->name . "\n";
echo $a->sex . "\n";
echo $a->age . "\n";

var_dump(isset($a->name));
unset($a->name);