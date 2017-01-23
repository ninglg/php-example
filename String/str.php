<?php

$data = array(
'apple',
'orange',
'pear',
);

$str = implode('$$', $data);
echo $str;

echo "\n";
print_r(str_split($str, 3));

echo "\n";
echo substr($str, 3, -2);

echo "\n";
echo strstr($str, 'ge');

echo "\n";
$data = '13566667777';
echo substr_replace($data, "####", 3, 4);

echo "\n";
$data = '13566667777';
echo str_replace('6', '#', $data);

echo "\n";
$data = '13566667777';
echo strlen($data);
echo "\n";
echo strpos($data, '6');
echo "\n";
echo strrpos($data, '6');

echo "\n";
$data = "what's your name?";
echo addslashes($data);
//stripslashes()

