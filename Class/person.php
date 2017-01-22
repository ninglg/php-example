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

echo $a->name;
echo $a->sex;
echo $a->age;
